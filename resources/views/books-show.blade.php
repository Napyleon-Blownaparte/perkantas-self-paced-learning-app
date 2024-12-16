<x-app-layout>

    <div class="flex-1 p-4 sm:p-6 md:p-8 ml-4 sm:ml-8 md:ml-16">
        <!-- Input title and author backend -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
            {{$book->book_title}} by {{$book->author}}
        </h1>
    </div>

    <div class="flex flex-wrap md:flex-nowrap p-4 sm:p-6 md:p-8 ml-4 sm:ml-8 md:ml-16 mb-6">
        <div class="flex-none mb-4 md:mb-0">
            <img 
                src={{asset('storage/'.$book->book_cover)}} 
                alt="Book cover" 
                class="object-cover w-48 sm:w-60 md:w-[360px] h-64 sm:h-80 md:h-[640px] rounded"
            >
        </div>
        <div class="ml-0 sm:ml-6 md:ml-8 flex-1">
            <table class="min-w-full table-fixed">
                <tbody>
                    <!-- Title -->
                    <tr>
                        <td class="font-semibold text-gray-700 py-2 w-24 sm:w-28 md:w-32">Title:</td>
                        <td class="text-gray-900 py-2">{{$book->book_title}}</td>
                    </tr>
                    <!-- Author -->
                    <tr>
                        <td class="font-semibold text-gray-700 py-2 w-24 sm:w-28 md:w-32">Author:</td>
                        <td class="text-gray-900 py-2">{{$book->author}}</td>
                    </tr>
                    <!-- Description -->
                    <tr>
                        <td class="font-semibold text-gray-700 py-2 w-24 sm:w-28 md:w-32 align-top">Description:</td>
                        <td class="text-gray-900 py-2">
                            <p class="break-words">{{$book->descriptions}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-4 sm:p-6 md:p-8 ml-4 sm:ml-8 md:ml-16 mb-6">
        <form action="{{ route('login') }}">
            <button
                style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                Read Here
            </button>
        </form>
    </div>

    <x-footer></x-footer>
</x-app-layout>
