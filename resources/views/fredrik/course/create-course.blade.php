<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center py-12">
    
    <div class="w-full max-w-2xl mx-auto p-8 bg-gray-100 shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6">Add New Course</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Course Detail -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Course Detail</h2>

                <div class="mb-4">
                    <x-input-label for="course_name" value="Course Name" class="!text-black"/>
                    <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="image" value="Image" class="!text-black"/>
                    <x-text-input type="file" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="description" value="Description" class="!text-black"/>
                    <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="course_activity" value="Course Activity" class="!text-black"/>
                    <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>
            </div>

            <!-- Advanced Detail -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Advanced Detail</h2>

                <div class="mb-4">
                    <x-input-label for="course_period" value="Course Period(s)" class="!text-black"/>
                    <x-text-input class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="chapters" value="Number of Chapter(s)" class="!text-black"/>
                    <x-text-input type="number" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="card_image" value="Card Image" class="!text-black"/>
                    <x-text-input type="file" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="estimated_time" value="Estimated Time to Finish per Chapter" class="!text-black"/>
                    <x-text-input type="time" class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" />
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
