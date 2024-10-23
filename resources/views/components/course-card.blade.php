@props(['image_src', 'title', 'id', 'link_url'])

<a href="{{ $link_url }}" class="block">
    <div class="inline-block min-w-[300px] bg-white bg-opacity-55 backdrop-blur-sm rounded-lg shadow-md overflow-hidden p-2">
        <img src="{{ asset($image_src) }}" alt="Course Image" class="w-full h-64 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-white">{{ $title }}</h3>
            <p class="text-sm text-white mb-6">Progress</p>

            <!-- Progress bar -->
            <div class="relative w-full h-2 bg-gray-200 rounded-full mb-4">
                <div id="progress-bar-{{ $id }}" class="absolute h-full bg-cyan-500 rounded-full" style="width: 0%;"></div>
            </div>
            
            <p class="text-sm text-right" id="progress-text-1">0%</p>
        </div>
    </div>
</a>