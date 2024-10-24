<section class="bg-gradient-to-r from-green-100 via-gray-100 to-pink-100 py-10">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-4">
        <!-- Text Content -->
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-3xl font-bold">{{ $title }}</h1>
            <p class="mt-4 text-gray-700">{{ $content }}</p>
        </div>
        <!-- Image Content -->
        <div class="md:w-1/2 mt-6 md:mt-0">
            <img src="{{ $imgSrc }}" alt="Header Image" class="w-full mx-auto rounded-lg shadow-lg">
        </div>
    </div>
</section>
