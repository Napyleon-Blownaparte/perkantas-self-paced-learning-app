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

                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false" class="md:hidden text-gray-100 hover:bg-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
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
                </div>



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
                <div class="relative mt-3 md:hidden">
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
                </div>
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
    <section class="news bg-gray-100 py-16 md:px-16" id="change-point">
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
                {{-- https://flowbite.com/docs/components/carousel/ --}}
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



    </section>

    <section class="bg-gray-100 py-16 md:px-16" id="course">
        <div class="max-w-7xl mx-auto">
            <div class="p-4 md:px-8 md:pt-8 md:pb-0 bg-white  shadow sm:rounded-lg relative">
                <div
                class="course-container bg-customPurple flex items-center justify-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl absolute inset-x-0 -top-12 mx-auto w-max">
                <svg width="25" height="25" viewBox="0 0 64 61" fill="#ffffff">
                    <path
                        d="M55 45.9961C56.375 46.6836 57.6146 47.5273 58.7188 48.5273C59.8229 49.5273 60.7604 50.6419 61.5312 51.8711C62.3021 53.1003 62.9062 54.4336 63.3438 55.8711C63.7812 57.3086 64 58.7878 64 60.3086H60C60 58.6628 59.6875 57.1107 59.0625 55.6523C58.4375 54.194 57.5833 52.9232 56.5 51.8398C55.4167 50.7565 54.1354 49.8919 52.6562 49.2461C51.1771 48.6003 49.625 48.2878 48 48.3086C46.3333 48.3086 44.7812 48.6211 43.3438 49.2461C41.9062 49.8711 40.6354 50.7253 39.5312 51.8086C38.4271 52.8919 37.5625 54.1732 36.9375 55.6523C36.3125 57.1315 36 58.6836 36 60.3086H32C32 58.7878 32.2083 57.3086 32.625 55.8711C33.0417 54.4336 33.6458 53.1003 34.4375 51.8711C35.2292 50.6419 36.1771 49.5273 37.2812 48.5273C38.3854 47.5273 39.625 46.6836 41 45.9961C39.4375 44.8711 38.2188 43.4648 37.3438 41.7773C36.4688 40.0898 36.0208 38.2669 36 36.3086C36 34.6628 36.3125 33.1107 36.9375 31.6523C37.5625 30.194 38.4167 28.9232 39.5 27.8398C40.5833 26.7565 41.8542 25.8919 43.3125 25.2461C44.7708 24.6003 46.3333 24.2878 48 24.3086C49.6458 24.3086 51.1979 24.6211 52.6562 25.2461C54.1146 25.8711 55.3854 26.7253 56.4688 27.8086C57.5521 28.8919 58.4167 30.1732 59.0625 31.6523C59.7083 33.1315 60.0208 34.6836 60 36.3086C60 38.2669 59.5625 40.0898 58.6875 41.7773C57.8125 43.4648 56.5833 44.8711 55 45.9961ZM48 44.3086C49.1042 44.3086 50.1354 44.1003 51.0938 43.6836C52.0521 43.2669 52.9062 42.694 53.6562 41.9648C54.4062 41.2357 54.9792 40.3919 55.375 39.4336C55.7708 38.4753 55.9792 37.4336 56 36.3086C56 35.2044 55.7917 34.1732 55.375 33.2148C54.9583 32.2565 54.3854 31.4023 53.6562 30.6523C52.9271 29.9023 52.0833 29.3294 51.125 28.9336C50.1667 28.5378 49.125 28.3294 48 28.3086C46.8958 28.3086 45.8646 28.5169 44.9062 28.9336C43.9479 29.3503 43.0938 29.9232 42.3438 30.6523C41.5938 31.3815 41.0208 32.2253 40.625 33.1836C40.2292 34.1419 40.0208 35.1836 40 36.3086C40 37.4128 40.2083 38.444 40.625 39.4023C41.0417 40.3607 41.6146 41.2148 42.3438 41.9648C43.0729 42.7148 43.9167 43.2878 44.875 43.6836C45.8333 44.0794 46.875 44.2878 48 44.3086ZM32 46.8086C31.3333 47.5794 30.7292 48.3815 30.1875 49.2148C29.6458 50.0482 29.1667 50.944 28.75 51.9023C27.6458 50.7565 26.3125 49.8711 24.75 49.2461C23.1875 48.6211 21.6042 48.3086 20 48.3086H8V8.30859H4V52.3086H28.5938C28.3021 52.9544 28.0625 53.6107 27.875 54.2773C27.6875 54.944 27.5312 55.6211 27.4062 56.3086H0V4.30859H8V0.308594H20C21.8333 0.308594 23.5938 0.589844 25.2812 1.15234C26.9688 1.71484 28.5417 2.55859 30 3.68359C31.4375 2.55859 33 1.71484 34.6875 1.15234C36.375 0.589844 38.1458 0.308594 40 0.308594H52V4.30859H60V24.3086C58.7917 23.1211 57.4583 22.1315 56 21.3398V8.30859H52V19.8398C51.3333 19.6523 50.6667 19.5169 50 19.4336C49.3333 19.3503 48.6667 19.3086 48 19.3086V4.30859H40C38.5417 4.30859 37.125 4.55859 35.75 5.05859C34.375 5.55859 33.125 6.29818 32 7.27734V46.8086ZM28 46.4023V7.27734C26.875 6.31901 25.625 5.58984 24.25 5.08984C22.875 4.58984 21.4583 4.32943 20 4.30859H12V44.3086H20C21.3958 44.3086 22.7708 44.4857 24.125 44.8398C25.4792 45.194 26.7708 45.7148 28 46.4023Z"
                        />
                </svg>
                <h1 class="px-2">Course Recommendation</h1>
            </div>

            <div class="w-full relative mt-12">
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper mb-16 pb-16">
                        @foreach ($courses as $course)
                            <x-course-card
                                        image_src="{{ $course->thumbnail_image }}"
                                        title="{{ $course->title }}"
                                        id="{{ $course->id }}"
                                        link_url="{{ '/courses/' . $course->id }}"
                                        text_color="text-black"
                                    />
                        @endforeach
                    </div>

                    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                        <button id="slider-button-left"
                            class="swiper-button-prevs z-10 group !p-2 flex justify-center items-center border border-solid border-customPurple !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-customPurple !-translate-x-16"
                            data-carousel-prev>
                            <svg class="h-5 w-5 text-customPurple group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button id="slider-button-right"
                            class="swiper-button-nexts z-10 group !p-2 flex justify-center items-center border border-solid border-customPurple !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-customPurple !translate-x-16"
                            data-carousel-next>
                            <svg class="h-5 w-5 text-customPurple group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="book bg-gray-100 py-16 md:px-16" id="book">
        <div class="max-w-7xl mx-auto">
            <div class="p-4 md:px-8 md:pt-8 md:pb-0 bg-white shadow sm:rounded-lg relative">
                <div
                    class="book-container bg-customPurple flex items-center justify-center border border-solid border-gray-700 p-4 rounded-md my-6 text-gray-100 font-bold text-xl absolute inset-x-0 -top-12 mx-auto w-max">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 2H18C19.1 2 20 2.9 20 4V20C20 21.1 19.1 22 18 22H6C4.9 22 4 21.1 4 20V4C4 2.9 4.9 2 6 2ZM6 4V20H18V4H6ZM8 6H16V8H8V6ZM8 10H16V12H8V10Z">
                        </path>
                    </svg>
                    <h1>Book Collections</h1>
                </div>
                <div class="w-full relative mt-12">

                    <div class="swiper multiple-slide-carousel swiper-container relative">
                        <div class="swiper-wrapper mb-16 pb-16">
                            <div class="swiper-slide">
                                <div class="bg-customPurple rounded-lg shadow h-96 overflow-hidden flex flex-col justify-between">
                                    <img class="rounded-t-lg object-cover w-full h-60" src="https://placehold.co/600"
                                        alt="" />
                                    <div class="p-5 flex-grow overflow-hidden">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-100 line-clamp-2">
                                            Buku 1
                                        </h5>
                                    </div>
                                    <div class="p-5 flex justify-between space-x-4">
                                        <a href="#"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-100 hover:text-gray-900 rounded-lg hover:bg-gray-100 outline-white border transition-colors">
                                            Read now
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
                            <button id="slider-button-left"
                                class="swiper-button-prevs z-10 group !p-2 flex justify-center items-center border border-solid border-customPurple !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-customPurple !-translate-x-16"
                                data-carousel-prev>
                                <svg class="h-5 w-5 text-customPurple group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button id="slider-button-right"
                                class="swiper-button-nexts z-10 group !p-2 flex justify-center items-center border border-solid border-customPurple !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-customPurple !translate-x-16"
                                data-carousel-next>
                                <svg class="h-5 w-5 text-customPurple group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="bg-customPurple">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <span class="text-6xl font-bold text-white">1000+</span>
                            <p class="text-lg font-medium text-gray-300">Students</p>
                        </div>
                        <div class="text-center">
                            <span class="text-6xl font-bold text-white">64</span>
                            <p class="text-lg font-medium text-gray-300">Instructors</p>
                        </div>
                    </div>
                </div>
                <div class="text-white">
                    <p class="mb-4">
                        <span class="font-bold"> Head Office: </span><br />
                        Jalan Tenggilis Mejoyo KA 10 - 12 <br />
                        Surabaya, 60292 <br />
                        Jawa Timur, Indonesia
                    </p>
                    <p>
                        <a href="mailto:contact@example.com" class="underline hover:no-underline">contact@example.com</a>
                    </p>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021
                    <!-- <a href="https://flowbite.com/" class="hover:underline">Lab Permuridan Jatim</a> -->Lab
                    Permuridan Jatim. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
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
