<x-app-layout>
    <div class="flex flex-col items-center justify-center h-full mt-16">
        <div class="max-w-2xl w-full bg-gray-100 p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Add New Material</h1>

            <!-- Form Start -->
            <form action="{{ '/courses/' . $course->id . '/chapters/' . $chapter->id . '/materials' }}" method="POST" enctype="multipart/form-data">
                @csrf

                <x-input-label for="materialType" value="Give your material a name!" class="!text-black !font-bold !text-xl mb-2" />
                <x-input-label for="title" value="Title" class="!text-black !text-lg" />

                <x-text-input name="title"
                    class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2 mt-2" required />

                <h1 class="text-3xl font-bold text-center mb-12 mt-8">Choose What to Upload</h1>
                <div class="flex flex-col gap-16">
                    <!-- Image Upload -->
                    <div class="relative h-96 bg-white border border-gray-200 rounded-2xl p-6 flex flex-col shadow-lg">
                        <h2 class="text-2xl font-bold mb-4">Image</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                        <p class="text-gray-500 mb-8">Click the + button below to upload your image</p>
                        <input type="file" name="image" accept="image/*"  class="hidden" id="image-upload" onchange="previewImage(event)">
                        <label for="image-upload" class="absolute bottom-0 right-0 mb-0 mr-0 border-8 border-gray-100 bg-cyan-500 text-white p-6 rounded-full cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </label>
                        <!-- Image Preview -->
                        <div id="image-preview" class="mt-4 hidden">
                            <h3 class="text-lg font-bold">Image Preview:</h3>
                            <img id="preview-image" class="mt-2 w-full h-auto max-h-72 object-contain rounded" />
                        </div>
                    </div>

                    <!-- Video Upload -->
                    <div class="relative h-96 bg-white border border-gray-200 rounded-2xl p-6 flex flex-col shadow-lg">
                        <h2 class="text-2xl font-bold mb-4">Video Upload</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                        <p class="text-gray-500 mb-8">Click the + button below to upload your video</p>
                        <input type="file" name="video" accept="video/*" class="hidden" id="video-upload" onchange="previewVideo(event)">
                        <label for="video-upload" class="absolute bottom-0 right-0 mb-0 mr-0 border-8 border-gray-100 bg-cyan-500 text-white p-6 rounded-full cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </label>
                        <!-- Video Preview -->
                        <div id="video-preview" class="mt-4 hidden">
                            <h3 class="text-lg font-bold">Video Preview:</h3>
                            <video id="preview-video" class="mt-2 w-full max-h-72 object-contain rounded" controls></video>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="mt-12">
                    <h1 class="text-xl mb-4">Content</h1>
                    <x-text-input name="content"
                        class="block w-full focus:!border-blue-400 focus:!ring-blue-400 focus:ring-2 p-2" placeholder="Write your content here..." />

                    <div class="flex justify-between mt-8 w-full">
                        <a href="{{ url()->previous() }}">
                            <x-secondary-button class="mt-4 !bg-white focus:!bg-white active:!bg-white hover:!bg-gray-100 !border-cyan-500 border-2 focus:!ring-cyan-500 focus:!ring-offset-0 !text-cyan-500 !font-semibold py-3 px-6 !rounded-md">
                                Back
                            </x-secondary-button>
                        </a>

                        {{-- <x-primary-button type="submit"
                            class="mt-4 !bg-cyan-500 focus:!bg-cyan-500 active:!bg-cyan-500 hover:!bg-cyan-200 focus:!ring-offset-0 focus:!ring-0 !text-white !font-semibold py-3 px-6 !rounded-md">
                            Submit
                        </x-primary-button> --}}
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('image-preview');
            const previewImage = document.getElementById('preview-image');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.classList.add('hidden');
            }
        }

        function previewVideo(event) {
            const videoPreview = document.getElementById('video-preview');
            const previewVideo = document.getElementById('preview-video');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewVideo.src = e.target.result;
                    videoPreview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                videoPreview.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
