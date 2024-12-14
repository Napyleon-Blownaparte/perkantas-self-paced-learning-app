@props([ 'title', 'image_src', 'link_url', 'text_color' => 'text-black'])

<a href="{{ $link_url }}" class="block">
    <div class="inline-block bg-white bg-opacity-55 backdrop-blur-sm rounded-lg shadow-md overflow-hidden p-2">
        <img src="{{ $image_src }}" alt="Book cover" class="object-cover w-[360px] h-[640px]">
        <div class="p-4">
            <h3 class="text-lg font-semibold {{ $text_color }} mb-2">{{ $title }}</h3>

            <div class="flex items-left justify-left">
                <button
                    style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                    class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                    More Info
                </button>
            </div>
        </div>
    </div>   
</a>