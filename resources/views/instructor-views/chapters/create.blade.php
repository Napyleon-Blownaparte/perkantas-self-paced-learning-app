<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Chapter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('instructor.courses.chapters.store', $course) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" class="block text-gray-700" />
                            <x-text-input id="title" type="text" name="title" :value="old('title')" autofocus
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
