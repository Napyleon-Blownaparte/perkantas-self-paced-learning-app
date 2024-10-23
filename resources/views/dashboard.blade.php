@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body class="bg-orange-50 h-screen">
    <!-- Main Container -->
    <div class="flex h-screen">
        
        <!-- Sidebar -->
        <nav class="bg-white w-16 p-4 flex flex-col items-center justify-between shadow-lg fixed top-0 z-10 h-screen">
            <!-- Menu Icons -->
            <div class="flex flex-col space-y-6 justify-center flex-grow">
                <a href="#" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg">
                    <!-- Icon  -->
                    <svg viewBox="0 0 64 64" width="35" height="35">
                        <path d="M14.9763 53.6418C13.7479 53.6418 12.723 53.2311 11.9017 52.4098C11.0803 51.5884 10.6688 50.5627 10.667 49.3324V15.2844C10.667 14.056 11.0785 13.0311 11.9017 12.2098C12.7248 11.3884 13.7497 10.9769 14.9763 10.9751H41.539L53.3337 22.7698V49.3351C53.3337 50.5618 52.923 51.5867 52.1017 52.4098C51.2803 53.2329 50.2546 53.6435 49.0243 53.6418H14.9763ZM14.9763 50.9751H49.027C49.5052 50.9751 49.8981 50.8213 50.2057 50.5138C50.5132 50.2062 50.667 49.8133 50.667 49.3351V24.3084H40.0003V13.6418H14.9763C14.4963 13.6418 14.1025 13.7955 13.795 14.1031C13.4874 14.4107 13.3337 14.8044 13.3337 15.2844V49.3351C13.3337 49.8133 13.4874 50.2062 13.795 50.5138C14.1025 50.8213 14.4963 50.9751 14.9763 50.9751ZM20.0003 42.9751H44.0003V40.3084H20.0003V42.9751ZM20.0003 24.3084H32.0003V21.6418H20.0003V24.3084ZM20.0003 33.6418H44.0003V30.9751H20.0003V33.6418Z" fill="#333333"/>
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
                        <path d="M55 45.9961C56.375 46.6836 57.6146 47.5273 58.7188 48.5273C59.8229 49.5273 60.7604 50.6419 61.5312 51.8711C62.3021 53.1003 62.9062 54.4336 63.3438 55.8711C63.7812 57.3086 64 58.7878 64 60.3086H60C60 58.6628 59.6875 57.1107 59.0625 55.6523C58.4375 54.194 57.5833 52.9232 56.5 51.8398C55.4167 50.7565 54.1354 49.8919 52.6562 49.2461C51.1771 48.6003 49.625 48.2878 48 48.3086C46.3333 48.3086 44.7812 48.6211 43.3438 49.2461C41.9062 49.8711 40.6354 50.7253 39.5312 51.8086C38.4271 52.8919 37.5625 54.1732 36.9375 55.6523C36.3125 57.1315 36 58.6836 36 60.3086H32C32 58.7878 32.2083 57.3086 32.625 55.8711C33.0417 54.4336 33.6458 53.1003 34.4375 51.8711C35.2292 50.6419 36.1771 49.5273 37.2812 48.5273C38.3854 47.5273 39.625 46.6836 41 45.9961C39.4375 44.8711 38.2188 43.4648 37.3438 41.7773C36.4688 40.0898 36.0208 38.2669 36 36.3086C36 34.6628 36.3125 33.1107 36.9375 31.6523C37.5625 30.194 38.4167 28.9232 39.5 27.8398C40.5833 26.7565 41.8542 25.8919 43.3125 25.2461C44.7708 24.6003 46.3333 24.2878 48 24.3086C49.6458 24.3086 51.1979 24.6211 52.6562 25.2461C54.1146 25.8711 55.3854 26.7253 56.4688 27.8086C57.5521 28.8919 58.4167 30.1732 59.0625 31.6523C59.7083 33.1315 60.0208 34.6836 60 36.3086C60 38.2669 59.5625 40.0898 58.6875 41.7773C57.8125 43.4648 56.5833 44.8711 55 45.9961ZM48 44.3086C49.1042 44.3086 50.1354 44.1003 51.0938 43.6836C52.0521 43.2669 52.9062 42.694 53.6562 41.9648C54.4062 41.2357 54.9792 40.3919 55.375 39.4336C55.7708 38.4753 55.9792 37.4336 56 36.3086C56 35.2044 55.7917 34.1732 55.375 33.2148C54.9583 32.2565 54.3854 31.4023 53.6562 30.6523C52.9271 29.9023 52.0833 29.3294 51.125 28.9336C50.1667 28.5378 49.125 28.3294 48 28.3086C46.8958 28.3086 45.8646 28.5169 44.9062 28.9336C43.9479 29.3503 43.0938 29.9232 42.3438 30.6523C41.5938 31.3815 41.0208 32.2253 40.625 33.1836C40.2292 34.1419 40.0208 35.1836 40 36.3086C40 37.4128 40.2083 38.444 40.625 39.4023C41.0417 40.3607 41.6146 41.2148 42.3438 41.9648C43.0729 42.7148 43.9167 43.2878 44.875 43.6836C45.8333 44.0794 46.875 44.2878 48 44.3086ZM14.25 41.6836H27.5V45.9961H14.25V41.6836ZM0 33.3086H27.5V37.6211H0V33.3086ZM0 25.6836H27.5V29.9961H0V25.6836Z" fill="#333333"/>
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
                        <p class="text-2xl font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">Ready to Learn?</p>
                    </div>
                    <img src="{{ asset('images/avatar.png') }}" alt="Avatar" class="h-36 object-contain absolute right-4 top-1/3 transform -translate-y-1/2 z-0"> <!-- Set z-index for image -->
                </div>
            </div>                     

            <!-- Course Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Finished Course -->
                <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
                    <h3 class="text-lg font-semibold mb-4 bg-white-50 p-2 rounded bg-white bg-opacity-50 backdrop-blur-sm">
                        Finished Course
                    </h3>                    
                    <div class="relative w-100 h-100">
                        <svg class="w-48 h-48" viewBox="0 0 36 36">
                            <!-- Background Circle -->
                            <circle
                                class="text-gray-300"
                                stroke-width="2.5"
                                stroke="currentColor"
                                fill="transparent"
                                r="16"
                                cx="18"
                                cy="18"
                            />
                            <!-- Foreground Circle (Progress) -->
                            <circle
                                id="progressCircle"
                                class="text-yellow-500"
                                stroke-width="2.5"
                                stroke-dasharray="0, 100"
                                stroke-linecap="round"
                                stroke="currentColor"
                                fill="transparent"
                                r="16"
                                cx="18"
                                cy="18"
                            />
                        </svg>                        
                        <div id="progressText" class="absolute inset-0 flex items-center justify-center text-3xl font-semibold">0</div>
                    </div>
                </div>

                <!-- Accepted Course -->
                <div class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col items-center space-y-4">
                    <div class="flex items-center justify-center mb-4 p-4 rounded-lg bg-white bg-opacity-50 backdrop-blur-sm">
                        <h3 class="text-lg font-semibold mr-4">Accepted Course</h3>
                        <svg width="40" height="40" viewBox="0 0 64 61" fill="none">
                            <path d="M55 45.9961C56.375 46.6836 57.6146 47.5273 58.7188 48.5273C59.8229 49.5273 60.7604 50.6419 61.5312 51.8711C62.3021 53.1003 62.9062 54.4336 63.3438 55.8711C63.7812 57.3086 64 58.7878 64 60.3086H60C60 58.6628 59.6875 57.1107 59.0625 55.6523C58.4375 54.194 57.5833 52.9232 56.5 51.8398C55.4167 50.7565 54.1354 49.8919 52.6562 49.2461C51.1771 48.6003 49.625 48.2878 48 48.3086C46.3333 48.3086 44.7812 48.6211 43.3438 49.2461C41.9062 49.8711 40.6354 50.7253 39.5312 51.8086C38.4271 52.8919 37.5625 54.1732 36.9375 55.6523C36.3125 57.1315 36 58.6836 36 60.3086H32C32 58.7878 32.2083 57.3086 32.625 55.8711C33.0417 54.4336 33.6458 53.1003 34.4375 51.8711C35.2292 50.6419 36.1771 49.5273 37.2812 48.5273C38.3854 47.5273 39.625 46.6836 41 45.9961C39.4375 44.8711 38.2188 43.4648 37.3438 41.7773C36.4688 40.0898 36.0208 38.2669 36 36.3086C36 34.6628 36.3125 33.1107 36.9375 31.6523C37.5625 30.194 38.4167 28.9232 39.5 27.8398C40.5833 26.7565 41.8542 25.8919 43.3125 25.2461C44.7708 24.6003 46.3333 24.2878 48 24.3086C49.6458 24.3086 51.1979 24.6211 52.6562 25.2461C54.1146 25.8711 55.3854 26.7253 56.4688 27.8086C57.5521 28.8919 58.4167 30.1732 59.0625 31.6523C59.7083 33.1315 60.0208 34.6836 60 36.3086C60 38.2669 59.5625 40.0898 58.6875 41.7773C57.8125 43.4648 56.5833 44.8711 55 45.9961ZM48 44.3086C49.1042 44.3086 50.1354 44.1003 51.0938 43.6836C52.0521 43.2669 52.9062 42.694 53.6562 41.9648C54.4062 41.2357 54.9792 40.3919 55.375 39.4336C55.7708 38.4753 55.9792 37.4336 56 36.3086C56 35.2044 55.7917 34.1732 55.375 33.2148C54.9583 32.2565 54.3854 31.4023 53.6562 30.6523C52.9271 29.9023 52.0833 29.3294 51.125 28.9336C50.1667 28.5378 49.125 28.3294 48 28.3086C46.8958 28.3086 45.8646 28.5169 44.9062 28.9336C43.9479 29.3503 43.0938 29.9232 42.3438 30.6523C41.5938 31.3815 41.0208 32.2253 40.625 33.1836C40.2292 34.1419 40.0208 35.1836 40 36.3086C40 37.4128 40.2083 38.444 40.625 39.4023C41.0417 40.3607 41.6146 41.2148 42.3438 41.9648C43.0729 42.7148 43.9167 43.2878 44.875 43.6836C45.8333 44.0794 46.875 44.2878 48 44.3086ZM32 46.8086C31.3333 47.5794 30.7292 48.3815 30.1875 49.2148C29.6458 50.0482 29.1667 50.944 28.75 51.9023C27.6458 50.7565 26.3125 49.8711 24.75 49.2461C23.1875 48.6211 21.6042 48.3086 20 48.3086H8V8.30859H4V52.3086H28.5938C28.3021 52.9544 28.0625 53.6107 27.875 54.2773C27.6875 54.944 27.5312 55.6211 27.4062 56.3086H0V4.30859H8V0.308594H20C21.8333 0.308594 23.5938 0.589844 25.2812 1.15234C26.9688 1.71484 28.5417 2.55859 30 3.68359C31.4375 2.55859 33 1.71484 34.6875 1.15234C36.375 0.589844 38.1458 0.308594 40 0.308594H52V4.30859H60V24.3086C58.7917 23.1211 57.4583 22.1315 56 21.3398V8.30859H52V19.8398C51.3333 19.6523 50.6667 19.5169 50 19.4336C49.3333 19.3503 48.6667 19.3086 48 19.3086V4.30859H40C38.5417 4.30859 37.125 4.55859 35.75 5.05859C34.375 5.55859 33.125 6.29818 32 7.27734V46.8086ZM28 46.4023V7.27734C26.875 6.31901 25.625 5.58984 24.25 5.08984C22.875 4.58984 21.4583 4.32943 20 4.30859H12V44.3086H20C21.3958 44.3086 22.7708 44.4857 24.125 44.8398C25.4792 45.194 26.7708 45.7148 28 46.4023Z" fill="#333333"/>
                        </svg>
                    </div>                    
                
                    <div class="flex flex-row space-x-4"> <!-- Max 2 cards please! -->
                        <!-- INPUT BACKEND DI SINI -->
                        <x-mini-course-card title="The Coldest Sunset" image_src="images/loginImage.png" link_url="#"/>
                        <x-mini-course-card title="The Coldest Sunset" image_src="images/loginImage.png" link_url="#"/>
                    </div>
                    
                    <div class="mt-1 flex justify-end items-center">
                        <p class="mr-2">More</p>
                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z" fill="black"/>
                            <path d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z" fill="black"/>
                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black"/>
                        </svg>                            
                    </div>                    
                </div>                            
                

                <!-- Waiting Course -->
                <div class="bg-white bg-cover bg-no-repeat bg-center bg-fit rounded-lg shadow-md p-6 flex flex-col items-center space-y-4">
                    <div class="flex items-center justify-center mb-4 p-4 rounded-lg bg-white bg-opacity-50 backdrop-blur-sm">
                        <h3 class="text-lg font-semibold mr-4">Waiting Course</h3>
                        <svg width="40" height="40" viewBox="0 0 64 61" fill="none">
                            <path d="M55 45.9961C56.375 46.6836 57.6146 47.5273 58.7188 48.5273C59.8229 49.5273 60.7604 50.6419 61.5312 51.8711C62.3021 53.1003 62.9062 54.4336 63.3438 55.8711C63.7812 57.3086 64 58.7878 64 60.3086H60C60 58.6628 59.6875 57.1107 59.0625 55.6523C58.4375 54.194 57.5833 52.9232 56.5 51.8398C55.4167 50.7565 54.1354 49.8919 52.6562 49.2461C51.1771 48.6003 49.625 48.2878 48 48.3086C46.3333 48.3086 44.7812 48.6211 43.3438 49.2461C41.9062 49.8711 40.6354 50.7253 39.5312 51.8086C38.4271 52.8919 37.5625 54.1732 36.9375 55.6523C36.3125 57.1315 36 58.6836 36 60.3086H32C32 58.7878 32.2083 57.3086 32.625 55.8711C33.0417 54.4336 33.6458 53.1003 34.4375 51.8711C35.2292 50.6419 36.1771 49.5273 37.2812 48.5273C38.3854 47.5273 39.625 46.6836 41 45.9961C39.4375 44.8711 38.2188 43.4648 37.3438 41.7773C36.4688 40.0898 36.0208 38.2669 36 36.3086C36 34.6628 36.3125 33.1107 36.9375 31.6523C37.5625 30.194 38.4167 28.9232 39.5 27.8398C40.5833 26.7565 41.8542 25.8919 43.3125 25.2461C44.7708 24.6003 46.3333 24.2878 48 24.3086C49.6458 24.3086 51.1979 24.6211 52.6562 25.2461C54.1146 25.8711 55.3854 26.7253 56.4688 27.8086C57.5521 28.8919 58.4167 30.1732 59.0625 31.6523C59.7083 33.1315 60.0208 34.6836 60 36.3086C60 38.2669 59.5625 40.0898 58.6875 41.7773C57.8125 43.4648 56.5833 44.8711 55 45.9961ZM48 44.3086C49.1042 44.3086 50.1354 44.1003 51.0938 43.6836C52.0521 43.2669 52.9062 42.694 53.6562 41.9648C54.4062 41.2357 54.9792 40.3919 55.375 39.4336C55.7708 38.4753 55.9792 37.4336 56 36.3086C56 35.2044 55.7917 34.1732 55.375 33.2148C54.9583 32.2565 54.3854 31.4023 53.6562 30.6523C52.9271 29.9023 52.0833 29.3294 51.125 28.9336C50.1667 28.5378 49.125 28.3294 48 28.3086C46.8958 28.3086 45.8646 28.5169 44.9062 28.9336C43.9479 29.3503 43.0938 29.9232 42.3438 30.6523C41.5938 31.3815 41.0208 32.2253 40.625 33.1836C40.2292 34.1419 40.0208 35.1836 40 36.3086C40 37.4128 40.2083 38.444 40.625 39.4023C41.0417 40.3607 41.6146 41.2148 42.3438 41.9648C43.0729 42.7148 43.9167 43.2878 44.875 43.6836C45.8333 44.0794 46.875 44.2878 48 44.3086ZM32 46.8086C31.3333 47.5794 30.7292 48.3815 30.1875 49.2148C29.6458 50.0482 29.1667 50.944 28.75 51.9023C27.6458 50.7565 26.3125 49.8711 24.75 49.2461C23.1875 48.6211 21.6042 48.3086 20 48.3086H8V8.30859H4V52.3086H28.5938C28.3021 52.9544 28.0625 53.6107 27.875 54.2773C27.6875 54.944 27.5312 55.6211 27.4062 56.3086H0V4.30859H8V0.308594H20C21.8333 0.308594 23.5938 0.589844 25.2812 1.15234C26.9688 1.71484 28.5417 2.55859 30 3.68359C31.4375 2.55859 33 1.71484 34.6875 1.15234C36.375 0.589844 38.1458 0.308594 40 0.308594H52V4.30859H60V24.3086C58.7917 23.1211 57.4583 22.1315 56 21.3398V8.30859H52V19.8398C51.3333 19.6523 50.6667 19.5169 50 19.4336C49.3333 19.3503 48.6667 19.3086 48 19.3086V4.30859H40C38.5417 4.30859 37.125 4.55859 35.75 5.05859C34.375 5.55859 33.125 6.29818 32 7.27734V46.8086ZM28 46.4023V7.27734C26.875 6.31901 25.625 5.58984 24.25 5.08984C22.875 4.58984 21.4583 4.32943 20 4.30859H12V44.3086H20C21.3958 44.3086 22.7708 44.4857 24.125 44.8398C25.4792 45.194 26.7708 45.7148 28 46.4023Z" fill="#333333"/>
                        </svg>
                    </div>                    
                
                    <div class="flex flex-row space-x-4"> <!-- Max 2 cards please! -->
                        <!-- INPUT BACKEND DI SINI -->
                        <x-mini-course-card title="The Coldest Sunset" image_src="images/loginImage.png" link_url="#"/>
                        <x-mini-course-card title="The Coldest Sunset" image_src="images/loginImage.png" link_url="#"/>
                    </div>
                    
                    <div class="mt-1 flex justify-end items-center">
                        <p class="mr-2">More</p>
                        <svg width="40" height="40" viewBox="0 0 64 64" fill="none">
                            <path d="M32.0002 53.76C19.9682 53.76 10.2402 44.032 10.2402 32C10.2402 19.968 19.9682 10.24 32.0002 10.24C44.0322 10.24 53.7602 19.968 53.7602 32C53.7602 44.032 44.0322 53.76 32.0002 53.76ZM32.0002 12.8C21.3762 12.8 12.8002 21.376 12.8002 32C12.8002 42.624 21.3762 51.2 32.0002 51.2C42.6242 51.2 51.2002 42.624 51.2002 32C51.2002 21.376 42.6242 12.8 32.0002 12.8Z" fill="black"/>
                            <path d="M31.6162 44.416L29.8242 42.624L40.4482 32L29.8242 21.376L31.6162 19.584L44.0322 32L31.6162 44.416Z" fill="black"/>
                            <path d="M20.4805 30.72H42.2405V33.28H20.4805V30.72Z" fill="black"/>
                        </svg>                            
                    </div>                    
                </div>                    
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
                        <x-course-card image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" id="1" link_url="#"/>
                        <x-course-card image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" id="1" link_url="#"/>
                        <x-course-card image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" id="1" link_url="#"/>

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
                    <h1 class="text-3xl font-semibold mb-0 ml-4 mr-4 text-white text-center">Our Books</h1>
                    
            
                    <!-- Scrollable Card Section -->
                    <div class="flex overflow-x-auto whitespace-nowrap max-w-full space-x-6 py-4 rounded-lg">
                        <!-- INPUT BACKEND DISINI -->
                        <x-book-card title="Agama Hidup Bermakna" image_src="images/pattern-background1.png" link_url="#"/>
                        <x-book-card title="Agama Hidup Bermakna" image_src="images/pattern-background1.png" link_url="#"/>
                        <!-- Add additional cards here... -->
                    </div>
                </div>
            </div>          
            
            <!-- Top materials -->
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
                    <h1 class="text-3xl font-semibold mb-0 ml-4 mr-4 text-white text-center max-w-xs">Get Started With Our Top Material</h1>
                    
            
                    <!-- Scrollable Card Section -->
                    <div class="flex overflow-x-auto whitespace-nowrap max-w-full space-x-6 py-4 rounded-lg">
                        <!-- BACKEND INPUT DISINI -->
                        <x-enroll-course image_src="images/pattern-background1.png" title="Agama Hidup Bermakna" est="50" link_url="#"/>      
                        <!-- Add additional cards here... -->
                    </div>
                </div>
            </div>       

            <x-footer/>            
            
        </div>
    </div>


    <script>
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
    updateProgressCircle(9, 10);

    //use backend for each course progression (card_id, progress_float)
    setProgress(1,0.5)

    </script>
</body>
</html>
