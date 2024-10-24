<x-app-layout>
    <div class="flex h-screen">

        <!-- Sidebar -->
        <nav class="bg-white w-16 p-4 flex flex-col items-center justify-between shadow-lg fixed top-0 z-10 h-screen">
            <!-- Menu Icons -->
            <div class="flex flex-col space-y-6 justify-center flex-grow">
                <a href="#" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg">
                    <!-- Icon  -->
                    <svg viewBox="0 0 64 64" width="35" height="35">
                        <path d="M57.75 28.3086C58.625 28.3086 59.4375 28.4648 60.1875 28.7773C60.9375 29.0898 61.6042 29.5273 62.1875 30.0898C62.7708 30.6523 63.2083 31.3086 63.5 32.0586C63.7917 32.8086 63.9583 33.6211 64 34.4961C64 35.3086 63.8438 36.1003 63.5312 36.8711C63.2188 37.6419 62.7708 38.319 62.1875 38.9023L39.7812 61.3711L28 64.3086L30.9375 52.5273L53.3438 30.0898C53.9271 29.5065 54.6042 29.069 55.375 28.7773C56.1458 28.4857 56.9375 28.3294 57.75 28.3086ZM59.3438 36.0898C59.7812 35.6523 60 35.1211 60 34.4961C60 33.8503 59.7917 33.3294 59.375 32.9336C58.9583 32.5378 58.4167 32.3294 57.75 32.3086C57.4583 32.3086 57.1771 32.3503 56.9062 32.4336C56.6354 32.5169 56.3958 32.6732 56.1875 32.9023L34.5625 54.5898L33.5 58.8086L37.7188 57.7461L59.3438 36.0898ZM20 28.3086H16V24.3086H20V28.3086ZM48 28.3086H24V24.3086H48V28.3086ZM16 36.3086H20V40.3086H16V36.3086ZM20 16.3086H16V12.3086H20V16.3086ZM48 16.3086H24V12.3086H48V16.3086ZM12 52.3086H25.8438L24.8438 56.3086H8V0.308594H56V23.5273C54.6042 23.7357 53.2708 24.194 52 24.9023V4.30859H12V52.3086ZM24 36.3086H40.0625L36.0625 40.3086H24V36.3086Z" fill="#333333"/>
                    </svg>

                    <span class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Courses
                    </span>
                </a>
                <a href="#" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg bg-gray-200">
                    <!-- Icon -->
                    <svg width="35" height="35" viewBox="0 0 64 65" fill="none">
                        <path d="M34.6667 8.30859V24.3086H56V8.30859M34.6667 56.3086H56V29.6419H34.6667M8 56.3086H29.3333V40.3086H8M8 34.9753H29.3333V8.30859H8V34.9753Z" fill="#333333"/>
                    </svg>

                    <!-- Tooltip -->
                    <span class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Dashboard
                    </span>
                </a>
                <a href="#" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg">
                    <!-- Icon -->
                    <svg width="35" height="35" viewBox="0 0 64 61" fill="none">
                        <path d="M60.1769 48.9187L59.962 49.1072L60.0154 49.388C60.2164 50.4452 60.2164 51.5307 60.0154 52.5879L59.962 52.8687L60.1769 53.0572L62.9083 55.4531L60.652 59.3565L57.1734 58.1809L56.9072 58.091L56.692 58.2715C55.8777 58.9544 54.9532 59.4937 53.958 59.8664L53.6979 59.9637L53.6431 60.2359L52.9239 63.8079H48.4104L47.6904 60.1838L47.6361 59.9107L47.3753 59.813C46.3801 59.4404 45.4555 58.901 44.6412 58.2182L44.426 58.0377L44.1599 58.1276L40.6812 59.3031L38.4249 55.3998L41.1563 53.0038L41.3723 52.8144L41.3174 52.5325C41.1139 51.4859 41.1139 50.41 41.3174 49.3634L41.3723 49.0815L41.1563 48.8921L38.4249 46.4961L40.6812 42.5927L44.1599 43.7683L44.426 43.8582L44.6412 43.6777C45.4555 42.9949 46.3801 42.4555 47.3753 42.0829L47.6353 41.9855L47.6901 41.7133L48.4093 38.1413H52.9234L53.643 41.7393L53.6975 42.012L53.958 42.1095C54.9532 42.4822 55.8777 43.0215 56.692 43.7044L56.9072 43.8849L57.1734 43.795L60.652 42.6194L62.9083 46.5228L60.1769 48.9187ZM50.6666 56.8079L50.6681 56.8079C52.2134 56.8033 53.6941 56.1874 54.7868 55.0947C55.8794 54.0021 56.4953 52.5214 56.5 50.9761V50.9746C56.5 49.8209 56.1578 48.6931 55.5169 47.7338C54.8759 46.7745 53.9649 46.0268 52.8989 45.5853C51.833 45.1438 50.6602 45.0283 49.5286 45.2534C48.397 45.4784 47.3576 46.034 46.5418 46.8498C45.726 47.6656 45.1705 48.705 44.9454 49.8366C44.7203 50.9681 44.8358 52.141 45.2773 53.2069C45.7188 54.2728 46.4665 55.1839 47.4258 55.8248C48.3851 56.4658 49.5129 56.8079 50.6666 56.8079ZM7.49996 24.3079V24.8079H7.99996H56H56.5V24.3079V8.30794V7.80794H56H7.99996H7.49996V8.30794V24.3079ZM44.4681 17.5117L44.8839 17.7895L44.4681 17.5117C44.2301 17.868 43.8917 18.1457 43.4958 18.3097C43.0999 18.4737 42.6642 18.5166 42.2439 18.433C41.8236 18.3494 41.4376 18.143 41.1346 17.84C40.8316 17.537 40.6252 17.1509 40.5416 16.7306C40.458 16.3103 40.5009 15.8747 40.6649 15.4788C40.8289 15.0829 41.1066 14.7445 41.4629 14.5064C41.8192 14.2683 42.2381 14.1413 42.6666 14.1413C43.2413 14.1413 43.7924 14.3695 44.1987 14.7759C44.605 15.1822 44.8333 15.7333 44.8333 16.3079C44.8333 16.7365 44.7062 17.1554 44.4681 17.5117ZM52.4681 17.5117L52.8839 17.7895L52.4681 17.5117C52.2301 17.868 51.8917 18.1457 51.4958 18.3097C51.0999 18.4737 50.6642 18.5166 50.2439 18.433C49.8236 18.3494 49.4376 18.143 49.1346 17.84C48.8315 17.537 48.6252 17.1509 48.5416 16.7306C48.458 16.3103 48.5009 15.8747 48.6649 15.4788C48.8289 15.0829 49.1066 14.7445 49.4629 14.5064C49.8192 14.2683 50.2381 14.1413 50.6666 14.1413C51.2413 14.1413 51.7924 14.3695 52.1987 14.7759C52.605 15.1822 52.8333 15.7333 52.8333 16.3079C52.8333 16.7365 52.7062 17.1554 52.4681 17.5117ZM60.8333 29.1413H3.16663V3.47461H60.8333V29.1413ZM11.1666 18.4746V14.1413H34.1666V18.4746H11.1666Z" fill="#333333" stroke="white"/>
                        <path d="M7.49996 56.3079V56.8079H7.99996H32.4154C32.9036 58.3315 33.5805 59.7871 34.4296 61.1413H3.16663V35.4746H39.4212C37.7611 36.6766 36.3019 38.139 35.1015 39.8079H7.99996H7.49996V40.3079V56.3079Z" fill="#333333" stroke="white"/>
                        <path d="M32.1245 46.1426C31.7539 47.5585 31.5467 49.0124 31.507 50.4759H11.1666V46.1426H32.1245Z" fill="#333333" stroke="white"/>
                    </svg>

                    <span class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Profile
                    </span>
                </a>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="flex-1 p-6 ml-16">

            <!-- Logo and Profile Section -->
            <div class="flex justify-between items-center mb-8">
                <!-- Logo -->
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20">
                </div>

                <!-- Profile Icon with White Background and Shadow -->
                <div class="bg-white p-2 pl-4 pr-4 rounded-lg shadow-lg flex items-center space-x-4">
                    <!-- Name on the left -->
                    <p class="text-gray-700 font-semibold">John Doe</p>

                    <!-- Profile Picture on the right -->
                    <img src="{{ asset('images/profilePicture.jpg') }}" alt="Profile" class="w-12 h-12 object-cover rounded-full">
                </div>
            </div>

            <!-- Header Section -->
            <div class="flex justify-between items-center mb-6">
                <!-- Welcome Section -->
                <div class="flex items-center bg-blue-950 text-white rounded-lg p-6 w-4/5 lg:w-2/5 relative">
                    <div class="ml-2 relative z-10"> <!-- Set z-index for text container -->
                        <h2 class="text-xl drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">Welcome, John Doe</h2>
                        <p class="text-2xl font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">What do you want to do today?</p>
                    </div>
                    <img src="{{ asset('images/avatar.png') }}" alt="Avatar" class="h-36 object-contain absolute right-4 top-1/3 transform -translate-y-1/2 z-0"> <!-- Set z-index for image -->
                </div>
            </div>

            <!-- Instrcutor Overview -->
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 w-3/5">

                <!-- Manage Course -->
                <div class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col space-y-4 relative">
                    <div class="flex flex-row items-center justify-between w-full mb-4 p-4 rounded-lg bg-white bg-opacity-50 backdrop-blur-sm">
                        <div class="flex justify-center items-center">
                            <h3 class="text-lg font-semibold mr-2">Manage Courses</h3>
                            <svg width="40" height="40" viewBox="0 0 64 61" fill="none">
                                <path d="M57.75 28.3086C58.625 28.3086 59.4375 28.4648 60.1875 28.7773C60.9375 29.0898 61.6042 29.5273 62.1875 30.0898C62.7708 30.6523 63.2083 31.3086 63.5 32.0586C63.7917 32.8086 63.9583 33.6211 64 34.4961C64 35.3086 63.8438 36.1003 63.5312 36.8711C63.2188 37.6419 62.7708 38.319 62.1875 38.9023L39.7812 61.3711L28 64.3086L30.9375 52.5273L53.3438 30.0898C53.9271 29.5065 54.6042 29.069 55.375 28.7773C56.1458 28.4857 56.9375 28.3294 57.75 28.3086ZM59.3438 36.0898C59.7812 35.6523 60 35.1211 60 34.4961C60 33.8503 59.7917 33.3294 59.375 32.9336C58.9583 32.5378 58.4167 32.3294 57.75 32.3086C57.4583 32.3086 57.1771 32.3503 56.9062 32.4336C56.6354 32.5169 56.3958 32.6732 56.1875 32.9023L34.5625 54.5898L33.5 58.8086L37.7188 57.7461L59.3438 36.0898ZM20 28.3086H16V24.3086H20V28.3086ZM48 28.3086H24V24.3086H48V28.3086ZM16 36.3086H20V40.3086H16V36.3086ZM20 16.3086H16V12.3086H20V16.3086ZM48 16.3086H24V12.3086H48V16.3086ZM12 52.3086H25.8438L24.8438 56.3086H8V0.308594H56V23.5273C54.6042 23.7357 53.2708 24.194 52 24.9023V4.30859H12V52.3086ZM24 36.3086H40.0625L36.0625 40.3086H24V36.3086Z" fill="#333333"/>
                            </svg>
                        </div>

                        <div class="flex flex-col items-center">
                            <!-- INPUT BACKEND DISINI (insert number of courses)-->
                            <h2 class="text-5xl font-bold">15</h2>
                            <h2 class="text-xl font-bold">Courses</h2>
                        </div>
                    </div>

                    <div class="absolute bottom-4 left-0 right-0 flex justify-center items-center">
                        <p class="mr-2">More</p>
                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z" fill="black"/>
                            <path d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z" fill="black"/>
                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black"/>
                        </svg>
                    </div>
                </div>

                <!-- Manage Enrollment -->
                <div class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col space-y-4 relative">
                    <div class="flex flex-row items-center justify-between w-full mb-4 p-4 rounded-lg bg-white bg-opacity-50 backdrop-blur-sm">
                        <div class="flex justify-center items-center">
                            <h3 class="text-lg font-semibold mr-2">Manage Enrollment</h3>
                            <svg width="40" height="40" viewBox="0 0 64 61" fill="none">
                                <path d="M55 49.6875C56.375 50.375 57.6146 51.2188 58.7188 52.2188C59.8229 53.2188 60.7604 54.3333 61.5312 55.5625C62.3021 56.7917 62.9062 58.125 63.3438 59.5625C63.7812 61 64 62.4792 64 64H60C60 62.3542 59.6875 60.8021 59.0625 59.3438C58.4375 57.8854 57.5833 56.6146 56.5 55.5312C55.4167 54.4479 54.1354 53.5833 52.6562 52.9375C51.1771 52.2917 49.625 51.9792 48 52C46.3333 52 44.7812 52.3125 43.3438 52.9375C41.9062 53.5625 40.6354 54.4167 39.5312 55.5C38.4271 56.5833 37.5625 57.8646 36.9375 59.3438C36.3125 60.8229 36 62.375 36 64H32C32 62.4792 32.2083 61 32.625 59.5625C33.0417 58.125 33.6458 56.7917 34.4375 55.5625C35.2292 54.3333 36.1771 53.2188 37.2812 52.2188C38.3854 51.2188 39.625 50.375 41 49.6875C39.4375 48.5625 38.2188 47.1562 37.3438 45.4688C36.4688 43.7812 36.0208 41.9583 36 40C36 38.3542 36.3125 36.8021 36.9375 35.3438C37.5625 33.8854 38.4167 32.6146 39.5 31.5312C40.5833 30.4479 41.8542 29.5833 43.3125 28.9375C44.7708 28.2917 46.3333 27.9792 48 28C49.6458 28 51.1979 28.3125 52.6562 28.9375C54.1146 29.5625 55.3854 30.4167 56.4688 31.5C57.5521 32.5833 58.4167 33.8646 59.0625 35.3438C59.7083 36.8229 60.0208 38.375 60 40C60 41.9583 59.5625 43.7812 58.6875 45.4688C57.8125 47.1562 56.5833 48.5625 55 49.6875ZM48 48C49.1042 48 50.1354 47.7917 51.0938 47.375C52.0521 46.9583 52.9062 46.3854 53.6562 45.6562C54.4062 44.9271 54.9792 44.0833 55.375 43.125C55.7708 42.1667 55.9792 41.125 56 40C56 38.8958 55.7917 37.8646 55.375 36.9062C54.9583 35.9479 54.3854 35.0938 53.6562 34.3438C52.9271 33.5938 52.0833 33.0208 51.125 32.625C50.1667 32.2292 49.125 32.0208 48 32C46.8958 32 45.8646 32.2083 44.9062 32.625C43.9479 33.0417 43.0938 33.6146 42.3438 34.3438C41.5938 35.0729 41.0208 35.9167 40.625 36.875C40.2292 37.8333 40.0208 38.875 40 40C40 41.1042 40.2083 42.1354 40.625 43.0938C41.0417 44.0521 41.6146 44.9062 42.3438 45.6562C43.0729 46.4062 43.9167 46.9792 44.875 47.375C45.8333 47.7708 46.875 47.9792 48 48ZM32 50.5C31.3333 51.2708 30.7292 52.0729 30.1875 52.9062C29.6458 53.7396 29.1667 54.6354 28.75 55.5938C27.6458 54.4479 26.3125 53.5625 24.75 52.9375C23.1875 52.3125 21.6042 52 20 52H8V12H4V56H28.5938C28.3021 56.6458 28.0625 57.3021 27.875 57.9688C27.6875 58.6354 27.5312 59.3125 27.4062 60H0V8H8V4H20C21.8333 4 23.5938 4.28125 25.2812 4.84375C26.9688 5.40625 28.5417 6.25 30 7.375C31.4375 6.25 33 5.40625 34.6875 4.84375C36.375 4.28125 38.1458 4 40 4H52V8H60V28C58.7917 26.8125 57.4583 25.8229 56 25.0312V12H52V23.5312C51.3333 23.3438 50.6667 23.2083 50 23.125C49.3333 23.0417 48.6667 23 48 23V8H40C38.5417 8 37.125 8.25 35.75 8.75C34.375 9.25 33.125 9.98958 32 10.9688V50.5ZM28 50.0938V10.9688C26.875 10.0104 25.625 9.28125 24.25 8.78125C22.875 8.28125 21.4583 8.02083 20 8H12V48H20C21.3958 48 22.7708 48.1771 24.125 48.5312C25.4792 48.8854 26.7708 49.4062 28 50.0938Z" fill="#333333"/>
                            </svg>
                        </div>

                        <div class="flex flex-col items-center">
                            <!-- INPUT BACKEND DISINI (insert number of students)-->
                            <h2 class="text-5xl font-bold">100</h2>
                            <h2 class="text-xl font-bold">Students</h2>
                        </div>
                    </div>

                    <div class="absolute bottom-4 left-0 right-0 flex justify-center items-center">
                        <p class="mr-2">More</p>
                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z" fill="black"/>
                            <path d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z" fill="black"/>
                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black"/>
                        </svg>
                    </div>
                </div>


            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

                <!-- Add books -->
                <a href="#" class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col items-center justify-center space-y-4 hover:bg-gray-100 transition-colors group">
                    <div class="flex items-center justify-center p-4 rounded-lg bg-white backdrop-blur-sm transition-colors group-hover:bg-gray-100">
                        <h3 class="text-2xl font-semibold mr-2">Add Books</h3>
                        <svg width="50" height="50" viewBox="0 0 64 61" fill="none">
                            <path d="M32 50.6672C28.3515 48.5608 24.2129 47.4518 20 47.4518C15.7871 47.4518 11.6485 48.5608 8 50.6672V16.0005C11.6485 13.8941 15.7871 12.7852 20 12.7852C24.2129 12.7852 28.3515 13.8941 32 16.0005M32 50.6672C35.6485 48.5608 39.7871 47.4518 44 47.4518C48.2129 47.4518 52.3515 48.5608 56 50.6672V16.0005C52.3515 13.8941 48.2129 12.7852 44 12.7852C39.7871 12.7852 35.6485 13.8941 32 16.0005M32 50.6672V16.0005" stroke="#333333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>



                <!-- Add Courses -->
                <a href="#" class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col items-center justify-center space-y-4 hover:bg-gray-100 transition-colors group">
                    <div class="flex items-center justify-center p-4 rounded-lg bg-white backdrop-blur-sm transition-colors group-hover:bg-gray-100">
                        <h3 class="text-2xl font-semibold mr-2">Add Courses</h3>
                        <svg width="50" height="50" viewBox="0 0 64 61" fill="none">
                            <path d="M17.3706 5.33398C13.8933 5.67798 11.552 6.45132 9.80265 8.20332C6.66931 11.342 6.66931 16.3953 6.66931 26.5047V37.2246C6.66931 47.3313 6.66931 52.3873 9.80265 55.5286C12.936 58.67 17.9813 58.6673 28.0693 58.6673H33.4213C43.5093 58.6673 48.5546 58.6673 51.688 55.5286C54.5333 52.6753 54.7973 48.2833 54.8213 39.9393" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M28.0693 18.6671L30.744 28.0004C32.2373 30.9604 34.112 31.7338 38.7707 32.0004C42.4747 31.9098 44.624 31.4724 46.4587 29.8778C47.7093 28.7898 48.2747 27.1498 48.5493 25.5178L49.4667 20.0004M56.1547 14.6671V28.0004M22.936 13.1551C27.168 9.64311 30.9387 7.75777 38.76 5.68311C39.6424 5.45015 40.5707 5.45475 41.4507 5.69644C48.3733 7.60044 52.112 9.29111 57.12 13.0511C57.3333 13.2111 57.3973 13.5098 57.248 13.7311C55.6133 16.1364 51.9627 18.0858 43.008 21.5578C41.1429 22.2754 39.0758 22.264 37.2187 21.5258C27.6827 17.7391 23.2987 15.7124 22.7653 13.6084C22.748 13.5245 22.7548 13.4373 22.7851 13.3571C22.8153 13.2768 22.8676 13.2068 22.936 13.1551Z" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>

                <!-- Add News -->
                <a href="#" class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col items-center justify-center space-y-4 hover:bg-gray-100 transition-colors group">
                    <div class="flex items-center justify-center p-4 rounded-lg bg-white backdrop-blur-sm transition-colors group-hover:bg-gray-100">
                        <h3 class="text-2xl font-semibold mr-2">Add News</h3>
                        <svg width="50" height="50" viewBox="0 0 64 61" fill="none">
                            <path d="M14.9761 53.3327C13.7476 53.3327 12.7227 52.922 11.9014 52.1007C11.0801 51.2794 10.6685 50.2536 10.6667 49.0234V14.9753C10.6667 13.7469 11.0783 12.722 11.9014 11.9007C12.7245 11.0793 13.7494 10.6678 14.9761 10.666H41.5387L53.3334 22.4607V49.026C53.3334 50.2527 52.9227 51.2776 52.1014 52.1007C51.2801 52.9238 50.2543 53.3345 49.0241 53.3327H14.9761ZM14.9761 50.666H49.0267C49.505 50.666 49.8979 50.5122 50.2054 50.2047C50.513 49.8971 50.6667 49.5042 50.6667 49.026V23.9993H40.0001V13.3327H14.9761C14.4961 13.3327 14.1023 13.4865 13.7947 13.794C13.4872 14.1016 13.3334 14.4953 13.3334 14.9753V49.026C13.3334 49.5042 13.4872 49.8971 13.7947 50.2047C14.1023 50.5122 14.4961 50.666 14.9761 50.666ZM20.0001 42.666H44.0001V39.9993H20.0001V42.666ZM20.0001 23.9993H32.0001V21.3327H20.0001V23.9993ZM20.0001 33.3327H44.0001V30.666H20.0001V33.3327Z" fill="#333333"/>
                        </svg>
                    </div>
                </a>

            </div>

            <!-- My Course-->
            <div class="w-full flex flex-col justify-center items-start p-4 bg-[url('../../public/images/pattern-background3.png')] bg-cover rounded-lg mt-8">
                <div class="flex justify-end w-full items-center"> <!-- Adjusted to use justify-between -->
                    <h2 class="text-white text-xl">More</h2>
                    <div class="flex items-center"> <!-- Added this wrapper div for the icon -->
                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none">
                            <path d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z" fill="white"/>
                            <path d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z" fill="white"/>
                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center space-x-6">

                    <h1 class="text-3xl font-semibold mb-0 ml-4 mr-4 text-white text-center max-w-xs">Our Courses</h1>

                    <!-- Scrollable Card Section -->
                    <div class="flex overflow-x-auto whitespace-nowrap max-w-full space-x-6 py-4 rounded-lg">
                        <!-- INPUT BACKEND DI SINI -->
                        <!-- Unfixed: too many image ~> web widen, tampilan rusak -->
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>
                        <x-course-card-instructor image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" link_url="#"/>

                        <!-- Add additional cards here... -->
                    </div>
                </div>
            </div>


            <!-- Our Books -->
            <div class="w-full flex flex-col justify-center items-start p-4 bg-[url('../../public/images/pattern-background3.png')] bg-cover rounded-lg mt-8">
                <div class="flex justify-end w-full items-center"> <!-- Adjusted to use justify-between -->
                    <h2 class="text-white text-xl">More</h2>
                    <div class="flex items-center"> <!-- Added this wrapper div for the icon -->
                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none">
                            <path d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z" fill="white"/>
                            <path d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z" fill="white"/>
                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <!-- Title on the left -->
                    <h1 class="text-3xl font-semibold mb-0 ml-4 mr-4 text-white text-center">Books</h1>


                    <!-- Scrollable Card Section -->
                    <div class="flex overflow-x-auto whitespace-nowrap max-w-full space-x-6 py-4 rounded-lg">
                        <!-- INPUT BACKEND DISINI -->
                        <x-book-card title="Agama Hidup Bermakna" image_src="images/pattern-background1.png" link_url="#"/>
                        <!-- Add additional cards here... -->
                    </div>
                </div>
            </div>

            <x-footer/>

        </div>
    </div>
</x-app-layout>
