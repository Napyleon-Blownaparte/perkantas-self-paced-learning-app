<section class="bg-gradient-to-r from-green-100 via-gray-100 to-pink-100 py-10">
    <div {{ $attributes->merge(['class' => 'container mx-auto flex flex-col md:flex-row items-center gap-4']) }}>
        <!-- Image Content -->
        @if (!empty($imgSrc))
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="{{ asset('storage/' . $imgSrc) }}" alt="Header Image"
                    class="w-full mx-auto rounded-lg shadow-lg">
            </div>
        @endif
        <!-- Video Content -->
        @if (!empty($videoSrc))
            <div class="md:w-1/2 mt-6 md:mt-0">
                @php
                    // Extract the video ID from the YouTube URL
                    preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/(?:watch\?v=|v\/)([a-zA-Z0-9_-]{11})/', $videoSrc, $matches);
                    $videoId = $matches[1] ?? null;
                @endphp

                @if ($videoId)
                    <object width="100%" height="400" 
                        data="https://www.youtube.com/embed/{{ $videoId }}" 
                        type="text/html">
                        <p>Your browser does not support embedded videos. <a href="{{ $videoSrc }}" target="_blank" rel="noopener noreferrer">Watch the video here.</a></p>
                    </object>
                @else
                    <p class="text-red-500">Invalid YouTube URL</p>
                @endif
            </div>
        @endif
        <!-- Text Content -->
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-3xl font-bold">{{ $title }}</h1>
            <p class="mt-4 text-gray-700">{{ $content }}</p>
        </div>
    </div>
</section>
