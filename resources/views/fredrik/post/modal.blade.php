<!-- buat ditaruh dilanding page -->

<!-- pake x-on:click ditombol submit landing page -->
<x-primary-button x-on:click="$dispatch('open-modal', 'my-modal')" class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-16 !rounded-md">
    Next
</x-primary-button>



<x-modal name="my-modal" :show="false" maxWidth="xl">
    <div class="p-10 text-center bg-white rounded-lg shadow-lg">
        <div class="mb-6 flex justify-center items-center space-x-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12 text-gray-600">
                <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480L40 480c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24l0 112c0 13.3 10.7 24 24 24s24-10.7 24-24l0-112c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
            </svg>

            <h2 class="text-3xl font-semibold text-gray-800">Post this Course?</h2>
        </div>

        <p class="text-left text-gray-600 mb-8 text-lg">Once you've posted this course, any changes will be visible to the students.</p>

        <div class="flex justify-center">
            <x-primary-button x-on:click="$dispatch('close-modal', 'my-modal')" class="!bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:ring-offset-0 focus:ring-0 !text-white !font-semibold py-4 px-20 rounded-md text-lg">
                Confirm
            </x-primary-button>
        </div>
    </div>
</x-modal>