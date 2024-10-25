<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 flex justify-center min-h-screen">
    <div class="w-full max-w-8xl p-12">

        <div class="bg-gray-100 p-8 rounded-2xl shadow-lg">
            <h1 class="text-3xl font-bold text-center mb-12">Choose What to Upload</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Image -->
                <div class="relative h-96 bg-white border border-gray-200 rounded-2xl p-6 flex flex-col shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Image</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                    </svg>
                    <p class="text-gray-500 mb-8">Click the + button below to upload your image</p>
                    <button class="absolute bottom-0 right-0 mb-0 mr-0 border-8 border-gray-100 bg-cyan-500 text-white p-6 rounded-full focus:outline-none translate-x-1/2 translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </div>

                <!-- Video -->
                <div class="relative h-96 bg-white border border-gray-200 rounded-2xl p-6 flex flex-col shadow-lg">
                    <h2 class="text-xl font-bold mb-4">Video Link</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                    </svg>
                    <p class="text-gray-500 mb-8">Click the + button below to insert your link</p>
                    <button class="absolute bottom-0 right-0 mb-0 mr-0 border-8 border-gray-100 bg-cyan-500 text-white p-6 rounded-full focus:outline-none translate-x-1/2 translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Content -->
            <div class="mt-12 ml-auto mr-auto max-w-3xl">
                <h1 class="text-xl mb-4">Content</h1>

                <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2" />

                <div class="flex justify-between mt-8 w-full">
                    <x-secondary-button class="mt-4 !bg-white focus:!bg-white active:!bg-white hover:!bg-gray-100 !border-cyan-500 border-2 focus:!ring-cyan-500 focus:!ring-offset-0 !text-cyan-500 !font-semibold py-3 px-16 !rounded-md">
                        Back
                    </x-secondary-button>
                    <x-primary-button x-on:click="$dispatch('open-modal', 'my-modal')" class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-16 !rounded-md">
                        Submit
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
