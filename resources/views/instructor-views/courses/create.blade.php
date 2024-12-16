<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('instructor.courses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" class="block text-gray-700" />
                            <x-text-input id="title" type="text" name="title" :value="old('title')" autofocus
                                placeholder="Enter a descriptive title, e.g., 'Introduction to Christianity'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" class="block text-gray-700" />
                            <x-text-input id="description" type="text" name="description" :value="old('description')" autofocus
                                placeholder="Provide a brief description of the course" 
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Start Period -->
                        <div class="mb-4">
                            <x-input-label for="start_period" :value="__('Start Period')" class="block text-gray-700" />
                            <input type="date" id="start_period" name="start_period" value="{{ old('start_period') }}" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('start_period')" class="mt-2" />
                        </div>

                        <!-- End Period -->
                        <div class="mb-4">
                            <x-input-label for="end_period" :value="__('End Period')" class="block text-gray-700" />
                            <input type="date" id="end_period" name="end_period" value="{{ old('end_period') }}" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('end_period')" class="mt-2" />
                        </div>

                        <!-- Estimated Time -->
                        <div class="mb-4">
                            <x-input-label for="estimated_time" :value="__('Estimated Time (hours)')" class="block text-gray-700" />
                            <input type="number" id="estimated_time" name="estimated_time" value="{{ old('estimated_time') }}" autofocus
                                placeholder="Enter the estimated time in hours, e.g., 10"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('estimated_time')" class="mt-2" />
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="mb-4">
                            <x-input-label for="thumbnail_image" :value="__('Thumbnail Image')" class="block text-gray-700" />
                            <input type="file" id="thumbnail_image" name="thumbnail_image" accept="image/*"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <p class="text-sm text-gray-500">Upload Image (Max: 2MB)</p>
                            <x-input-error :messages="$errors->get('thumbnail_image')" class="mt-2" />
                        </div>

                        <!-- Banner Image -->
                        <div class="mb-4">
                            <x-input-label for="banner_image" :value="__('Banner Image')" class="block text-gray-700" />
                            <input type="file" id="banner_image" name="banner_image" accept="image/*"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <p class="text-sm text-gray-500">Upload Image (Max: 2MB)</p>
                            <x-input-error :messages="$errors->get('banner_image')" class="mt-2" />
                        </div>
                        <button
                            type="submit"
                            style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                            Create Course
                        </button>
                    </form>

                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
