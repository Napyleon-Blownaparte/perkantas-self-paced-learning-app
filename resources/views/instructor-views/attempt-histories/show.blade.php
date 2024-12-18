<x-app-layout>
    <div class="flex-1 p-8 ml-16 mb-8">
        <h1 class="text-4xl font-bold mb-4">{{ $attempt_history->learner->user->name }}'s Attempt
            ({{ $attempt_history->assessment->name }})</h1>

        <!-- Iterasi untuk menampilkan soal -->
        @foreach ($attempt_history->questions as $question)
            {{-- Print question ID --}}
            <div>Question ID: {{ $question->id }}</div>
            @php
                // Ambil jawaban essay dari tabel LearnerAnswer
                $learner_answer = \App\Models\LearnersAnswer::where('question_id', $question->id)
                    ->where('attempt_history_id', $attempt_history->id)
                    ->first();

            @endphp

            {{-- Pertanyaan Essay --}}
            @if ($question->questionable_type === 'App\Models\EssayQuestion')
                <x-learner-answer-essay :question_text="$question->question_text" :question_key="$question->questionable->answer_key" :learner_answer="$learner_answer ? $learner_answer->essay_answer : 'No Answer'">
                </x-learner-answer-essay>
                {{-- Pertanyaan Multiple Choice --}}
            @elseif ($question->questionable_type === 'App\Models\MultipleChoiceQuestion')
                @php
                    // Ambil pilihan jawaban dari multiple_choice_options
                    $answers = $question->questionable->multiple_choice_options->pluck('option_text');

                    // Menentukan key_index dengan mencari opsi yang is_true == 1
                    $key_index = $question->questionable->multiple_choice_options->search(function ($option) {
                        return $option->is_true_option == 1;
                    });
                    // dd($key_index)
                @endphp

                <x-learner-answer-multi :question_text="$question->question_text" :answer_1="$answers[0]" :answer_2="$answers[1]" :answer_3="$answers[2]"
                    :answer_4="$answers[3]" :key_index="$key_index" :learner_answer="$learner_answer->multiple_choice_answer-1">
                </x-learner-answer-multi>
            @endif
        @endforeach
    </div>
</x-app-layout>
