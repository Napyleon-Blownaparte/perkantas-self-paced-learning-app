<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Essay Question') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Form untuk mengedit pertanyaan esai --}}
                    <form action="{{ route('instructor.essay-questions.update', $essay_question) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menambahkan method PUT untuk edit -->

                        <!-- Pertanyaan -->
                        <div class="mb-4">
                            <x-input-label for="question_text" :value="__('Question Text')" class="block text-gray-700" />
                            <x-text-input id="question_text" type="text" name="question_text" :value="old('question_text', $essay_question->question->question_text)" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('question_text')" class="mt-2" />
                        </div>

                        <!-- Answer Key -->
                        <div class="mb-4">
                            <x-input-label for="answer_key" :value="__('Answer Key')" class="block text-gray-700" />
                            <x-text-input id="answer_key" type="text" name="answer_key" :value="old('answer_key', $essay_question->answer_key)" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('answer_key')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Update Essay Question</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
