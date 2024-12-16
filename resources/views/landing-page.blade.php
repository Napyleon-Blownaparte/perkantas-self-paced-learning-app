@extends('layouts.base')

@section('content')
    <nav class="backdrop-blur fixed w-full z-20 top-0 start-0 transition-colors duration-300" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/Logo White No Bg.png') }}" class="h-8" alt="Perkantas Logo" />
            </a>
            <div class="flex md:order-2">

                <!-- Jika pengguna terotentikasi -->
                @auth
                    <div x-data="{ open: false }" class="relative inline-block text-left">
                        <div class="mr-4">
                            <button type="button"
                                class="inline-flex justify-center w-full mr-3 rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                                aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                {{ Auth::user()->name }}
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Dropdown menu -->
                        <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-20"
                            role="menu" aria-orientation="vertical" aria-labelledby="options-menu" x-show="open"
                            @click.away="open = false" x-transition>
                            <div class="py-1" role="none">
                                <x-dropdown-link :href="route('profile.edit')" role="menuitem">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}" role="none">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" role="menuitem"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>
                    </div>

                @endauth

                <!-- Jika pengguna tidak terotentikasi -->
                @guest
                    <div class="flex items-center">
                        <a href="{{ route('login') }}"
                        class="block text-white hover:text-[#e3e3e3c8] border border-gray-100 rounded-lg mr-4 px-4 py-1.5 font-medium hover:bg-gray-100 dark:text-white hover:text-black transition-colors">Log In</a>
                    </div>
                @endguest

                {{-- <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false" class="md:hidden text-gray-100 hover:bg-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button> --}}
                {{-- <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 poin  ter-events-none">
                        <svg class="w-4 h-4 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-100 border border-gray-100 rounded-lg bg-gray-50 bg-transparent"
                        placeholder="Search...">
                </div> --}}



                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-700"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                {{-- <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-100 border border-gray-300 rounded-lg bg-gray-50 bg-transparent"
                        placeholder="Search...">
                </div> --}}
                <ul class="flex flex-col p-2 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 bg-gray-100 text-black rounded md:bg-transparent md:text-[#e3e3e3c8] md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    @auth


                        @if (Auth::user()->role === 'learner')
                            <li>
                                <a href="{{ route('learner.learner-dashboard') }}"
                                    class="block py-2 px-3 text-white rounded hover:text-[#e3e3e3c8] md:p-0 transition"">Learner
                                    Dashboard</a>
                            </li>
                        @elseif (Auth::user()->role === 'instructor')
                            <li>
                                <a href="{{ route('instructor.instructor-dashboard') }}"
                                    class="block py-2 px-3 text-white rounded hover:text-[#e3e3e3c8] md:p-0 transition">Instructor
                                    Dashboard</a>
                            </li>
                        @endif
                    @endauth
                    <li>
                        <a href="#course"
                            class="block py-2 px-3 text-white rounded hover:text-[#e3e3e3c8] md:p-0 transition">Course</a>
                    </li>
                    <li>
                        <a href="#book"
                            class="block py-2 px-3 text-white rounded hover:text-[#e3e3e3c8] md:p-0 transition">Books</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero bg-cover text-center pb-16 pt-32 md:pt-52 px-4"
        style="background-image: url('{{ asset('images/Landing Page.png') }}');">
        <h1 class="mb-4 text-3xl font-extrabold text-white md:text-4xl lg:text-5xl">PEMURIDAN PERKANTAS</h1>
        <h2 class="my-5 text-3xl font-bold text-white hidden md:block">“TRANSFORM OUR LIFE, TRANSFORM OUR WORLD”</h2>
        <h2 class="my-5 text-2xl font-bold text-white md:hidden">“TRANSFORM OUR LIFE, </br>
            TRANSFORM OUR WORLD”</h2>
        <p class="mb-8 mt-10 font-normal text-gray-100 lg:text-xl sm:px-16 xl:px-48 text-left">
            Untuk menjadi seorang murid kita harus menjadi pengikut Yesus, dan itu berarti kita harus memilih hidup yang
            sesuai standar Tuhan bukan dunia.
            Panggilan pemuridan adalah panggilan untuk menempatkan Yesus dan kehendak-Nya di atas segala-galanya dalam hidup
            kita.
            Tentu hal ini membutuhkan pengorbanan, tetapi juga menjanjikan hadiah yang lebih besar daripada yang orang lain
            dapat berikan.
        </p>
        <div class="flex flex-col mb-8 mt-24 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="{{ route('learner.learner-dashboard') }}"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#110a39] hover:bg-white hover:text-black transition-colors">
                Start learning
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#book"
                class=" text-gray-100 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center rounded-lg border border-gray-100 hover:bg-gray-100 dark:text-white hover:text-black transition-colors">
                <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 2H18C19.1 2 20 2.9 20 4V20C20 21.1 19.1 22 18 22H6C4.9 22 4 21.1 4 20V4C4 2.9 4.9 2 6 2ZM6 4V20H18V4H6ZM8 6H16V8H8V6ZM8 10H16V12H8V10Z">
                    </path>
                </svg>
                Check our book collections
            </a>
        </div>
    </section>
    {{-- <section class="news bg-gray-100 py-16 md:px-16" id="change-point">
        <div class="max-w-7xl mx-auto">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg relative">
                <div
                    class="news-container bg-customPurple flex items-center justify-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl absolute inset-x-0 -top-12 mx-auto w-max">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" fill="#ffffff">
                        <rect x="1" y="1" width="18" height="18" rx="2" ry="2" fill="none"
                            stroke="#ffffff" stroke-width="1.5" />
                        <rect x="3" y="3" width="14" height="4" fill="none" stroke="#ffffff" stroke-width="1.5" />
                        <rect x="3" y="8" width="10" height="4" fill="none" stroke="#ffffff" stroke-width="1.5" />
                        <rect x="3" y="13" width="12" height="4" fill="none" stroke="#ffffff" stroke-width="1.5" />
                    </svg>
                    <h1 class="px-2">News Selection</h1>
                </div>
                <!-- https://flowbite.com/docs/components/carousel/ -->
                <div id="default-carousel" class="relative w-full " data-carousel="slide">
                    <div class="flex overflow-hidden md:h-96 items-center">
                         <!-- Item 1 -->
                        <div class="duration-700 ease-in-out m-auto flex flex-col md:flex-row py-12 md:py-0" data-carousel-item>
                            <img class="w-full md:min-w-96 md:max-w-96 max-h-72 h-full object-cover md:object-cover rounded-lg"
                                    src="https://placehold.co/600x600" alt="">
                            <div class="flex flex-col justify-center p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-2">Noteworthy
                                    technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 line-clamp-3">
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                </p>
                                <a href=""
                                    class="inline-flex self-start justify-center items-center mt-2 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#110a39] hover:bg-white hover:text-black transition-colors">
                                    Read more
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="duration-700 ease-in-out m-auto flex flex-col md:flex-row hidden py-12 md:py-0" data-carousel-item>
                            <img class="w-full md:min-w-96 md:max-w-96 max-h-72 h-full object-cover md:object-cover rounded-lg"
                                    src="https://placehold.co/600x400" alt="">
                            <div class="flex flex-col justify-center p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-2">Noteworthy
                                    technology acquisitions 2021 sauihiahhiusshausssssssssssssssss ssssssssssssssssss    </h5>
                                <p class="mb-3 font-normal text-gray-700 line-clamp-3">
                                    Lajfas calknsc la lnaslk nlkan fklnein laljjlwaklns nfgekq3a l fln kl lfna kf
                                    af ajsnlkf nkqkana fwn jsk faljnklan skfk nwakk wnksanalf knaskn kfniw nwisn mja knwk najl sjlf oawnf nals la
                                    as ans olknf nawln aiwinijwinasl as akwkkanoidvpeiwnv ew nksjneioncoincwe jofn enkcnqoen conajcanicunenw justify-between qef
                                    encwoenvnwinvwoi wnweoivnownono
                                </p>
                                <a href=""
                                    class="inline-flex self-start justify-center items-center mt-2 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#110a39] hover:bg-white hover:text-black transition-colors">
                                    Read more
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>


                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent border border-customPurple group-hover:bg-customPurple transition-colors">
                            <svg class="w-4 h-4 text-customPurple group-hover:text-gray-100  rtl:rotate-180 transition-colors" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent border border-customPurple group-hover:bg-customPurple transition-colors">
                            <svg class="w-4 h-4 text-customPurple group-hover:text-gray-100 rtl:rotate-180 transition-colors" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="p-6" id="course">
        <div class="grid grid-cols-1 gap-6">
            <x-carousel-course :courses="$courses" title="Course You've might like"/>
            <div id="book">
                <x-carousel-book :books="$books"/>
            </div>

        </div>
    </section>
    <x-footer></x-footer>
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
        // window.addEventListener('scroll', function() {
        //     var navbar = document.getElementById('navbar');
        //     var navbarHeight = navbar.offsetHeight;
        //     var changePoint = document.getElementById('change-point').offsetTop;

        //     if (window.scrollY + navbarHeight >= changePoint) {
        //         navbar.style.backgroundColor = '#251F4F';
        //         navbar.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.2)';
        //     } else {
        //         navbar.style.backgroundColor = 'transparent';
        //         navbar.style.boxShadow = 'none';
        //     }
        // });
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
