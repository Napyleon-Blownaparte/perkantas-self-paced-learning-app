@props(['image_src', 'title', 'link_url', 'classwork_url' => null])

<div class="inline-block min-w-[300px] bg-white bg-opacity-55 backdrop-blur-sm rounded-lg shadow-md overflow-hidden p-2">
    <img src="{{ asset('storage/'.$image_src) }}" alt="Course Image" class="w-full h-64 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-6">{{ $title }}</h3>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ $link_url }}" class="flex justify-start">
                <button class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600 w-full">More Info</button>
            </a>

            @if ($classwork_url)
                <a href="{{ $classwork_url }}" class="flex justify-end">
                    <button class="bg-white text-black border-2 rounded-md px-4 py-2 hover:bg-gray-300 w-full">Assessments</button>
                </a>
            @endif
        </div>
    </div>
</div>
