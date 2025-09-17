<?php

namespace App\Imports;

use App\Models\Assignment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Carbon\Carbon;

class AssignmentsImport implements ToCollection, WithHeadingRow
{
    use SkipsFailures;

    protected $errors = [];
    protected $successCount = 0; // Add success counter

    /**
     * Parse appointment_date and handle Excel numeric timestamps
     */
    private function parseAppointmentDate($value)
    {
        \Log::debug('Raw appointment_date: ' . (string) $value);

        // Handle Excel numeric timestamp (e.g., 45992.4375)
        if (is_numeric($value) && $value > 10000) {
            try {
                $excelBaseDate = Carbon::createFromDate(1899, 12, 31, 'UTC');
                $days = floor($value);
                $fraction = $value - $days;
                $hours = floor($fraction * 24);
                $minutes = floor(($fraction * 24 - $hours) * 60);
                $seconds = floor((($fraction * 24 - $hours) * 60 - $minutes) * 60);
                $date = $excelBaseDate->copy()->addDays($days)->setTime($hours, $minutes, $seconds);
                $formatted = $date->format('m/d/Y h:i:s A');
                \Log::debug('Parsed numeric appointment_date: ' . $formatted);
                return [
                    'date' => $date,
                    'formatted' => $formatted,
                ];
            } catch (\Exception $e) {
                \Log::debug('Failed to parse numeric appointment_date: ' . $e->getMessage());
                return null;
            }
        }

        // Try parsing as M/D/YYYY h:mm:ss A
        try {
            $date = Carbon::createFromFormat('m/d/Y h:i:s A', $value, 'Asia/Karachi');
            if ($date) {
                \Log::debug('Parsed appointment_date (M/D/YYYY): ' . $value);
                return [
                    'date' => $date,
                    'formatted' => $value,
                ];
            }
        } catch (\Exception $e) {
            // Fallback to any valid date format
            try {
                $date = Carbon::parse($value, 'Asia/Karachi');
                $formatted = $date->format('m/d/Y h:i:s A');
                \Log::debug('Parsed appointment_date (fallback): ' . $formatted);
                return [
                    'date' => $date,
                    'formatted' => $formatted,
                ];
            } catch (\Exception $e) {
                \Log::debug('Failed to parse appointment_date: ' . $e->getMessage());
                return null;
            }
        }

        return null;
    }

    public function collection(Collection $rows)
    {
        $required = ['insurance', 'owner_name', 'owner_phone', 'owner_email', 'claim_number', 'claim_type', 'loss_type', 'vehicle_location', 'appointment_date'];
        $currentDateTime = Carbon::now('Asia/Karachi');

        foreach ($rows as $key => $row) {
            try {
                // Skip empty rows
                if ($row->filter(fn ($value) => !is_null($value) && trim((string) $value) !== '')->isEmpty()) {
                    continue;
                }

                $rowErrors = [];
                $rowValues = [];

                // Collect values for CSV
                foreach ($required as $field) {
                    $value = $row[$field] ?? '';
                    if ($field === 'appointment_date' && $value) {
                        $parsed = $this->parseAppointmentDate($value);
                        $rowValues[$field] = $parsed ? $parsed['formatted'] : (string) $value;
                    } else {
                        $rowValues[$field] = (string) $value;
                    }
                }

                // Validate in serial order
                foreach ($required as $field) {
                    if (!isset($row[$field]) || trim((string) $row[$field]) === '') {
                        $rowErrors[] = "The {$field} field is required.";
                    }
                }

                // owner_phone validation
                if (isset($row['owner_phone']) && trim((string) $row['owner_phone']) !== '') {
                    $phone = trim((string) $row['owner_phone']);
                    if (!preg_match('/^[\+\-\(\)0-9\s]*$/', $phone)) {
                        $rowErrors[] = "The owner_phone is invalid";
                    } else {
                        $digits = preg_replace('/[^0-9]/', '', $phone);
                        if (strlen($digits) < 8 || strlen($digits) > 15) {
                            $rowErrors[] = "The owner_phone is invalid";
                        }
                    }
                }

                // owner_email validation
                if (isset($row['owner_email']) && trim((string) $row['owner_email']) !== '' && !filter_var($row['owner_email'], FILTER_VALIDATE_EMAIL)) {
                    $rowErrors[] = "The owner_email must be a valid email.";
                }

                // appointment_date validation
                if (isset($row['appointment_date']) && trim((string) $row['appointment_date']) !== '') {
                    $parsed = $this->parseAppointmentDate($row['appointment_date']);
                    if (!$parsed) {
                        $rowErrors[] = "The appointment_date must be a valid datetime (e.g., 12/1/2025 10:30:00 AM).";
                    } else {
                        $date = $parsed['date'];
                        if ($date->lessThanOrEqualTo($currentDateTime)) {
                            $rowErrors[] = "The appointment_date must be a future date and time.";
                        }
                    }
                }

                // Formula detection
                foreach ($required as $column) {
                    $value = $row[$column] ?? '';
                    if (is_string($value) && str_starts_with(trim($value), '=')) {
                        $rowErrors[] = "Formula detected in column '{$column}'. Remove all formulas before uploading.";
                    }
                }

                // If errors, collect them
                if (!empty($rowErrors)) {
                    $this->errors[] = [
                        'row' => $key + 2,
                        'values' => $rowValues,
                        'errors' => $rowErrors,
                    ];
                    \Log::warning('Row ' . ($key + 2) . ' failed validation: ' . implode(', ', $rowErrors));
                    continue;
                }

                // Parse appointment_date for storage
                $appointmentDate = $this->parseAppointmentDate($row['appointment_date']);
                if (!$appointmentDate) {
                    $this->errors[] = [
                        'row' => $key + 2,
                        'values' => $rowValues,
                        'errors' => ['The appointment_date must be a valid datetime (e.g., 12/1/2025 10:30:00 AM).'],
                    ];
                    \Log::warning('Row ' . ($key + 2) . ' failed validation: Invalid appointment_date format.');
                    continue;
                }

                // Create assignment
                Assignment::create([
                    'company' => $row['insurance'],
                    'owner' => $row['owner_name'],
                    'owner_phone' => $row['owner_phone'],
                    'owner_email' => $row['owner_email'],
                    'claim' => $row['claim_number'],
                    'claim_type' => $row['claim_type'],
                    'loss_type' => $row['loss_type'],
                    'vehicle_location' => $row['vehicle_location'],
                    'appointment_date' => $appointmentDate['date'],
                ]);

                $this->successCount++; // Increment success counter

            } catch (\Exception $e) {
                $rowValues = [];
                foreach ($required as $field) {
                    $value = $row[$field] ?? '';
                    if ($field === 'appointment_date' && $value) {
                        $parsed = $this->parseAppointmentDate($value);
                        $rowValues[$field] = $parsed ? $parsed['formatted'] : (string) $value;
                    } else {
                        $rowValues[$field] = (string) $value;
                    }
                }
                $this->errors[] = [
                    'row' => $key + 2,
                    'values' => $rowValues,
                    'errors' => ['Row processing failed: ' . $e->getMessage()],
                ];
                \Log::error('Error processing row ' . ($key + 2) . ': ' . $e->getMessage());
                continue;
            }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getSuccessCount()
    {
        return $this->successCount;
    }
}
