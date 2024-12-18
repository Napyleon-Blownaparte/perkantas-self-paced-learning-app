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
        // Mendapatkan semua ID pertanyaan terkait dengan assessment yang sedang dikerjakan
        $questionIds = $this->route('assessment')->questions->pluck('id')->toArray();

        $rules = [
            'answers' => 'required|array', // 'answers' harus berupa array
        ];

        // Menambahkan aturan validasi untuk setiap pertanyaan
        foreach ($questionIds as $questionId) {
            $question = Question::find($questionId);

            if ($question) {
                // Jika jenis soal adalah Essay
                if ($question->questionable_type === 'App\Models\EssayQuestion') {
                    $rules["answers.$questionId"] = 'required|string'; // Jawaban wajib untuk essay
                }
                // Jika jenis soal adalah Multiple Choice
                elseif ($question->questionable_type === 'App\Models\MultipleChoiceQuestion') {
                    $choicesCount = $question->questionable->multiple_choice_options->count();
                    $rules["answers.$questionId"] = 'required|in:' . implode(',', range(1, $choicesCount)); // Harus salah satu dari opsi 1, 2, 3, dst
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
            'answers.*.string' => 'Jawaban harus berupa teks untuk soal essay.',
            'answers.*.in' => 'Jawaban yang dipilih tidak valid untuk soal pilihan ganda.',
        ];
    }

}
