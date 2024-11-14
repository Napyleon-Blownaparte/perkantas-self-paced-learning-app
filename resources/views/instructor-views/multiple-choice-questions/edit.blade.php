<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Multiple Choice Question') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Form untuk mengedit pertanyaan pilihan ganda --}}
                    <form action="{{ route('multiple-choice-questions.update', $multiple_choice_question) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Pertanyaan -->
                        <div class="mb-4">
                            <x-input-label for="question_text" :value="__('Question Text')" class="block text-gray-700" />
                            <x-text-input id="question_text" type="text" name="question_text" :value="old('question_text', $multiple_choice_question->question->question_text)" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('question_text')" class="mt-2" />
                        </div>

                        <!-- Opsi Pilihan Ganda -->
                        @for ($i = 1; $i <= 4; $i++)
                        <x-input-label for="option_{{ $i }}" :value="__('Option ') . $i" class="text-gray-700 mr-2 ml-6 mb-4" />
                            <div class="mb-4 flex items-center">
                                <!-- Radio button -->
                                <input type="radio" name="correct_option" value="{{ $i }}" required
                                    {{ old('correct_option', $multiple_choice_question->correct_option) == $i ? 'checked' : '' }}
                                    class="form-radio text-indigo-600 mr-2">

                                <!-- Input text untuk opsi -->
                                <x-text-input id="option_{{ $i }}" type="text" name="option_{{ $i }}" :value="old('option_' . $i, $multiple_choice_question->multiple_choice_options[$i - 1]->option_text)" required
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                                <x-input-error :messages="$errors->get('option_' . $i)" class="mt-2" />
                            </div>
                        @endfor

                        <x-primary-button type="submit">Update Multiple Choice Question</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
