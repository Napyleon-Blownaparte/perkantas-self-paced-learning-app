@props(['image_src', 'title', 'est'])

<div class="inline-block min-w-[300px] bg-white bg-opacity-55 backdrop-blur-sm rounded-lg shadow-md overflow-hidden p-2">
    <img src="{{ asset($image_src) }}" alt="Course Image" class="w-full h-64 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-semibold text-white">{{ $title }}</h3>
        <p class="text-sm text-white mb-6">Est. {{ $est }} hours</p>

        <div class="flex items-center justify-between">
            <button class="text-white border border-white rounded-md px-4 py-2 hover:bg-black hover:bg-opacity-20">Learn more</button>
            <button class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600">Enroll</button>
        </div>
    </div>
</div>  