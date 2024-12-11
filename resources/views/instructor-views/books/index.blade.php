<x-app-layout>
    <div class="flex-1 p-8 ml-16 mb-8">
        <h1 class="text-4xl font-bold mb-4">Manage Books</h1>
    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Looping backend -->
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
            <x-book-card image_src="https://via.placeholder.com/360x640" title="PlaceHolder Title" link_url="#"/>
        </div>
    </div>

    <div class="relative py-2">
        <!-- Tambah link ke create.blade.php -->
        <a href="#">
            <div
                class="m-24 my-12 border-4 border-dotted rounded-xl border-gray-400 text-center flex flex-col justify-center items-center py-10">
                <div class="m-12">
                    <svg class="m-auto my-8" fill="#303030" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="1.5em" height="1.5em"
                        viewBox="0 0 45.402 45.402" xml:space="preserve">
                        <g>
                            <path
                                d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                        </g>
                    </svg>

                    <!-- Tambah link ke create.blade.php -->
                    <a
                        href="#">
                        <button
                            style="color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="m-auto bg-green-600 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 flex items-center justify-center gap-2">
                            Add More Books
                        </button>
                    </a>
                    <p class="mt-8 text-gray-600">Click the button above to Add Books</p>
                </div>
            </div>
        </a>
    </div>

    <x-footer class=""></x-footer>
    @if (session('success'))
    <x-success-modal id="success-modal" title="Success" content="{{ session('success') }}" />
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            toggleModal('success-modal');
        });
    </script>
@endif
</x-app-layout>
