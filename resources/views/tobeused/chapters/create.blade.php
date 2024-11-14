<x-app-layout>
    <div class="bg-gray-100 shadow-md rounded-lg p-6 w-full max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Add Chapter</h2>

        <h3 class="text-lg font-semibold mb-4">Chapter Detail</h3>

        <!-- Ensure to include the correct course ID in the action URL -->
        <form method="POST" action="{{ route('chapters.store', $course->id) }}">
            @csrf <!-- Add CSRF token for security -->

            <div class="mb-4">
                <x-input-label for="title" value="Title" class="!text-black" />
                <x-text-input
                    id="title"
                    name="title"
                    class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2"
                    required
                />
            </div>

            <div class="mb-6">
                <x-input-label for="description" value="Description" class="!text-black" />
                <x-text-input
                    id="description"
                    name="description"
                    class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2"
                    required
                />
            </div>

            <x-primary-button class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-16 !rounded-md">
                Submit
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
