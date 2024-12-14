<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form>
                        @csrf
                        <!-- Title -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" class="block text-gray-700" />
                            <x-text-input id="title" type="text" name="title" :value="old('title')" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" class="block text-gray-700" />
                            <x-text-input id="description" type="text" name="description" :value="old('description')" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Author -->
                        <div class="mb-4">
                            <x-input-label for="author" :value="__('Author')" class="block text-gray-700" />
                            <x-text-input id="author" type="text" name="author" :value="old('description')" autofocus
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('author')" class="mt-2" />
                        </div>

                        <!-- Cover Image -->
                        <div class="mb-4">
                            <x-input-label for="cover_image" :value="__('Cover Image')" class="block text-gray-700" />
                            <input type="file" id="cover_image" name="cover_image" accept="image/*"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('cover_image')" class="mt-2" />
                        </div>

                        <!-- PDF File -->
                        <div class="mb-4">
                            <x-input-label for="pdf_file" :value="__('PDF File')" class="block text-gray-700" />
                            <input type="file" id="pdf_file" name="pdf_file" accept="application/pdf"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('pdf_file')" class="mt-2" />
                        </div>

                        <button
                            type="submit"
                            style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                            Upload Book
                        </button>
                    </form>

                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
