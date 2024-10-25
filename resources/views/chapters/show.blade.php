<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="relative w-64 bg-white flex flex-col">
            <div class="p-4 mb-4 border-b border-gray-200">
                <a href="{{ '/courses/' . $course->id }}">
                    <h5 class="text-xl font-bold text-blue-gray-900 hover:text-blue-gray-700">
                        {{ $course->title }}
                    </h5>
                </a>
            </div>
            <!-- Sidebar -->
            <nav class="flex-1 flex flex-col gap-2 p-2 overflow-y-auto">
                @foreach ($courseChapters as $courseChapter)
                    <a href="/courses/{{ $courseChapter->course_id }}/chapters/{{ $courseChapter->id }}">
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg text-start hover:bg-blue-gray-100">
                            <span class="font-medium text-blue-gray-800">{{ $courseChapter->title }}</span>
                        </div>
                    </a>
                @endforeach

                @can('update', $course)
                <a href="{{ '/courses/' . $course->id . '/chapters/create' }}">
                    <div role="button"
                        class="text-center flex items-center w-full p-3 leading-tight transition-all rounded-lg bg-green-600 text-white hover:bg-green-700">
                        <span class="font-medium"> + Add Chapter</span>
                    </div>
                </a>
            @endcan

            </nav>

        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8 bg-gray-50">
            <div class="mb-8 grid grid-cols-2 gap-4">
                @if (Auth::user()->can('update', $course))
                    <div>
                        <a href="/courses/{{ $course->id }}/chapters/{{ $chapter->id }}/materials/create"
                            class="flex items-center justify-center p-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Add Material
                        </a>
                    </div>
                    <div>
                        <a href="/courses/{{ $course->id }}/chapters/{{ $chapter->id }}/questions/create"
                            class="flex items-center justify-center p-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Add Quiz
                        </a>
                    </div>
                @endif
            </div>

            @foreach ($chapter->materials as $material)
                <div class="mb-12 p-4 bg-white rounded-lg shadow-md">
                    <h2 class="text-3xl font-semibold text-blue-gray-800">{{ $material->title }}</h2>

                    @if ($material->video)
                        <div class="my-4">
                            <video controls class="w-full rounded-lg shadow-md">
                                <source src="{{ asset($material->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif

                    @if ($material->image)
                        <div class="my-4">
                            <img src="{{ asset($material->image) }}" alt="{{ $material->title }}"
                                class="w-full h-auto rounded-lg shadow-md">
                        </div>
                    @endif

                    <div class="mt-2 text-gray-700">
                        <p>{{ $material->content }}</p>
                    </div>
                </div>
            @endforeach

            <!-- Assessments Section -->
            <div class="mt-12">
                <h3 class="text-2xl font-semibold mb-4 text-blue-gray-900">Chapter Quiz</h3>
                @foreach ($chapter->assessments as $assessment)
                    <div class="mt-4 p-4 bg-white border border-gray-200 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold text-blue-gray-800 mb-2">{{ $assessment->title }}</h4>
                        <p class="text-gray-600 mb-4">{{ $assessment->description }}</p>
                        @foreach ($assessment->questions as $question)
                            <div class="mt-4 mb-6 p-4 border-l-4 border-blue-500 bg-blue-50 rounded-lg shadow-sm">
                                <p class="text-lg font-medium text-blue-gray-800"><strong>Question:</strong>
                                    {{ $question->question_text }}</p>

                                @if ($question->questionable_type === 'App\Models\MultipleChoiceQuestion')
                                    <p class="font-medium mt-2"><strong>Options:</strong></p>
                                    <div class="mt-2">
                                        @foreach ($question->questionable->multiple_choice_options as $option)
                                            <div class="flex items-center mb-3">
                                                <input type="radio" name="question_{{ $question->id }}"
                                                    id="option_{{ $option->id }}" value="{{ $option->id }}"
                                                    class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="option_{{ $option->id }}"
                                                    class="cursor-pointer text-gray-700">{{ $option->option_text }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @elseif ($question->questionable_type === 'App\Models\EssayQuestion')
                                    <p class="font-medium mt-2"><strong>Your Answer:</strong></p>
                                    <textarea class="w-full h-24 border border-gray-300 rounded-md p-2 mt-2 focus:outline-none focus:border-blue-500"
                                        placeholder="Type your answer here..."></textarea>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <!-- Centered Submit Button -->
                <div class="mt-8 flex justify-center">
                    <button
                        class="px-6 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Submit Answers
                    </button>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
</x-app-layout>
