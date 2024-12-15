<x-app-layout>
    <section class="hero bg-cover py-16 px-16 bg-customPurple">
        <div class="mx-auto p-16 pt-8 bg-white rounded-lg shadow-md">

            <a href="{{ Auth::check() ? route('learner.learner-dashboard') : '/' }}"
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

                {{-- Change with query --}}
                @php
                    $enrollment = null;
                    $isEnrolled = false;
                    $enrollmentStatus = null;

                    if (Auth::check()) {
                        $enrollment = $course->enrollments->reverse()->firstWhere('learner_id', Auth::user()->id);
                        $isEnrolled = $enrollment && $enrollment->status !== 'stopped';
                        $enrollmentStatus = $enrollment ? $enrollment->status : null; // Cek apakah $enrollment null
                    }

                    $enrolledCount = $course->enrollments->count();
                @endphp



                @if ($isEnrolled & ($enrollmentStatus === 'accepted'))
                    <span class="text-green-600 font-semibold">✔ Already Enrolled</span>
                @elseif ($isEnrolled & ($enrollmentStatus === 'pending'))
                    <span class="text-orange-600 font-semibold">Waiting to be Accepted</span>
                @elseif ($isEnrolled & ($enrollmentStatus == 'finished'))
                    <span class="text-sky-600 font-semibold">You have already finished the course</span>
                @else
                    <form action="{{ route('learner.courses.enrollments.store', $course->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none">
                            Enroll Now
                        </button>
                    </form>
                @endif

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
                                    <h4 class="font-semibold text-gray-800">{{ $chapter->title }}</h4>
                                    <div class="flex space-x-2">
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
                                <div class="chapter-details mt-4 text-gray-600 hidden">
                                    <div class="divide-y divide-gray-300">
                                        @if (Auth::check())
                                            @php

                                                // Ambil enrollment user untuk course terkait
                                                $userEnrollment = App\Models\Enrollment::where(
                                                    'learner_id',
                                                    request()->user()->learner->id,
                                                )
                                                    ->where('course_id', $course->id)
                                                    ->latest()
                                                    ->first();
                                            @endphp

                                            @if ($userEnrollment && in_array($userEnrollment->status, ['accepted', 'finished']))
                                                @foreach ($chapter->materials as $material)
                                                    <a href="{{ route('learner.chapters.show', $chapter->id) }}"
                                                        class="flex items-center justify-between p-4 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                                        <span
                                                            class="text-blue-600 font-semibold">{{ $material->title }}</span>
                                                    </a>
                                                @endforeach

                                                @foreach ($chapter->assessments as $assessment)
                                                    <a href="{{ route('learner.chapters.show', $chapter->id) }}"
                                                        class="flex items-center justify-between p-4 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                                        <span
                                                            class="text-blue-600 font-semibold">{{ $assessment->title }}</span>
                                                    </a>
                                                @endforeach
                                            @else
                                                <p class="text-red-500 font-bold">Tidak dapat mengakses course</p>
                                            @endif
                                        @else
                                            <p class="text-red-500 font-bold">Harap login untuk mengakses materi dan
                                                assessment.</p>
                                        @endif





                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>

        </div>
    </section>
    <section class="p-6">
        <div class="grid grid-cols-1 gap-6">
            <x-carousel-course :courses="$randomCourses" title="Course You might like" />
        </div>
    </section>
    <x-footer/>
    
    @if (session('success'))
        <x-success-modal id="enroll-success-modal" title="Enrollment Successful"
            content="{{ session('success') }}" />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('enroll-success-modal');
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
