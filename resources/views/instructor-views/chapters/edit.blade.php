<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Chapter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('instructor.chapters.update', $chapter) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Title -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" class="block text-gray-700" />
                            <x-text-input id="title" type="text" name="title" :value="old('title', $chapter->title)" autofocus
                                placeholder="Enter a descriptive title, e.g., 'The Parable of the Good Samaritan'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Edit chapter</x-primary-button>
                    </form>

                    {{-- DELETE BUTTON --}}
                    <form action="{{ route('instructor.chapters.destroy', $chapter) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">Delete chapter</x-danger-button>
                    </form>

                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
