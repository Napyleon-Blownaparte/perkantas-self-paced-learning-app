<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Assessment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('instructor.assessments.update', $assessment->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH') <!-- Menggunakan PATCH untuk update -->

                        <!-- Title -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Name')" class="block text-gray-700" />
                            <x-text-input
                                id="title"
                                type="text"
                                name="name"
                                :value="old('name', $assessment->name)"
                                autofocus
                                placeholder="Enter a descriptive title, e.g., 'Christian Theology Knowledge Check'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Update Assessment</x-primary-button>
                    </form>
                    {{-- END HERE --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
