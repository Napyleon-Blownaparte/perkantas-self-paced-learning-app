@props(['question_text', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'key_index', 'learner_answer'])

<div class="mb-6">
    <h3 class="text-lg font-semibold">{{ $question_text }}</h3>

    <div class="mt-4 space-y-2">
        <!-- Answer 1 -->
        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-green-500 border-gray-300 focus:ring-0"
                   {{ (int) $key_index === 0 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium 
                {{ (int) $key_index === 0 ? 'bg-green-100 px-2 rounded' : '' }}">
                {{ $answer_1 }}
            </label>
        </div>

        <!-- Answer 2 -->
        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-green-500 border-gray-300 focus:ring-0"
                   {{ (int) $key_index === 1 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium 
                {{ (int) $key_index === 1 ? 'bg-green-100 px-2 rounded' : '' }}">
                {{ $answer_2 }}
            </label>
        </div>

        <!-- Answer 3 -->
        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-green-500 border-gray-300 focus:ring-0"
                   {{ (int) $key_index === 2 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium 
                {{ (int) $key_index === 2 ? 'bg-green-100 px-2 rounded' : '' }}">
                {{ $answer_3 }}
            </label>
        </div>

        <!-- Answer 4 -->
        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-green-500 border-gray-300 focus:ring-0"
                   {{ (int) $key_index === 3 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium 
                {{ (int) $key_index === 3 ? 'bg-green-100 px-2 rounded' : '' }}">
                {{ $answer_4 }}
            </label>
        </div>
    </div>

    <!-- Learner Answer -->
    <div class="mt-4 space-y-2">
        <p class="text-sm font-medium text-gray-700">Learner Answer</p>
        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-gray-400 border-gray-300 focus:ring-0"
                   {{ (int) $learner_answer === 0 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium">{{ $answer_1 }}</label>
        </div>

        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-gray-400 border-gray-300 focus:ring-0"
                   {{ (int) $learner_answer === 1 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium">{{ $answer_2 }}</label>
        </div>

        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-gray-400 border-gray-300 focus:ring-0"
                   {{ (int) $learner_answer === 2 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium">{{ $answer_3 }}</label>
        </div>

        <div class="flex items-center">
            <input type="radio" disabled 
                   class="w-4 h-4 text-gray-400 border-gray-300 focus:ring-0"
                   {{ (int) $learner_answer === 3 ? 'checked' : '' }}>
            <label class="ml-2 text-sm font-medium">{{ $answer_4 }}</label>
        </div>
    </div>
</div>
