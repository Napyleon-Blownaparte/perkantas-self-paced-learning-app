@props([ 'title', 'image_src', 'link_url'])

<a href="{{ $link_url }}" class="block">
    <div class="inline-block min-w-[300px] bg-white bg-opacity-55 backdrop-blur-sm rounded-lg shadow-md overflow-hidden p-2">
        <img src="{{ $image_src }}" alt="Book cover" class="w-full h-100 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-white mb-2">{{ $title }}</h3>

            <div class="flex items-center justify-center">
                <button class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600">More Info</button>
            </div>
        </div>
    </div>   
</a>