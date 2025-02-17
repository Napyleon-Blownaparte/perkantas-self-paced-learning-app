<div class="bg-black p-6 rounded grid md:grid-cols-3 grid-flow-row grid-rows-1">
    <div class="flex items-center">
        <h2 class="text-5xl md:text-7xl text-white font-bold md:mb-4 mb-10 mr-4">{{ $title }}</h2>
    </div>
    <div class="flex space-x-4 overflow-x-auto col-span-2">
        @foreach ($courses as $course)
        {{-- {{dd($course)}} --}}
            <div class="min-w-96 max-w-96 bg-gray-500 p-4 rounded shadow-md">
                <img src="{{ $course->thumbnail_image === 'images/placeholder.svg' ? asset($course->thumbnail_image) : asset('storage/'.$course->thumbnail_image) }}" alt="Course Image" class="object-cover w-[360px] h-[380px]">
                <h3 class="mt-4 text-white text-2xl font-bold max-w-md">{{ $course->title }}</h3>
                <p class="mt-2 text-white text-lg font-semibold">
                    Est. {{ $course->estimated_time }} Hour(s)</p>
                <div class= "grid grid-cols-2 gap-6">
                    <a href="{{ (Auth::check() && Auth::user()->role == "instructor") ? route("instructor.courses.show", $course->id) : route("learner.courses.show", $course->id) }}">
                        <button
                            class="mt-4 bg-blue-800 text-white px-5 py-3 rounded-lg">Learn
                            More</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>