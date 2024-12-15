@props(['image_src', 'title', 'id', 'link_url', 'text_color' => 'text-white', 'status'])


@php
    $statusColors = [
        'Stopped' => 'background-color: red; color: white;',
        'Accepted' => 'background-color: green; color: white;',
        'Pending' => 'background-color: yellow; color: black;',
        'Rejected' => 'background-color: gray; color: white;',
        'Not Enrolled' => 'background-color: blue; color: white;',
    ];
@endphp

<a href="{{ $link_url }}" class="swiper-slide block">
    <div class="bg-white rounded-lg shadow h-96 overflow-hidden flex flex-col justify-between hover:shadow-lg transition-shadow">
        <img src="{{ asset('storage/' . $image_src) }}" alt="Course Image" class="w-full h-64 object-cover">

        <div class="p-4">
            <h3 class="text-lg font-semibold mb-6">{{ $title }}</h3>  
            <button class="w-full px-4 py-2 rounded" style="{{ $statusColors[$status] }}">
                {{ $status }}
            </button>
        </div>
    </div>
</a>
