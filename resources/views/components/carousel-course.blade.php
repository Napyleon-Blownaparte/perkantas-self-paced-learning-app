<div class="bg-black p-6 rounded grid grid-cols-3 grid-flow-col">
    <div class="flex items-center">
        <h2 class="text-6xl text-white font-bold mb-4 mr-4">{{ $title }}</h2>
    </div>
    <div class="flex space-x-4 overflow-x-auto col-span-2">
        @foreach ($courses as $course)
            <div class="min-w-96 max-w-96 bg-gray-500 p-4 rounded shadow-md">
                <img src="{{ $course->thumbnail_image }}" alt="Course Image" class="w-full rounded">
                <h3 class="mt-4 text-white text-2xl font-bold max-w-md">{{ $course->title }}</h3>
                <p class="mt-2 text-white text-lg font-semibold">
                    Est. {{ $course->estimated_time }} Hour(s)</p>
                <div class= "grid grid-cols-2 gap-6">
                    <button href="{{ route('learner.courses.show', $course->id) }}"
                        class="mt-4 bg-gray-500 text-white px-5 py-3 border-2 border-white">Learn
                        More</button>
                    <button class="mt-4 bg-blue-800 text-white px-5 py-3">Enroll</button>
                </div>
            </div>
        @endforeach
    </div>
</div>