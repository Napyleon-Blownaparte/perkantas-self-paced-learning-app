<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMultiple_Choice_QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ganti 'false' dengan 'true' jika pengguna diperbolehkan mengakses request ini.
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
            'question_text' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_option' => 'required|integer|in:1,2,3,4',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'question_text.required' => 'Question text is required.',
            'option_1.required' => 'Option 1 is required.',
            'option_2.required' => 'Option 2 is required.',
            'option_3.required' => 'Option 3 is required.',
            'option_4.required' => 'Option 4 is required.',
            'correct_option.required' => 'Please select the correct option.',
            'correct_option.in' => 'The correct option must be one of the options (1 to 4).',
        ];
    }
}
