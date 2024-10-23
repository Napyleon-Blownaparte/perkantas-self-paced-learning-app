@props(['title', 'image_src', 'link_url'])

<a href="{{ $link_url }}" class="block">
    <div class="max-w-xs rounded overflow-hidden shadow-lg bg-slate-950 backdrop-blur-sm border border-gray-400">
        <img class="w-full h-32 w-48 object-cover p-1" src="{{ asset($image_src) }}" alt="Image">
        <div class="px-4 py-2">
            <div class="text-lg text-white font-semibold mb-2">{{ $title }}</div>
        </div>
    </div>
</a>
