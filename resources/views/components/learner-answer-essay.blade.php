@props(['question_text', 'question_key', 'learner_answer'])

<div class="mb-6">
    <h3 class="text-lg font-semibold">{{ $question_text }}</h3>

    <!-- Answer Key -->
    <label class="block text-sm font-medium text-gray-700 mt-2">Answer Key</label>
    <textarea disabled rows="4" class="w-full mt-1 p-2 rounded-md bg-green-100 text-gray-600">
        {{ $question_key }}
    </textarea>

    <!-- Learner Answer -->
    <label class="block text-sm font-medium text-gray-700 mt-4">Learner Answer</label>
    <textarea disabled rows="4" class="w-full mt-1 p-2 border rounded-md bg-gray-100 text-gray-600">
        {{ $learner_answer }}
    </textarea>
</div>
