<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Assessment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('assessments.attempt-histories.store', $assessment) }}" method="POST">
                        @csrf

                        {{-- Iterasi pertanyaan dalam assessment --}}
                        @foreach ($assessment->questions as $question)
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold">{{ $question->question_text }}</h3>

                                {{-- Pertanyaan Multiple Choice --}}
                                @if ($question->questionable_type === 'App\Models\MultipleChoiceQuestion')
                                    @foreach ($question->questionable->multiple_choice_options as $option)
                                        <div class="flex items-center mb-3">
                                            <input type="radio" name="answers[{{ $question->id }}]"
                                                id="option_{{ $option->id }}" value="{{ $option->id }}"
                                                class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                            <label for="option_{{ $option->id }}"
                                                class="cursor-pointer text-gray-700">{{ $option->option_text }}</label>
                                        </div>
                                    @endforeach

                                {{-- Pertanyaan Essay --}}
                                @elseif ($question->questionable_type === 'App\Models\EssayQuestion')
                                    <textarea name="answers[{{ $question->id }}]" rows="4"
                                        class="w-full mt-2 p-2 border rounded-md"
                                        placeholder="Write your answer here...">{{ old('answers.' . $question->id) }}</textarea>
                                @endif
                            </div>
                        @endforeach

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                                Submit Assessment
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
