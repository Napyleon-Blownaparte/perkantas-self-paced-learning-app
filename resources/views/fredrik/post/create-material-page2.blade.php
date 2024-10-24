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
        <div class="max-w-xl w-full bg-gray-100 p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Add New Post</h1>
            <x-input-label for="postType" value="Give your post a name!" class="!text-black !font-bold !text-xl mb-2" />
            <x-input-label for="title" value="Title" class="!text-black !text-lg" />
            <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
            <div class="flex justify-between mt-4">
                <x-secondary-button class="mt-4 !bg-white focus:!bg-white active:!bg-white hover:!bg-gray-100 !border-cyan-500 border-2 focus:!ring-cyan-500 focus:!ring-offset-0 !text-cyan-500 !font-semibold py-3 px-16 !rounded-md">
                    Back
                </x-secondary-button>
                <x-primary-button class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-16 !rounded-md">
                    Next
                </x-primary-button>
            </div>
            
        </div>
    </div>
</body>

</html>
