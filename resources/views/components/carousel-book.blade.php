@props(['books'])

<div class="bg-black p-6 rounded grid md:grid-cols-3 grid-flow-row grid-rows-1">
    <div class="flex items-center">
        <h2 class="text-7xl text-white font-bold mb-4">Books</h2>
    </div>
       
    <div class="flex space-x-4 overflow-x-auto col-span-2">
        @foreach ($books as $book)
            <div class="min-w-96 bg-gray-500 p-4 rounded shadow-md">
                <img src="{{ asset('storage/'.$book->book_cover) }}" alt="Course Image" class="object-cover w-[360px] h-[640px]">
                <h3 class="mt-4 text-white text-2xl font-bold max-w-md">{{$book->book_title}}</h3>
                
                @if(Auth::check())
                    @if(Auth::user()->role == 'learner')
                        <a href="{{route('learner.books.show',$book->id)}}"><button class="mt-4 bg-blue-800 text-white px-5 py-3 rounded-lg">Read Now</button></a>
                    @elseif (Auth::user()->role == 'instructor')
                        <a href="{{route('instructor.books.show',$book->id)}}"><button class="mt-4 bg-blue-800 text-white px-5 py-3 rounded-lg">Read Now</button></a>
                    @endif
                @endif
            </div>
         @endforeach
    </div>
</div>