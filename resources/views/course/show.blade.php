@extends('layouts.base')
@section('content')
<section class="hero bg-cover py-16 px-16 bg-customPurple"  >
    <div class="mx-auto p-16 pt-8 bg-white rounded-lg shadow-md">
        <a href="{{ url()->previous() }}" class="mb-4 inline-block text-justify bg-white text-gray-800 font-semibold py-2 px-4 rounded-md hover:bg-gray-200">
            ← Back
        </a>

        <h1 class="text-3xl font-bold text-gray-800 mb-4">Course Title</h1>
        <p class="text-gray-600 mb-4 md:w-[60%] break-words">This is a brief description of the course. It should provide an overview of what students can expect to learn and any important details about the course.</p>

        <h2 class="text-xl font-semibold text-gray-800 mb-2">Instructor: John Doe</h2>

        <div class="flex items-center justify-between mt-6">

            {{-- Change with query --}}
            @php
                $isEnrolled = false; 
                $enrolledCount = 7; 
            @endphp

            @if ($isEnrolled)
                <span class="text-green-600 font-semibold">✔ Already Enrolled</span>
            @else
                <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none">
                    Enroll Now
                </button>
            @endif
            {{-- Instructor View --}}
            {{-- <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none">
                Add Instructor
            </button>     --}}
            <span class="text-green-600 font-semibold">{{ $enrolledCount }} people already enrolled</span>
        </div>
        <div class="mt-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="p-4 border rounded-lg text-center">
                    <h4 class="font-semibold">Estimated Time of Completion</h4>
                    <p class="text-gray-600">4 hours</p>
                </div>
                <div class="p-4 border rounded-lg text-center">
                    <h4 class="font-semibold">Number of Chapters</h4>
                    <p class="text-gray-600">10</p>
                </div>
                <div class="p-4 border rounded-lg text-center">
                    <h4 class="font-semibold">Number of Quizzes</h4>
                    <p class="text-gray-600">5</p>
                </div>
                <div class="p-4 border rounded-lg text-center">
                    <h4 class="font-semibold">Course Period</h4>
                    <p class="text-gray-600">Coming Soon</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            
        
            <div class="md:col-span-5 p-6 bg-gray-50 rounded-lg shadow-inner">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">What You'll Learn</h3>
                <ul class="list-disc ml-6 text-gray-600">
                    <li>Understand the basics of the topic</li>
                    <li>Learn advanced techniques</li>
                    <li>Apply knowledge to real-world examples</li>
                    <li>Collaborate effectively with a team</li>
                </ul>
            </div>

            <div class="md:col-span-7 p-6 bg-gray-50 rounded-lg shadow-inner">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Chapters</h3>
                <div class="divide-y divide-gray-300">

                    <div class="py-4">
                        <div class="flex justify-between items-center">
                            <h4 class="font-semibold text-gray-800">Chapter Title</h4>
                            <div class="flex space-x-2"> 
                                {{-- Instructor view --}}

                                {{-- <button class="text-gray-100 bg-customPurple hover:bg-[#1a1739] font-semibold flex items-center px-4 py-2 rounded-lg transition-colors duration-300 ease-in-out">
                                    Add Post                   
                                </button> --}}

                                <button class="toggle-btn text-gray-800 bg-gray-100 hover:bg-gray-300 font-semibold flex items-center px-4 py-2 rounded-lg transition-colors duration-300 ease-in-out" onclick="toggleDetails(this)">
                                    <span>View Details</span>
                                    <span class="ml-2 caret">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 downward" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 upward hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 15l-6-6-6 6" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            
                        </div>
                        <div class="chapter-details mt-4 text-gray-600 hidden">
                            <div class="divide-y divide-gray-300">
                              
                                <a href="" class="flex items-center justify-between p-4 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                    <span class="text-blue-600 font-semibold">Post Title</span>
                                </a>
                                <a href="" class="flex items-center justify-between p-4 bg-white rounded-lg hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                                    <span class="text-blue-600 font-semibold">Post Title 2</span>
                                </a>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex justify-center mt-4">
                    {{-- Instructor View --}}
                    {{-- <button class="text-gray-100 bg-customPurple hover:bg-[#1a1739] font-semibold flex items-center px-4 py-2 rounded-lg transition-colors duration-300 ease-in-out">
                        Add Chapter                 
                    </button> --}}
                </div>
            </div>

        </div>
        
    </div>
    <div class="flex justify-center">
        {{-- Instructor View --}}
        {{-- <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none">
            Submit Course
        </button> --}}
    </div>
</div>
</section>
<section class="course px-4 md:px-16 pb-8 pt-24" id="course">
    <div class="course-container bg-customPurple flex items-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl">
        <h1 class="px-2">Course Recommendation</h1>
    </div>
    
    <div class="w-full relative">        
        <div class="swiper multiple-slide-carousel swiper-container relative">
            <div class="swiper-wrapper mb-16 pb-16">
                <div class="swiper-slide">
                    <div class="bg-customPurple rounded-lg shadow h-96 overflow-hidden flex flex-col justify-between">
                        <img class="rounded-t-lg object-cover w-full h-48" src="https://placehold.co/600" alt="" />
                        <div class="p-5 flex-grow overflow-hidden">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-100 line-clamp-2">
                                Noteworthy technology acquisitions 2021 that happened over the past year, many notable deals were made
                            </h5>
                            <p class="mb-3 font-normal text-gray-200">Est. Hours</p>
                        </div>
                        <div class="p-5 flex justify-between space-x-4">
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-100 hover:text-gray-900 rounded-lg hover:bg-gray-100 outline-white border transition-colors">
                                Learn more
                            </a>
                            <a href="#" class="inline-flex items-center px-8 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 transition-colors">
                                Enroll
                            </a>
                        </div>
                    </div>
                </div>  
                <div class="swiper-slide">
                    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                        <span class="text-2xl font-semibold text-indigo-600">Slide 2 </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                        <span class="text-2xl font-semibold text-indigo-600">Slide 3 </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                        <span class="text-2xl font-semibold text-indigo-600">Slide 4 </span>
                    </div>
                </div>
            </div>
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                <button id="slider-button-left" class="swiper-button-prevs z-10 group !p-2 flex justify-center items-center border border-solid border-customPurple !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-customPurple !-translate-x-16" data-carousel-prev>
                    <svg class="h-5 w-5 text-customPurple group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="slider-button-right" class="swiper-button-nexts z-10 group !p-2 flex justify-center items-center border border-solid border-customPurple !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-customPurple !translate-x-16" data-carousel-next>
                    <svg class="h-5 w-5 text-customPurple group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
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
@endsection