<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    
    <div class="w-full max-w-xl mx-auto p-8 bg-gray-100  shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6">Add Book</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-2">Book Detail</h2>
                <x-input-label for="title" value="Title" class="!text-black"/>
                <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
            </div>

            <div class="mb-6">
                <x-input-label for="description" value="Description" class="!text-black"/>
                <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
            </div>

            <div class="mb-6">
                <x-input-label for="feature" value="Feature" class="!text-black"/>
                <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
            </div>

            <div class="mb-6">
                <x-input-label for="cover_image" value="Cover Image" class="!text-black"/>
                <x-text-input type="file" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
            </div>

            <div class="mb-6">
                <x-input-label for="offline_price" value="Offline Price" class="!text-black"/>
                <x-text-input type="number" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
            </div>

            <div class="flex justify-end">
                <x-primary-button class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-16 !rounded-md">
                    Submit
                </x-primary-button>
            </div>
        </form>
    </div>
</body>

</html>
