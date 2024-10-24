<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-gray-200">
    <div class="flex items-center justify-center h-full">
        <div class="max-w-xl w-full bg-gray-100 p-6 rounded-lg" x-data="{ selectedOption: '', description: '' }">
            <h1 class="text-2xl font-bold mb-4">Add New Post</h1>
            <x-input-label for="postType" value="Select Your Post Type" class="!text-black !font-bold !text-lg mb-2" />

            <x-dropdown align="right" width="48" contentClasses="py-2 bg-white">
                <x-slot name="trigger">
                    <button class="inline-flex items-center w-full px-4 py-3 border border-transparent bg-white rounded-xl font-semibold">
                        <span x-text="selectedOption ? selectedOption : 'Select Post'"></span>
                        <svg class="h-5 w-5 ml-auto text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <ul class="py-1">
                        <li @click="selectedOption = 'Material'; description = 'Material is to upload learning content such as image, video, and text'"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Material</li>
                        <li @click="selectedOption = 'Quiz'; description = 'Quiz is to upload questions'"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Quiz</li>
                    </ul>
                </x-slot>
            </x-dropdown>

            <p class="mt-2 text-sm font-semibold" x-text="description"></p>

            <x-primary-button class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:ring-offset-0 focus:ring-0 !text-white !font-semibold py-3 px-16 rounded-md">
                Next
            </x-primary-button>
        </div>
    </div>
</body>
</html>
