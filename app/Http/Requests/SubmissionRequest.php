<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmissionRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'email.required' => 'A email is required',
            'message.required' => 'A message is required',
            'email.email' => 'email should be email valid format. e.g: john.doe@example.com'
        ];
    }
}
