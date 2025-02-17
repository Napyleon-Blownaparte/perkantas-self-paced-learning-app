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
                                placeholder="e.g., Wherefore Our Enemies Are To Be Loved." 
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Video -->
                        <div class="mb-4">
                            <label for="video" class="block text-gray-700">Video</label>
                            <input id="video" type="url" name="video" value="{{ old('video') }}"
                                placeholder="e.g., https://www.youtube.com/watch?v=example" 
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                            <x-input-error :messages="$errors->get('video')" class="mt-2" />
                        </div>

                        {{-- Image --}}
                        <div class="mb-4">
                            <x-input-label for="image" :value="__('Image')" class="block text-gray-700" />
                            <x-text-input type="file" id="image" name="image" value="{{ old('video') }}" accept="image/*"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" /> 
                            <p class="text-sm text-gray-500">Upload Image (Max: 2MB)</p> 
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        {{-- Content --}}
                        <div class="mb-4">
                            <x-input-label for="content" :value="__('Content')" class="block text-gray-700" />
                            <textarea id="content" name="content" rows="5" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                                placeholder="e.g., Love your enemies, bless them that curse you, do good to them that hate you, and pray for them which despitefully use you and persecute you; that ye may be the children of your Father which is in heaven.—MATT. 5:44, 45.">{{ old('content') }}</textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>


                        <x-primary-button type="submit">Create Material</x-primary-button>
                    </form>

                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
