<?php

namespace App\Http\Requests\Web\Assignment;

use Illuminate\Foundation\Http\FormRequest;

class DocsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'files.*' => 'required|mimes:pdf,docx,png,jpeg,jpg,jfif|max:500000'
        ];
    }

    public function messages(): array
    {
        return [
            'files.*.max' => 'Each file must not exceed 500MB in size.'
        ];
    }
}
