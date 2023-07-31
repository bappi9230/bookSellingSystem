<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function AllBook()
    {
        $books = Book::get();
        return view('book.all_book', compact('books'));
    }

    public function AddBook()
    {
        return view('book.add_book');
    } //end method

    public function StoreBook(BookRequest $request)
    {
        Book::insert([
            'name' => $request->name,
            'price' => $request->price,
            'created_at' => now(),
        ]);
        return redirect()->route('all-book');
    }
}
