<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Course</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center py-12">

    <div class="w-full max-w-2xl mx-auto p-8 bg-gray-100 shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6">Add New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Course Detail -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Course Detail</h2>

                <div class="mb-4">
                    <x-input-label for="title" value="Course Name" class="!text-black"/>
                    <x-text-input id="title" name="title" class="block w-full" required />
                </div>

                <div class="mb-4">
                    <x-input-label for="thumbnail_image" value="Thumbnail Image" class="!text-black"/>
                    <x-text-input id="thumbnail_image" type="file" name="thumbnail_image" class="block w-full" required />
                </div>

                <div class="mb-4">
                    <x-input-label for="description" value="Description" class="!text-black"/>
                    <x-text-input id="description" name="description" class="block w-full" required />
                </div>
            </div>

            <!-- Advanced Detail -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Advanced Detail</h2>

                <div class="mb-4">
                    <x-input-label for="start_period" value="Start Period" class="!text-black"/>
                    <x-text-input id="start_period" type="date" name="start_period" class="block w-full" required />
                </div>

                <div class="mb-4">
                    <x-input-label for="end_period" value="End Period" class="!text-black"/>
                    <x-text-input id="end_period" type="date" name="end_period" class="block w-full" required />
                </div>

                <div class="mb-4">
                    <x-input-label for="estimated_time" value="Estimated Time (in hours)" class="!text-black"/>
                    <x-text-input id="estimated_time" type="number" name="estimated_time" class="block w-full" required />
                </div>

                <div class="mb-4">
                    <x-input-label for="banner_image" value="Banner Image" class="!text-black"/>
                    <x-text-input id="banner_image" type="file" name="banner_image" class="block w-full" required />
                </div>
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
