@extends('layouts.base')

@section('content')
<nav class="backdrop-blur fixed w-full z-20 top-0 start-0 transition-colors duration-300" id="navbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/Logo White No Bg.png') }}" class="h-8" alt="Perkantas Logo" />
        </a>
        <div class="flex md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-100 hover:bg-gray-700 rounded-lg text-sm p-2.5 me-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-100 border border-gray-100 rounded-lg bg-gray-50 bg-transparent" placeholder="Search...">
            </div>
            @auth
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div>
                    <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                        {{ Auth::user()->name }}
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-20" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" x-show="open" @click.away="open = false" x-transition>
                    <div class="py-1" role="none">
                        <x-dropdown-link :href="route('profile.edit')" role="menuitem">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}" role="none">
                            @csrf
                            <x-dropdown-link :href="route('logout')" role="menuitem" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        @endauth




            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-700" aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-100 border border-gray-300 rounded-lg bg-gray-50 bg-transparent" placeholder="Search...">
            </div>
            <ul class="flex flex-col p-2 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="#" class="block py-2 px-3 bg-gray-100 text-black rounded md:bg-transparent md:text-[#e3e3e3c8] md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#course" class="block py-2 px-3 text-white rounded hover:text-[#e3e3e3c8] md:p-0 transition ">Course</a>
                </li>
                <li>
                    <a href="#book" class="block py-2 px-3 text-white rounded hover:text-[#e3e3e3c8] md:p-0 transition">Books</a>
                </li>
            </ul>
            <div class="border border-gray-100 rounded-lg p-2 mt-4 md:hidden">
                <a href="{{ route('login') }}" class="block text-white rounded hover:text-[#e3e3e3c8] py-1 px-3 transition">Log In</a>
            </div>
        </div>
    </div>
</nav>
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
    <h1 class="px-2">Courses</h1>
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
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021 <!-- <a href="https://flowbite.com/" class="hover:underline">Lab Permuridan Jatim</a> -->Lab Permuridan Jatim. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
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
