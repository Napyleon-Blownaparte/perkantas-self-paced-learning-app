<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Material') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('instructor.chapters.materials.store', $chapter) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" class="block text-gray-700" />
                            <x-text-input id="title" type="text" name="title" :value="old('title')" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Video -->
                        <div class="mb-4">
                            <label for="video" class="block text-gray-700">Video</label>
                            <input id="video" type="file" name="video" value="{{ old('video') }}"
                                accept="video/mp4,video/x-m4v"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                            <x-input-error :messages="$errors->get('video')" class="mt-2" />
                        </div>

                        {{-- Image --}}
                        <div class="mb-4">
                            <x-input-label for="image" :value="__('Image')" class="block text-gray-700" />
                            <input type="file" id="image" name="image" value="{{ old('video') }}" accept="image/*"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        {{-- Content --}}
                        <div class="mb-4">
                            <x-input-label for="content" :value="__('Content')" class="block text-gray-700" />
                            <x-text-input id="content" type="text" name="content" :value="old('content')" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>


                        <x-primary-button type="submit">Create chapter</x-primary-button>
                    </form>

                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
