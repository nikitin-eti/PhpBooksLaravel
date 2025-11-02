<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function books()
    {
        $books = Book::with('authors')->get();
        return view('books.index', compact('books'));
    }

    public function showBook(Book $book)
    {
        $book->load('authors');
        return view('books.show', compact('book'));
    }

    public function authors()
    {
        $authors = Author::with('books')->get();
        return view('authors.index', compact('authors'));
    }

    public function showAuthor(Author $author)
    {
        $author->load('books');
        return view('authors.show', compact('author'));
    }
}
