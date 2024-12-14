@props(['books'])

<div class="bg-black p-6 rounded grid grid-cols-3 grid-flow-col">
    <div class="flex items-center">
        <h2 class="text-7xl text-white font-bold mb-4">Books</h2>
    </div>
       
    <div class="flex space-x-4 overflow-x-auto col-span-2">
        @foreach ($books as $book)
            <div class="min-w-96 bg-gray-500 p-4 rounded shadow-md">
                <img src="{{$book->book_cover}}" alt="Course Image" class="rounded min-h-[400px] object-cover w-full">
                <h3 class="mt-4 text-white text-2xl font-bold max-w-md">{{$book->book_title}}</h3>
                <button class="mt-4 bg-blue-800 text-white px-5 py-3" href="{{}}">Read Now</button>
            </div>
         @endforeach
    </div>
</div>