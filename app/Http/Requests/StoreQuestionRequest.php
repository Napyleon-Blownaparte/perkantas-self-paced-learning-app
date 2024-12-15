<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
        // Get the type of question from the request
        $questionType = $this->input('questionType');

        if ($questionType === 'multiple-choice') {
            return [
                'question' => 'required|string', // Question must be a string and required
                'choices' => 'required|array|min:2', // Choices must be an array with at least 2 choices
                'choices.*' => 'required|string|max:255', // Each choice must be a string and required
                'correct_answer' => 'required|string|in:choice1,choice2,choice3,choice4', // Valid correct answers
            ];
        } elseif ($questionType === 'essay') {
            return [
                'question' => 'required|string', // Question must be a string and required
                'essay_answer' => 'required|string', // Essay answer must be required
            ];
        }

        return [];
    }
}
