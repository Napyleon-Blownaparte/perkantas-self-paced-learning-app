<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed w-64 shadow-2xl bg-white flex flex-col transition-all duration-300 ease-in-out transform lg:translate-x-0 lg:block inset-0 z-30 overflow-y-auto lg:overflow-visible">
            <div class="p-4 mb-4 border-b border-gray-200">
                <a href="{{ route('instructor.courses.show', $chapter->course->id) }}">
                    <h5 class="text-xl font-bold text-blue-gray-900 hover:text-blue-gray-700">
                        {{ $chapter->course->title }}
                    </h5>
                </a>
            </div>
            <nav class="flex-1 flex flex-col gap-2 p-2 overflow-y-auto">
                @foreach ($chapter->course->chapters as $courseChapter)
                    <a href="{{ route('instructor.chapters.show', $courseChapter->id) }}">
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg text-start hover:bg-blue-gray-100">
                            <span class="font-medium text-blue-gray-800">{{ $courseChapter->title }}</span>
                        </div>
                    </a>
                    <!-- Divider -->
                    <hr class="border-t border-gray-200 my-2">
                @endforeach
            </nav>
            <div>
                <a href="{{ route('instructor.courses.chapters.create', $chapter->course->id) }}">
                    <button
                        style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                        class="m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                        + Add More Chapters
                    </button>
                </a>
            </div>
        </div>


        <!-- Main Content -->
        <div id="main-content" class="flex-1 ml-[16em] transition-all duration-300 ease-in-out overflow-visible">
            <div>
                <button id="toggleSidebar"
                    class="fixed z-20 bg-white text-black font-extrabold py-3 px-1 shadow-xl rounded-tr-3xl rounded-br-3xl top-[3.5em] left-[16em] transform transition-all duration-300 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
                @foreach ($chapter->materials as $index => $material)
                    <a href="{{ route('instructor.materials.edit', $material->id) }}" 
                    class="block transition transform hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    title="Click to edit this material">
                        @if ($index % 2 == 0)
                            <x-section class="px-20" title="{{ $material->title }}" content="{{ $material->content }}"
                                imgSrc="{{ $material->image }}" videoSrc="{{ $material->video }}" />
                        @else
                            <x-section-reverse class="px-20" title="{{ $material->title }}"
                                content="{{ $material->content }}" imgSrc="{{ $material->image }}"
                                videoSrc="{{ $material->video }}" />
                        @endif
                    </a>
                @endforeach
                @can('update', $chapter->course)
                    <div class="">
                        <a href="{{ route('instructor.chapters.materials.create', $chapter->id) }}">
                            <div
                                class="m-24 my-12 border-4 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center py-10">
                                <div class="m-12">
                                    <svg class="m-auto my-8" fill="#303030" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="1.5em" height="1.5em" viewBox="0 0 45.402 45.402" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141
                                                                                            c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27
                                                                                            c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435
                                                                                            c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                                        </g>
                                    </svg>

                                    <a href="{{ route('instructor.chapters.materials.create', $chapter->id) }}">
                                        <button
                                            style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                            class="m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                                            Add More Material
                                        </button>
                                    </a>
                                    <p class="mt-8 text-gray-600">Click the button above to Add Material</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endcan




                @foreach ($chapter->assessments as $assessment)
                    <h1 class="font-bold text-[4rem] p-16 pb-4">{{ $assessment->name }}</h1>
                    <div class="mx-20">
                        <a href="{{ route('instructor.assessments.edit', $assessment) }}" class="">
                            <button
                                style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                class=" font-extrabold mb-8 bg-orange-500 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-300 flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 30 30">
                                    <path fill="white"
                                        d="M 22.828125 3 C 22.316375 3 21.804562 3.1954375 21.414062 3.5859375 L 19 6 L 24 11 L 26.414062 8.5859375 C 27.195062 7.8049375 27.195062 6.5388125 26.414062 5.7578125 L 24.242188 3.5859375 C 23.851688 3.1954375 23.339875 3 22.828125 3 z M 17 8 L 5.2597656 19.740234 C 5.2597656 19.740234 6.1775313 19.658 6.5195312 20 C 6.8615312 20.342 6.58 22.58 7 23 C 7.42 23.42 9.6438906 23.124359 9.9628906 23.443359 C 10.281891 23.762359 10.259766 24.740234 10.259766 24.740234 L 22 13 L 17 8 z M 4 23 L 3.0566406 25.671875 A 1 1 0 0 0 3 26 A 1 1 0 0 0 4 27 A 1 1 0 0 0 4.328125 26.943359 A 1 1 0 0 0 4.3378906 26.939453 L 4.3632812 26.931641 A 1 1 0 0 0 4.3691406 26.927734 L 7 26 L 5.5 24.5 L 4 23 z">
                                    </path>
                                </svg>
                                <p>Edit Assessment</p>
                            </button>
                        </a>

                        {{-- Iterasi pertanyaan dalam assessment --}}
                        @foreach ($assessment->questions as $question)
                            <div class="mb-12">
                                <div class="flex justify-between">
                                    <h3 class="text-lg font-semibold">{{ $question->question_text }}</h3>
                                    @can('update', $chapter->course)
                                        @if ($question->questionable_type === 'App\Models\MultipleChoiceQuestion')
                                            <div class="flex gap-2">
                                                <a
                                                    href="{{ route('instructor.multiple-choice-questions.edit', $question->questionable_id) }}">
                                                    <button
                                                        style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                                        class="m-auto bg-orange-500 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-300 flex items-center justify-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="30" height="30" viewBox="0 0 30 30">
                                                            <path fill="white"
                                                                d="M 22.828125 3 C 22.316375 3 21.804562 3.1954375 21.414062 3.5859375 L 19 6 L 24 11 L 26.414062 8.5859375 C 27.195062 7.8049375 27.195062 6.5388125 26.414062 5.7578125 L 24.242188 3.5859375 C 23.851688 3.1954375 23.339875 3 22.828125 3 z M 17 8 L 5.2597656 19.740234 C 5.2597656 19.740234 6.1775313 19.658 6.5195312 20 C 6.8615312 20.342 6.58 22.58 7 23 C 7.42 23.42 9.6438906 23.124359 9.9628906 23.443359 C 10.281891 23.762359 10.259766 24.740234 10.259766 24.740234 L 22 13 L 17 8 z M 4 23 L 3.0566406 25.671875 A 1 1 0 0 0 3 26 A 1 1 0 0 0 4 27 A 1 1 0 0 0 4.328125 26.943359 A 1 1 0 0 0 4.3378906 26.939453 L 4.3632812 26.931641 A 1 1 0 0 0 4.3691406 26.927734 L 7 26 L 5.5 24.5 L 4 23 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </a>
                                                <form
                                                    action="{{ route('instructor.multiple-choice-questions.destroy', $question->questionable_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                                        class="m-auto bg-red-600 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 flex items-center justify-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="30" height="30" viewBox="0 0 24 24">
                                                            <path fill="white"
                                                                d="M 10 2 L 9 3 L 4 3 L 4 5 L 5 5 L 5 20 C 5 20.522222 5.1913289 21.05461 5.5683594 21.431641 C 5.9453899 21.808671 6.4777778 22 7 22 L 17 22 C 17.522222 22 18.05461 21.808671 18.431641 21.431641 C 18.808671 21.05461 19 20.522222 19 20 L 19 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 7 5 L 17 5 L 17 20 L 7 20 L 7 5 z M 9 7 L 9 18 L 11 18 L 11 7 L 9 7 z M 13 7 L 13 18 L 15 18 L 15 7 L 13 7 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        @elseif ($question->questionable_type === 'App\Models\EssayQuestion')
                                            <div class="flex gap-2">
                                                <a
                                                    href="{{ route('instructor.essay-questions.edit', $question->questionable_id) }}">
                                                    <button
                                                        style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                                        class="m-auto bg-orange-500 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-300 flex items-center justify-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="30" height="30" viewBox="0 0 30 30">
                                                            <path fill="white"
                                                                d="M 22.828125 3 C 22.316375 3 21.804562 3.1954375 21.414062 3.5859375 L 19 6 L 24 11 L 26.414062 8.5859375 C 27.195062 7.8049375 27.195062 6.5388125 26.414062 5.7578125 L 24.242188 3.5859375 C 23.851688 3.1954375 23.339875 3 22.828125 3 z M 17 8 L 5.2597656 19.740234 C 5.2597656 19.740234 6.1775313 19.658 6.5195312 20 C 6.8615312 20.342 6.58 22.58 7 23 C 7.42 23.42 9.6438906 23.124359 9.9628906 23.443359 C 10.281891 23.762359 10.259766 24.740234 10.259766 24.740234 L 22 13 L 17 8 z M 4 23 L 3.0566406 25.671875 A 1 1 0 0 0 3 26 A 1 1 0 0 0 4 27 A 1 1 0 0 0 4.328125 26.943359 A 1 1 0 0 0 4.3378906 26.939453 L 4.3632812 26.931641 A 1 1 0 0 0 4.3691406 26.927734 L 7 26 L 5.5 24.5 L 4 23 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </a>
                                                <form
                                                    action="{{ route('instructor.essay-questions.destroy', $question->questionable_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                                        class="m-auto bg-red-600 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 flex items-center justify-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="30" height="30" viewBox="0 0 24 24">
                                                            <path fill="white"
                                                                d="M 10 2 L 9 3 L 4 3 L 4 5 L 5 5 L 5 20 C 5 20.522222 5.1913289 21.05461 5.5683594 21.431641 C 5.9453899 21.808671 6.4777778 22 7 22 L 17 22 C 17.522222 22 18.05461 21.808671 18.431641 21.431641 C 18.808671 21.05461 19 20.522222 19 20 L 19 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 7 5 L 17 5 L 17 20 L 7 20 L 7 5 z M 9 7 L 9 18 L 11 18 L 11 7 L 9 7 z M 13 7 L 13 18 L 15 18 L 15 7 L 13 7 z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    @endcan
                                </div>

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

                    </div>
                    @can('update', $chapter->course)
                        <div class="flex  space-x-8"> <!-- Menambahkan space antar kartu -->
                            <!-- Div untuk Multiple Choice Question -->
                            <div class="relative py-2 w-1/2">
                                <a
                                    href="{{ route('instructor.assessments.multiple-choice-questions.create', $assessment->id) }}">
                                    <div
                                        class="h-full ml-24 border-4 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center py-10">
                                        <div class="m-12">
                                            <svg class="m-auto my-4" fill="#303030" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="1.5em" height="1.5em"
                                                viewBox="0 0 45.402 45.402" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                                                </g>
                                            </svg>

                                            <button
                                                style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                                class="m-auto bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                                                Add More Multiple Choice Question
                                            </button>
                                            <p class="mt-4 text-gray-600">Click the button above to Add Multiple Choice
                                                Question</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Div untuk Essay Question -->
                            <div class="relative py-2 w-1/2">
                                <a href="{{ route('instructor.assessments.essay-questions.create', $assessment->id) }}">
                                    <div
                                        class="h-full mr-24 border-4 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center py-10">
                                        <div class="m-12">
                                            <svg class="m-auto my-4" fill="#303030" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="1.5em" height="1.5em"
                                                viewBox="0 0 45.402 45.402" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                                                </g>
                                            </svg>

                                            <button
                                                style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                                class="m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                                                Add More Essay Question
                                            </button>
                                            <p class="mt-4 text-gray-600">Click the button above to Add Essay Question</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endcan
                @endforeach
                @can('update', $chapter->course)
                    <!-- Div untuk Multiple Choice Question -->
                    <div class="relative py-2">
                        <a href="{{ route('instructor.chapters.assessments.create', $chapter->id) }}">
                            <div
                                class="m-24 my-4 mb-20 border-4 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center py-10">
                                <div class="m-12">
                                    <svg class="m-auto my-8" fill="#303030" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="1.5em" height="1.5em" viewBox="0 0 45.402 45.402" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                                        </g>
                                    </svg>

                                    <a href="{{ route('instructor.chapters.assessments.create', $chapter->id) }}">
                                        <button
                                            style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                            class="m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                                            Add More Assessments
                                        </button>
                                    </a>
                                    <p class="mt-8 text-gray-600">Click the button above to Add Assessment</p>
                                </div>
                            </div>
                        </a>
                    @endcan
                </div>
                <x-footer></x-footer>
            </div>
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
    @elseif (session('success'))
        <x-success-modal id="success-modal" title="Success" content="{{ session('success') }}" />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('success-modal');
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
