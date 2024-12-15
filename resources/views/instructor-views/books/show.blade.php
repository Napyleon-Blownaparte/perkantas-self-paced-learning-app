<x-app-layout>

    <div class="flex-1 p-8 ml-16">
        <!-- Input title and outhor backend -->
        <h1 class="text-4xl font-bold mb-4">{{$book->book_title}} by {{"$book->author"}}</h1>
    </div>

    <div class="flex-1 p-8 ml-16 mb-8 flex">
        <div class="flex-none">
            <img src="https://via.placeholder.com/360x640" alt="Book cover" class="object-cover w-[360px] h-[640px] rounded">
        </div>

        <div class="ml-8 flex-1">
            <table class="min-w-full table-fixed">
                <tbody>
                    <!-- Title -->
                    <tr>
                        <td class="font-semibold text-gray-700 py-2 w-32">Title:</td>
                        <td class="text-gray-900 py-2">{{$book->book_title}}</td>
                    </tr>
                    <!-- Author -->
                    <tr>
                        <td class="font-semibold text-gray-700 py-2 w-32">Author:</td>
                        <td class="text-gray-900 py-2">{{$book->author}}</td>
                    </tr>
                    <!-- Description -->
                    <tr>
                        <td class="font-semibold text-gray-700 py-2 w-32 align-top">Description:</td>
                        <td class="text-gray-900 py-2">
                            <p class="break-words">{{$book->descriptions}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-8 ml-16 mb-8">
        <form action="{{route('instructor.books.read', $book->id)}}">
            <button
                style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                Read Here
            </button>
        </form>
    </div>

    <x-footer></x-footer>
</x-app-layout>
