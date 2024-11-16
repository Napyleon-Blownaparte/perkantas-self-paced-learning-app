<?php

namespace App\Http\Requests;

use App\Models\Question;
use Illuminate\Foundation\Http\FormRequest;

class StoreAttempt_HistoryRequest extends FormRequest
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
public function rules()
    {
        // Mendapatkan semua pertanyaan yang terlibat dalam ujian
        $questionIds = array_keys($this->input('answers', [])); // Mendapatkan semua ID pertanyaan dari jawaban

        $rules = [
            'answers' => 'required|array', // 'answers' harus berupa array
        ];

        // Menambahkan aturan untuk setiap pertanyaan dalam 'answers'
        foreach ($questionIds as $questionId) {
            $question = Question::find($questionId);

            if ($question) {
                // Jika jenis soal adalah Essay
                if ($question->questionable_type === 'App\Models\EssayQuestion') {
                    // Jawaban harus berupa string yang tidak boleh kosong untuk soal essay
                    $rules["answers.$questionId"] = 'required|string';
                }
                // Jika jenis soal adalah MultipleChoice
                else if ($question->questionable_type === 'App\Models\MultipleChoiceQuestion') {
                    // Jawaban harus berupa pilihan yang valid dan tidak boleh kosong untuk soal pilihan ganda
                    $choices = $question->questionable->choices->pluck('id')->toArray(); // Mendapatkan pilihan jawaban yang valid
                    $rules["answers.$questionId"] = 'required|in:' . implode(',', $choices);
                }
            }
        }

        return $rules;
    }

        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'answers.required' => 'Jawaban harus diisi.',
            'answers.array' => 'Jawaban harus berupa array.',
            'answers.*.required' => 'Jawaban untuk setiap pertanyaan harus diisi.',
            'answers.*.string' => 'Jawaban harus berupa teks.',
            'answers.*.in' => 'Jawaban yang dipilih tidak valid.',
        ];
    }
}


