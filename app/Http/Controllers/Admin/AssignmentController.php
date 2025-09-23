<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Assignment\StoreRequest;
use App\Imports\AssignmentsImport;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::where('user_id', null)->where('status', 'pending')->latest()->orderBy('id', 'desc')->get();
        $users = User::where('role', 'agent')->get();

        return view('screens.admin.assignment.index', get_defined_vars());
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $assignment = Assignment::create([
            'company' => $request->insurance,
            'owner' => $request->owner,
            'owner_phone' => $request->owner_phone,
            'owner_email' => $request->owner_email,
            'claim' => $request->claim,
            'claim_type' => $request->claim_type,
            'loss_type' => $request->loss_type,
            'vehicle_location' => $request->vehicle_location,
            'appointment_date' => $request->appointment,
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'assignment added successfully'
        ]);
    }

    public function assignAgent(Request $request)
    {
        $assignment = Assignment::find($request->assignment);

        $assignment->update([
            'user_id' => $request->agent,
            'status' => 'pending'
        ]);

        return response()->json([
            'status' => true,
            'message' => 'assign agent successfully.',
            'assign_status' => $assignment->status,

        ]);
    }

    public function edit($id) {}

    public function update($id) {}

    public function task()
    {
        $assignments = Assignment::whereNotNull('user_id')->where('status', 'pending')->orderBy('id', 'desc')->get();
        $users = User::where('role', 'agent')->get();

        return view('screens.admin.assignment.task', get_defined_vars());
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,xlsx'
        ]);

        \Log::info('Uploaded file MIME type: ' . $request->file('file')->getClientMimeType());
        \Log::info('Uploaded file extension: ' . $request->file('file')->getClientOriginalExtension());

        DB::beginTransaction();

        try {
            $import = new AssignmentsImport();
            Excel::import($import, $request->file('file'));

            $successCount = $import->getSuccessCount();
            $errors = $import->getErrors();

            // Check for empty CSV (no rows processed, no errors)
            if ($successCount === 0 && empty($errors)) {
                DB::rollBack();
                $errorMessage = 'The uploaded CSV file is empty. Please upload a file with valid data.';

                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                    ], 422);
                }

                return back()->with('error', $errorMessage);
            }

            // Check for zero successful imports with errors (all rows failed) - ROLLBACK
            if ($successCount === 0 && !empty($errors)) {
                DB::rollBack();
                $errorCsvPath = $this->generateErrorCsv($errors);
                $errorMessage = 'No rows were imported due to validation errors. Download the error CSV for details.';

                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'error_csv' => $errorCsvPath,
                        'success_count' => 0,
                    ], 422);
                }

                return back()->with([
                    'error' => $errorMessage,
                    'error_csv' => $errorCsvPath,
                    'success_count' => 0,
                ]);
            }

            // At this point, we have at least one successful import
            // COMMIT the transaction for partial or full success
            DB::commit();

            // Check for partial success (some rows failed) - SHOW AS WARNING
            if (!empty($errors)) {
                $errorCsvPath = $this->generateErrorCsv($errors);
                $message = "Imported {$successCount} assignments successfully, but " . count($errors) . " rows had errors. Download the error CSV for details";

                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false, // Changed to false for warning style
                        'message' => $message,
                        'error_csv' => $errorCsvPath,
                        'success_count' => $successCount,
                        'error_count' => count($errors),
                        'type' => 'warning', // Add type indicator for frontend
                    ], 206);
                }

                return back()->with([
                    'warning' => $message, // Use 'warning' instead of 'success'
                    'error_csv' => $errorCsvPath,
                    'success_count' => $successCount,
                ]);
            }

            // Full success (all rows imported, no errors)
            $message = "Imported {$successCount} assignments successfully!";

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $message,
                    'success_count' => $successCount,
                ], 201);
            }

            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Import error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            $errorMessage = $e->getMessage() === 'Could not find zip member'
                ? 'Invalid or corrupted XLSX file. Please upload a valid CSV or XLSX file.'
                : 'Failed to process the file: ' . $e->getMessage();

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                ], 400);
            }

            return back()->with('error', $errorMessage);
        }
    }

    private function generateErrorCsv($errors)
    {
        $columns = ['insurance', 'owner_name', 'owner_phone', 'owner_email', 'claim_number', 'claim_type', 'loss_type', 'vehicle_location', 'appointment_date'];
        $headers = array_merge(['Row'], $columns, ['Errors']);
        $csvData = implode(',', $headers) . "\n";

        foreach ($errors as $error) {
            $rowData = [$error['row']];
            foreach ($columns as $column) {
                $value = isset($error['values'][$column]) ? str_replace([",", "\n", "\r"], ' ', $error['values'][$column]) : '';
                $rowData[] = $value;
            }
            $errorsColumn = implode(', ', $error['errors']);
            $rowData[] = str_replace([",", "\n", "\r"], ' ', $errorsColumn);
            $csvData .= implode(',', $rowData) . "\n";
        }

        $fileName = 'assignment_import_errors_' . now()->timestamp . '.csv';
        $path = public_path('Uploads/error_logs/' . $fileName);

        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        file_put_contents($path, $csvData);

        return asset('Uploads/error_logs/' . $fileName);
    }

    public function completeAssign()
    {

        $assignments = Assignment::where('status', 'completed')->orderBy('updated_at', 'desc')->get();

        $users = User::where('role', 'agent')->get();


        return view('screens.admin.assignment.complete', get_defined_vars());
    }

    public function searchAssign(Request $request)
    {
        // dd($request->all(),$request->search_query);

        $searchQuery = $request->search_query;

        $assignments = Assignment::where('claim', 'like', "%{$searchQuery}%")
            ->orWhere('owner', 'like', "%{$searchQuery}%")->take(20)
            ->get();

        $assignments = count($assignments) == 0 ? 'No Results Found' : $assignments;

        $users = User::where('role', 'agent')->get();

        $html = view('includes.web.assignment-dropdown', get_defined_vars())->render();

        return response()->json([
            'status' => 'true',
            'assignments' => $assignments,
            'message' => 'assignments searched successfully.',
            'users' => $users,
            'html' => $html
        ]);
    }
}
