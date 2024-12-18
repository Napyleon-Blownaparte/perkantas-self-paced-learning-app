@props([ 'title', 'image_src', 'link_url', 'text_color' => 'text-black'])

<a href="{{ $link_url }}" class="block h-full">
    <div class="bg-white bg-opacity-55 backdrop-blur-sm rounded-lg shadow-md overflow-hidden p-2 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
        <img src="{{ asset('storage/'.$image_src) }}" 
             alt="Book cover" 
             class="object-cover w-full h-60 md:h-80 rounded-lg">

        <div class="p-4 flex-1 flex flex-col justify-between">
            <h3 class="text-lg font-semibold {{ $text_color }} mb-3 text-left">{{ $title }}</h3>
            
            <div class="text-left">
                <button 
                    style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                    class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900">
                    More Info
                </button>
            </div>
        </div>
    </div>   
</a>