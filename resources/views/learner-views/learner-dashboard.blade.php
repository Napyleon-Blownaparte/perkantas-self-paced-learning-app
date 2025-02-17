<x-app-layout>
    <!-- Main Content -->
    <div class="flex-1">
        <div class="bg-white">
            <!-- Header Section -->
            <section class="md:pb-16 pt-16 bg-gradient-to-r from-green-300 to-pink-200">
                <div class="flex justify-between items-center mb-6">
                    <!-- Welcome Section -->
                    <div class="flex items-center bg-none rounded-lg p-6  text-gray-950 m-4">
                        <div class="ml-2 p-4 relative z-10">
                            <h2 class="text-3xl font-semibold">
                                Welcome,<span>{{ explode(' ', Auth::user()->name)[0] }}</span>
                            </h2>
                            <p class="text-4xl font-bold">Ready to Learn?</p>
                        </div>
                        {{-- <img src="{{ asset('images/avatar.png') }}" alt="Avatar"
                            class="h-36 object-contain absolute right-4 top-1/3 transform -translate-y-1/2 z-0"> --}}
                    </div>
                </div>
            {{-- </section> --}}
            <!-- Course Overview -->
            {{-- <section class="bg-white p-6 m-6 rounded-md"> --}}
                <div class="grid grid-cols-1 mx-10 gap-6 lg:grid-cols-3 ">
                    <!-- Finished Course -->
                    <div class="bg-white rounded-lg p-6 flex flex-col items-center">
                        <h3 class="flex text-3xl font-semibold m-5  p-2 rounded self-start">
                            Finished Course
                        </h3>
                        <div class="relative">
                            <svg class="w-full md:w-48 h-48" viewBox="0 0 36 36">
                                <!-- Background Circle -->
                                <circle class="text-gray-300" stroke-width="2.5" stroke="currentColor"
                                    fill="transparent" r="16" cx="18" cy="18" />
                                <!-- Foreground Circle (Progress) -->
                                <circle id="progressCircle" class="text-yellow-500" stroke-width="2.5"
                                    stroke-dasharray="0, 100" stroke-linecap="round" stroke="currentColor"
                                    fill="transparent" r="16" cx="18" cy="18" />
                            </svg>
                            <div id="progressText"
                                class="absolute inset-0 flex items-center justify-center text-3xl font-semibold">0</div>
                        </div>
                        @if ($finishedCoursesCount != 0)
                            <a href="{{ route('learner.courses.index', ['status' => 'finished']) }}"
                                class="flex items-center rounded mt-6 pl-2 hover:bg-gray-100">
                                <p class="mr-2">More</p>
                                <svg width="40" height="40" viewBox="0 0 64 64" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z"
                                        fill="black" />
                                    <path
                                        d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z"
                                        fill="black" />
                                    <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black" />
                                </svg>
                            </a>
                        @endif
                    </div>
                    <!-- Accepted Course -->
                    <div class="bg-white rounded-lg p-6 flex flex-col"> <!--kebawah-->
                        <!-- Title -->
                        <div id="title-acc"
                            class="{{ $acceptedCourses->isNotEmpty() ? 'flex flex-row w-full' : 'flex flex-col w-full' }}">
                            <!--kesamping/ kebawah-->
                            <h3 class="text-3xl font-semibold m-5 text-left w-full">Accepted Course</h3>
                            <div class="items-center justify-end">
                                @if ($acceptedCourses->isNotEmpty())
                                    <a href="{{ route('learner.courses.index', ['status' => 'accepted']) }}"
                                        class="items-center rounded p-2 hover:bg-gray-100 w-full">
                                        {{-- <p class="mr-2">More</p> --}}
                                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z"
                                                fill="black" />
                                            <path
                                                d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z"
                                                fill="black" />
                                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black" />
                                        </svg>
                                    </a>
                                @else
                                    <p class="items-center space-y-2 text-lg m-5 p-5 text-gray-900">
                                        No accepted course currently.
                                    </p>
                                @endif
                            </div>
                        </div>

                        {{-- Placeholder for SVG --}}
                        {{-- <div class="flex m-4 p-4 justify-center">
                        <svg width="40" height="40" viewBox="0 0 64 61" fill="none">
                            <!-- SVG Path Here -->
                        </svg>
                    </div> --}}
                        <!-- Courses Section -->
                        <div class="flex flex-col w-full">
                            @if ($acceptedCourses->isNotEmpty())
                                <div class="divide-y divide-gray-300 w-full">
                                    <div class="chapter-details mt-4 text-gray-600 overflow-y-auto h-48">
                                        <div class="divide-y divide-gray-300">
                                            @foreach ($acceptedCourses as $acceptedCourse)
                                                <a href="{{ route('learner.courses.show', $acceptedCourse->id) }}"
                                                    class="flex p-4 rounded-lg bg-gray-50 hover:bg-gray-100 transition-colors duration-300 ease-in-out justify-center">
                                                    <span
                                                        class="text-blue-600 font-semibold">{{ $acceptedCourse->title }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- Footer -->
                    </div>
                    <!-- Pending Course -->
                    <div class="bg-white rounded-lg p-6 flex flex-col items-center"><!--kebawah-->
                        <div
                            class="{{ $pendingCourses->isNotEmpty() ? 'flex flex-row w-full' : 'flex flex-col w-full' }}">
                            <!--kesamping/ kebawah-->
                            <h3 class="text-3xl font-semibold m-5 text-left w-full">Pending Course</h3>
                            {{-- <svg width="40" height="40" viewBox="0 0 64 61" fill="none">
                            <path
                                d="M55 45.9961C56.375 46.6836 57.6146 47.5273 58.7188 48.5273C59.8229 49.5273 60.7604 50.6419 61.5312 51.8711C62.3021 53.1003 62.9062 54.4336 63.3438 55.8711C63.7812 57.3086 64 58.7878 64 60.3086H60C60 58.6628 59.6875 57.1107 59.0625 55.6523C58.4375 54.194 57.5833 52.9232 56.5 51.8398C55.4167 50.7565 54.1354 49.8919 52.6562 49.2461C51.1771 48.6003 49.625 48.2878 48 48.3086C46.3333 48.3086 44.7812 48.6211 43.3438 49.2461C41.9062 49.8711 40.6354 50.7253 39.5312 51.8086C38.4271 52.8919 37.5625 54.1732 36.9375 55.6523C36.3125 57.1315 36 58.6836 36 60.3086H32C32 58.7878 32.2083 57.3086 32.625 55.8711C33.0417 54.4336 33.6458 53.1003 34.4375 51.8711C35.2292 50.6419 36.1771 49.5273 37.2812 48.5273C38.3854 47.5273 39.625 46.6836 41 45.9961C39.4375 44.8711 38.2188 43.4648 37.3438 41.7773C36.4688 40.0898 36.0208 38.2669 36 36.3086C36 34.6628 36.3125 33.1107 36.9375 31.6523C37.5625 30.194 38.4167 28.9232 39.5 27.8398C40.5833 26.7565 41.8542 25.8919 43.3125 25.2461C44.7708 24.6003 46.3333 24.2878 48 24.3086C49.6458 24.3086 51.1979 24.6211 52.6562 25.2461C54.1146 25.8711 55.3854 26.7253 56.4688 27.8086C57.5521 28.8919 58.4167 30.1732 59.0625 31.6523C59.7083 33.1315 60.0208 34.6836 60 36.3086C60 38.2669 59.5625 40.0898 58.6875 41.7773C57.8125 43.4648 56.5833 44.8711 55 45.9961ZM48 44.3086C49.1042 44.3086 50.1354 44.1003 51.0938 43.6836C52.0521 43.2669 52.9062 42.694 53.6562 41.9648C54.4062 41.2357 54.9792 40.3919 55.375 39.4336C55.7708 38.4753 55.9792 37.4336 56 36.3086C56 35.2044 55.7917 34.1732 55.375 33.2148C54.9583 32.2565 54.3854 31.4023 53.6562 30.6523C52.9271 29.9023 52.0833 29.3294 51.125 28.9336C50.1667 28.5378 49.125 28.3294 48 28.3086C46.8958 28.3086 45.8646 28.5169 44.9062 28.9336C43.9479 29.3503 43.0938 29.9232 42.3438 30.6523C41.5938 31.3815 41.0208 32.2253 40.625 33.1836C40.2292 34.1419 40.0208 35.1836 40 36.3086C40 37.4128 40.2083 38.444 40.625 39.4023C41.0417 40.3607 41.6146 41.2148 42.3438 41.9648C43.0729 42.7148 43.9167 43.2878 44.875 43.6836C45.8333 44.0794 46.875 44.2878 48 44.3086ZM32 46.8086C31.3333 47.5794 30.7292 48.3815 30.1875 49.2148C29.6458 50.0482 29.1667 50.944 28.75 51.9023C27.6458 50.7565 26.3125 49.8711 24.75 49.2461C23.1875 48.6211 21.6042 48.3086 20 48.3086H8V8.30859H4V52.3086H28.5938C28.3021 52.9544 28.0625 53.6107 27.875 54.2773C27.6875 54.944 27.5312 55.6211 27.4062 56.3086H0V4.30859H8V0.308594H20C21.8333 0.308594 23.5938 0.589844 25.2812 1.15234C26.9688 1.71484 28.5417 2.55859 30 3.68359C31.4375 2.55859 33 1.71484 34.6875 1.15234C36.375 0.589844 38.1458 0.308594 40 0.308594H52V4.30859H60V24.3086C58.7917 23.1211 57.4583 22.1315 56 21.3398V8.30859H52V19.8398C51.3333 19.6523 50.6667 19.5169 50 19.4336C49.3333 19.3503 48.6667 19.3086 48 19.3086V4.30859H40C38.5417 4.30859 37.125 4.55859 35.75 5.05859C34.375 5.55859 33.125 6.29818 32 7.27734V46.8086ZM28 46.4023V7.27734C26.875 6.31901 25.625 5.58984 24.25 5.08984C22.875 4.58984 21.4583 4.32943 20 4.30859H12V44.3086H20C21.3958 44.3086 22.7708 44.4857 24.125 44.8398C25.4792 45.194 26.7708 45.7148 28 46.4023Z"
                                fill="#333333" />
                        </svg> --}}
                            <div class="items-center justify-end">
                                @if ($pendingCourses->isNotEmpty())
                                    <a href="{{ route('learner.courses.index', ['status' => 'pending']) }}"
                                        class="flex items-center rounded p-2 hover:bg-gray-100 w-full">
                                        {{-- <p class="mr-2">More</p> --}}
                                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z"
                                                fill="black" />
                                            <path
                                                d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z"
                                                fill="black" />
                                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black" />
                                        </svg>
                                    </a>
                                @else
                                    <p class="items-center space-y-2 text-lg m-5 p-5 text-gray-900">No pending course
                                        currently.
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="flex flex-col w-full">
                            @if ($pendingCourses->isNotEmpty())
                                <div class="divide-y divide-gray-300">
                                    <div class="chapter-details mt-4 text-gray-600  overflow-y-auto h-48">
                                        <div class="divide-y divide-gray-300">
                                            @foreach ($pendingCourses as $pendingCourse)
                                                <a href="{{ route('learner.courses.show', $pendingCourse->id) }}"
                                                    class="flex items-center p-4 rounded-lg bg-gray-50 hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                                    <span
                                                        class="text-blue-600 font-semibold">{{ $pendingCourse->title }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </section>
        </div>
        
        <section class="p-6">
            <div class="grid grid-cols-1 gap-6">
                <!-- Courses Section -->
                <x-carousel-course :courses="$courses" title="My Courses" />
        
                <!-- Books Section -->
                <x-carousel-book :books="$books" />

                <!--Recommendation -->
                <x-carousel-course :courses="$randomCourses" title="Courses You might like"/>

        </section>
        <x-footer />
    </div>


    <script>
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

        function updateProgressCircle(finishedCourses, totalCourses) {
            const percentage = (finishedCourses / totalCourses) * 100;

            // Calculate stroke-dasharray based on percentage
            const dashArray = `${percentage}, 100`;

            // Select the progress circle and update its stroke-dasharray
            const progressCiorercle = document.getElementById('progressCircle');
            progressCircle.setAttribute('stroke-dasharray', dashArray);

            // Update the text in the center of the circle
            const progressText = document.getElementById('progressText');
            progressText.textContent = finishedCourses;
        }

        function setProgress(cardId, progress) {
            const progressBar = document.getElementById(`progress-bar-${cardId}`);
            const progressText = document.getElementById(`progress-text-${cardId}`);

            const percentage = Math.min(Math.max(progress, 0), 1) * 100;
            progressBar.style.width = percentage + '%';
            progressText.textContent = Math.round(percentage) + '%';
        }

        //Use backend to make the progress circle (finished_course, total_course)

        updateProgressCircle({{ $finishedCoursesCount }}, {{ $courses->count() }});

        //use backend for each course progression (card_id, progress_float)
        setProgress(1, 0.5)
    </script>
</x-app-layout>
