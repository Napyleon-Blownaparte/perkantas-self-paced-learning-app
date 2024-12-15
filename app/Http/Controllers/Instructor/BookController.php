<?php

namespace App\Http\Controllers\Instructor;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     */
    public function index(Request $request)
    {
        $books = Book::all();

        $perPage = 8; // Jumlah item per halaman
        $currentPage = $request->input('page', 1); // Ambil halaman saat ini, default 1
        $paginatedBooks = $books->slice(($currentPage - 1) * $perPage, $perPage);

        // Simulasi struktur pagination seperti Laravel
        $paginatedBooks = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginatedBooks,
            $books->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        
    
        return view('instructor-views.books.index', [
            'books' => $paginatedBooks,
        ]);
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view('instructor-views.books.create');
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(BookRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            $validated['book_cover'] = $request->file('cover_image')->store('book_covers', 'public');
        }

        if ($request->hasFile('pdf_file')) {
            $validated['pdf_link'] = $request->file('pdf_file')->store('books', 'public');
        }

        Book::create($validated);

        return redirect()->route('instructor.books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(Book $book)
    {
        return view('instructor-views.books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            $validated['book_cover'] = $request->file('cover_image')->store('book_covers', 'public');
        }

        if ($request->hasFile('pdf_file')) {
            $validated['pdf_link'] = $request->file('pdf_file')->store('books', 'public');
        }

        $book->update($validated);

        return redirect()->route('instructor-views.books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('instructor-views.books.index')->with('success', 'Book deleted successfully.');
    }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('instructor-views.books.show', compact('book'));
    }

    public function read($id)
    {
        
        $book = Book::findOrFail($id);
        return view('instructor-views.books.read', compact('book'));
    }

}