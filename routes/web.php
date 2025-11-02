<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/books', [LibraryController::class, 'books'])->name('books.index');
    Route::get('/books/{book}', [LibraryController::class, 'showBook'])->name('books.show');
    
    Route::get('/authors', [LibraryController::class, 'authors'])->name('authors.index');
    Route::get('/authors/{author}', [LibraryController::class, 'showAuthor'])->name('authors.show');
});
