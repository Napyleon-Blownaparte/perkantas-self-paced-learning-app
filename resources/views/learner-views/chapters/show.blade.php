<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed w-64 shadow-2xl bg-white flex flex-col transition-all duration-300 ease-in-out transform lg:translate-x-0 lg:block inset-0 z-30 overflow-y-auto lg:overflow-visible">
            <div class="p-4 mb-4 border-b border-gray-200">
                <a href="{{ route('learner.courses.show', $chapter->course->id) }}">
                    <h5 class="text-xl font-bold text-blue-gray-900 hover:text-blue-gray-700">
                        {{ $chapter->course->title }}
                    </h5>
                </a>
            </div>
            <nav class="flex-1 flex flex-col gap-2 p-2 overflow-y-auto">
                @foreach ($chapter->course->chapters as $courseChapter)
                    <a href="{{ route('learner.chapters.show', $courseChapter->id) }}">
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg text-start hover:bg-blue-gray-100">
                            <span class="font-medium text-blue-gray-800">{{ $courseChapter->title }}</span>
                        </div>
                    </a>
                    <!-- Divider -->
                    <hr class="border-t border-gray-200 my-2">
                @endforeach
            </nav>

        </div>

        <!-- Main Content -->
        <div id="main-content" class="flex-1 ml-[16em] transition-all duration-300 ease-in-out overflow-visible">
            <!-- Toggle Sidebar Button (Visible on smaller screens) -->





            <!-- Main Content -->
            <div>
                <button id="toggleSidebar"
                    class="fixed z-10 bg-white text-black font-extrabold py-3 px-1 shadow-xl rounded-tr-3xl rounded-br-3xl top-[3.5em] left-[16em] transform transition-all duration-300 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
                @foreach ($chapter->materials as $index => $material)
                    @if ($index % 2 == 0)
                        <x-section class="px-20" title="{{ $material->title }}" content="{{ $material->content }}"
                            imgSrc="{{ $material->image }}" videoSrc="{{ $material->video }}" />
                    @else
                        <x-section-reverse class="px-20" title="{{ $material->title }}"
                            content="{{ $material->content }}" imgSrc="{{ $material->image }}"
                            videoSrc="{{ $material->video }}" />
                    @endif
                @endforeach


                @foreach ($chapter->assessments as $assessment)
                    <h1 class="font-bold text-[4rem] p-16 pb-8">{{ $assessment->name }}</h1>
                    <div class="mx-20 pb-16">
                        <form action="{{ route('learner.assessments.attempt-histories.store', $assessment->id) }}"
                            method="POST">
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
                                        @error('answers.' . $question->id)
                                            <x-input-error :messages="$message" class="mt-2" />
                                        @enderror

                                        {{-- Pertanyaan Essay --}}
                                    @elseif ($question->questionable_type === 'App\Models\EssayQuestion')
                                        <textarea name="answers[{{ $question->id }}]" rows="4" class="w-full mt-2 p-2 border rounded-md"
                                            placeholder="Write your answer here...">{{ old('answers.' . $question->id) }}</textarea>
                                        @error('answers.' . $question->id)
                                            <x-input-error :messages="$message" class="mt-2 font-bold" />
                                        @enderror
                                    @endif
                                </div>
                            @endforeach

                            <div class="mt-12 mb-12">
                                <x-primary-button type="submit">Submit Assessment</x-primary-button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
            <x-footer></x-footer>
        </div>


    </div>

    @if ($errors->any())
        <x-error-modal id="error-modal" title="Error"
            content="There were some problems with your input. Please correct the errors and try again." />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('error-modal');
            });
        </script>
    @endif

    <script>
        // Toggle Sidebar Visibility and Adjust Main Content Width and Button Position
        const toggleSidebarButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        toggleSidebarButton.addEventListener('click', function() {
            // Toggle the sidebar visibility
            sidebar.classList.toggle('lg:translate-x-0');
            sidebar.classList.toggle('-translate-x-full');

            // Adjust main content width based on sidebar visibility
            if (sidebar.classList.contains('-translate-x-full')) {
                mainContent.classList.remove('ml-[16em]'); // Remove left margin when sidebar is hidden
                toggleSidebarButton.classList.remove('left-[16em]'); // Remove the margin from the button
                toggleSidebarButton.classList.add('left-0'); // Move the button to the left when sidebar is hidden
            } else {
                mainContent.classList.add('ml-[16em]'); // Add left margin when sidebar is shown
                toggleSidebarButton.classList.add(
                    'left-[16em]'); // Move the button to the right when sidebar is shown
                toggleSidebarButton.classList.remove('left-0'); // Make sure the button goes back to the right
            }
        });
    </script>

</x-app-layout>
