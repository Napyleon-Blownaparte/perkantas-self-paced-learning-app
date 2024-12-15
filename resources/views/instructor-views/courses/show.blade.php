<x-app-layout>
    <section class="hero bg-cover py-16 px-16 bg-customPurple">
        <div class="mx-auto p-16 pt-8 bg-white rounded-lg shadow-md">

            <a href="{{ Auth::check() ? route('instructor.instructor-dashboard') : '/' }}"
                class="mb-4 inline-block text-justify bg-white text-gray-800 font-semibold py-2 px-4 rounded-md hover:bg-gray-200">
                ← Back
            </a>

            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $course->title }}</h1>
            <p class="text-gray-600 mb-4 md:w-[60%] break-words">{{ $course->description }}</p>

            <h2 class="text-xl font-semibold text-gray-800 mb-2">
                Instructor:
                <span>
                    {{ $course->instructors->map(fn($instructor) => $instructor->user->name)->implode(', ') }}
                </span>
            </h2>



            <div class="flex items-center justify-between mt-6">

                @php
                    $enrolledCount = $course->enrollments->count();
                @endphp

                @can('update', $course)
                    <a href="{{ route('instructor.courses.edit', $course->id) }}">
                        <button
                            style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="hover:bg-green-950 focus:outline-none focus:ring-2 focus:ring-green-900">
                            Manage Course
                        </button>

                    </a>
                @endcan


                <span class="text-green-600 font-semibold">{{ $enrolledCount }} people already enrolled</span>

            </div>
            <div class="mt-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="p-4 border rounded-lg text-center">
                        <h4 class="font-semibold">Estimated Time of Completion</h4>
                        <p class="text-gray-600">{{ $course->estimated_time }} hours</p>
                    </div>
                    <div class="p-4 border rounded-lg text-center">
                        <h4 class="font-semibold">Number of Chapters</h4>
                        <p class="text-gray-600">{{ $course->chapters->count() }}</p>
                    </div>
                    <div class="p-4 border rounded-lg text-center">
                        <h4 class="font-semibold">Course Start Period</h4>
                        <p class="text-gray-600">{{ \Carbon\Carbon::parse($course->start_period)->format('d F Y') }}
                        </p>
                    </div>
                    <div class="p-4 border rounded-lg text-center">
                        <h4 class="font-semibold">Course End Period</h4>
                        <p class="text-gray-600">{{ \Carbon\Carbon::parse($course->end_period)->format('d F Y') }}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">


                <div class="md:col-span-5 p-6 bg-gray-50 rounded-lg shadow-inner">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">What You'll Learn</h3>
                    <ul class="list-disc ml-6 text-gray-600">
                        @foreach ($course->courseOutcomes as $courseOutcome)
                            <li>{{ $courseOutcome->outcome }}</li>
                        @endforeach

                    </ul>
                </div>

                <div class="md:col-span-7 p-6 bg-gray-50 rounded-lg shadow-inner">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Chapters</h3>
                    <div class="divide-y divide-gray-300">
                        @foreach ($course->chapters as $chapter)
                            <div class="py-4">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-semibold text-gray-800 flex-1">{{ $chapter->title }}</h4>
                                    <div class="flex space-x-2 ml-4">
                                        @can('update', $course)
                                            <a href="{{ route('instructor.chapters.edit', $chapter->id) }}" 
                                                class="text-gray-800 bg-gray-100 hover:bg-gray-300 font-semibold flex items-center px-4 py-2 rounded-lg transition-colors duration-300 ease-in-out">
                                                Edit
                                            </a>
                                        @endcan
                                        <button
                                            class="toggle-btn text-gray-800 bg-gray-100 hover:bg-gray-300 font-semibold flex items-center px-4 py-2 rounded-lg transition-colors duration-300 ease-in-out"
                                            onclick="toggleDetails(this)">
                                            <span>View Details</span>
                                            <span class="ml-2 caret">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 downward"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 9l6 6 6-6" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 upward hidden"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M18 15l-6-6-6 6" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="chapter-details mt-4 text-gray-600 hidden overflow-y-auto max-h-[10em]">
                                    <div class="divide-y divide-gray-300">
                                        @if ($chapter->materials->isEmpty() && $chapter->assessments->isEmpty())
                                            <p class="text-gray-500">Content chapter tidak ditemukan</p>
                                        @else
                                            @foreach ($chapter->materials as $material)
                                                <a href="{{ route('instructor.chapters.show', $chapter->id) }}"
                                                    class="flex items-center justify-between p-4 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                                    <span
                                                        class="text-gray-600 font-semibold">{{ $material->title }}</span>
                                                </a>
                                            @endforeach
                                            @foreach ($chapter->assessments as $assessment)
                                                <a href="{{ route('instructor.chapters.show', $chapter->id) }}"
                                                    class="flex items-center justify-between p-4 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                                    <span
                                                        class="text-gray-600 font-semibold">{{ $assessment->title }}</span>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                @can('update', $course)
                                    <div class="mt-4">
                                        <a href="{{ route('instructor.chapters.materials.create', $chapter->id) }}">
                                            <button
                                                class="bg-green-600 text-white px-4 py-2 rounded-lg border-none cursor-pointer hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                                Add Material
                                            </button>
                                        </a>

                                        <a href="{{ route('instructor.chapters.assessments.create', $chapter->id) }}">
                                            <button
                                                class="bg-green-600 text-white px-4 py-2 rounded-lg border-none cursor-pointer hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                                Add Assessment
                                            </button>
                                        </a>

                                    </div>
                                @endcan



                            </div>
                        @endforeach
                    </div>

                    {{-- Add Chapter Button --}}
                    @can('update', $course)
                        <a href="{{ route('instructor.courses.chapters.create', $course->id) }}">
                            <div
                                class=" border-2 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center">
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

                                    <!-- Wrapper for icon and text, using flex to align them -->
                                    <a href="{{ route('instructor.courses.chapters.create', $course->id) }}">
                                        <button
                                            style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                            class=" m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                                            Add More Chapter
                                        </button>
                                    </a>
                                    <p class="mt-8 text-gray-600">Click the button above to Add Chapter</p>
                                </div>

                            </div>
                        </a>
                    @endcan


                </div>


            </div>

        </div>
    </section>
    @if (session('success'))
        <x-success-modal id="success-modal" title="Success" content="{{ session('success') }}" />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('success-modal');
            });
        </script>
    @endif
    <script>
        function toggleDetails(button) {
            const details = button.closest('.py-4').querySelector('.chapter-details');
            const downwardV = button.querySelector('.downward');
            const upwardV = button.querySelector('.upward');

            details.classList.toggle('hidden');
            downwardV.classList.toggle('hidden');
            upwardV.classList.toggle('hidden');
        }
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".multiple-slide-carousel .swiper-button-nexts",
                prevEl: ".multiple-slide-carousel .swiper-button-prevs",
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });
    </script>


</x-app-layout>
