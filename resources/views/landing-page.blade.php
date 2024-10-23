@extends('layouts.base')

@section('content')
@include('layouts.nav')

<section class="hero bg-cover text-center pb-16 pt-32 md:pt-52 px-4" style="background-image: url('{{ asset('images/Landing Page.png') }}');" >
    <h1 class="mb-4 text-3xl font-extrabold text-white md:text-4xl lg:text-5xl">PEMURIDAN PERKANTAS</h1>
    <h2 class="my-5 text-3xl font-bold text-white hidden md:block">“TRANSFORM OUR LIFE, TRANSFORM OUR WORLD”</h2>
    <h2 class="my-5 text-2xl font-bold text-white md:hidden">“TRANSFORM OUR LIFE, </br>
        TRANSFORM OUR WORLD”</h2>
    <p class="mb-8 mt-10 font-normal text-gray-100 lg:text-xl sm:px-16 xl:px-48 text-left">
        Untuk menjadi seorang murid kita harus menjadi pengikut Yesus, dan itu berarti kita harus memilih hidup yang sesuai standar Tuhan bukan dunia.
        Panggilan pemuridan adalah panggilan untuk menempatkan Yesus dan kehendak-Nya di atas segala-galanya dalam hidup kita.
        Tentu hal ini membutuhkan pengorbanan, tetapi juga menjanjikan hadiah yang lebih besar daripada yang orang lain dapat berikan.
    </p>
    <div class="flex flex-col mb-8 mt-24 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#110a39] hover:bg-white hover:text-black transition-colors">
            Start learning
            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        <a href="#book" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white hover:text-black transition-colors">
            <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 2H18C19.1 2 20 2.9 20 4V20C20 21.1 19.1 22 18 22H6C4.9 22 4 21.1 4 20V4C4 2.9 4.9 2 6 2ZM6 4V20H18V4H6ZM8 6H16V8H8V6ZM8 10H16V12H8V10Z"></path></svg>
            Check our book collections
        </a>
    </div>
</section>
<section class="news bg-white py-8 px-4 md:px-16" id="change-point">
    <div class="news-container bg-customPurple flex items-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" fill="#ffffff">
            <rect x="1" y="1" width="18" height="18" rx="2" ry="2" fill="none" stroke="#ffffff" stroke-width="1.5"/>
            <rect x="3" y="3" width="14" height="4" fill="none" stroke="#ffffff" stroke-width="1.5"/>
            <rect x="3" y="8" width="10" height="4" fill="none" stroke="#ffffff" stroke-width="1.5"/>
            <rect x="3" y="13" width="12" height="4" fill="none" stroke="#ffffff" stroke-width="1.5"/>
        </svg>
        <h1 class="px-2">News</h1>
    </div>
    {{-- https://flowbite.com/docs/components/carousel/ --}}   
    <div id="default-carousel" class="relative w-full " data-carousel="slide">
        <div class="flex overflow-hidden rounded-lg md:h-96 items-center">
        <!-- Item 1 -->
            <div class="duration-700 ease-in-out m-auto" data-carousel-item>
                <a href="#" class="flex h-96 md:h-auto md:max-h-96 flex-col items-center bg-white border  border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl lg:max-w-3xl hover:bg-gray-100 transition-colors">
                    <img class="w-full h-48 md:w-48 object-cover md:object-cover rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://placehold.co/600x400" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-2">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 line-clamp-3">
                            Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                            Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out m-auto" data-carousel-item>
                <a href="#" class="flex h-96 md:h-auto md:max-h-96 flex-col items-center bg-white border  border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl lg:max-w-3xl hover:bg-gray-100 transition-colors">
                    <img class="w-full h-48 md:w-48 object-cover md:object-cover rounded-t-lg md:rounded-none md:rounded-s-lg" src="https://placehold.co/600" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-2">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 line-clamp-3">
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            xxxxxxxxxxxxxxxxxxxxxx
                        </p>
                    </div>
                </a>
            </div>
        </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</section>
<section class="course px-4 md:px-16 pb-8 pt-24" id="course">
    <div class="course-container bg-customPurple flex items-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
            <path d="M2 9l8-6 8 6-8 6-8-6z" />
            <path d="M10 15v4" />
            <path d="M6 19h8" />
        </svg>
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
<section class="book pb-8 pt-24 px-4 md:px-16" id="book">
    <div class="book-container bg-customPurple flex items-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl">
        <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 2H18C19.1 2 20 2.9 20 4V20C20 21.1 19.1 22 18 22H6C4.9 22 4 21.1 4 20V4C4 2.9 4.9 2 6 2ZM6 4V20H18V4H6ZM8 6H16V8H8V6ZM8 10H16V12H8V10Z"></path>
        </svg>
        <h1>Books</h1>
    </div>
    <div class="w-full relative">
        
        <div class="swiper multiple-slide-carousel swiper-container relative">
            <div class="swiper-wrapper mb-16 pb-16">
                <div class="swiper-slide">
                    <div class="bg-customPurple rounded-lg shadow h-96 overflow-hidden flex flex-col justify-between">
                        <img class="rounded-t-lg object-cover w-full h-60" src="https://placehold.co/600" alt="" />
                        <div class="p-5 flex-grow overflow-hidden">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-100 line-clamp-2">
                                Buku 1
                            </h5>
                        </div>
                        <div class="p-5 flex justify-between space-x-4">
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-100 hover:text-gray-900 rounded-lg hover:bg-gray-100 outline-white border transition-colors">
                                More Info
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
    //Carousel Course and Books (Pagedone)
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
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        var navbarHeight = navbar.offsetHeight;
        var changePoint = document.getElementById('change-point').offsetTop;

        if (window.scrollY + navbarHeight >= changePoint) {
            navbar.style.backgroundColor = '#251F4F';
            navbar.style.borderBottom = '1px solid #ffffff';
        
        } else {
            navbar.style.backgroundColor = 'transparent'; 
            navbar.style.borderBottom = 'none'
        }
    });
    // Carousel News (Flowbite)
    document.addEventListener("DOMContentLoaded", function() {
        const items = document.querySelectorAll('[data-carousel-item]');
        const prevButton = document.querySelector('[data-carousel-prev]');
        const nextButton = document.querySelector('[data-carousel-next]');
        let currentIndex = 0;
        let intervalTime = 3000; 
        let autoSlideInterval;
        function showSlide(index) {
            items.forEach((item, i) => {
                if (i === index) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
            currentIndex = index;
        }
        function nextSlide() {
            let newIndex = (currentIndex + 1) % items.length;
            showSlide(newIndex);
        }
        function prevSlide() {
            let newIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(newIndex);
        }
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, intervalTime);
        }
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }
        prevButton.addEventListener('click', function() {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        nextButton.addEventListener('click', function() {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
        
        startAutoSlide();
    });    

    // Toggle navbar for small device
    document.addEventListener("DOMContentLoaded", function() {
        const toggleMenuButton = document.querySelectorAll('[data-collapse-toggle="navbar-search"]');
        const navbarSearch = document.getElementById('navbar-search');
        
        toggleMenuButton.forEach((btn) => {
            btn.addEventListener('click', function() {
                navbarSearch.classList.toggle('hidden');
                const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !isExpanded);
            });
        });
    });
</script>
</body>
</html>
@endsection
