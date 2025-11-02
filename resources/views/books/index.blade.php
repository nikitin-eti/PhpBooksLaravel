@extends('layout')

@section('title', 'Все книги')

@section('content')
<div class="px-4 sm:px-0">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Все книги</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($books as $book)
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                <a href="{{ route('books.show', $book) }}" class="hover:text-blue-600">
                    {{ $book->title }}
                </a>
            </h3>
            
            @if($book->published_year)
            <p class="text-sm text-gray-500 mb-3">{{ $book->published_year }} год</p>
            @endif
            
            @if($book->description)
            <p class="text-gray-600 mb-4 line-clamp-3">{{ $book->description }}</p>
            @endif
            
            <div class="border-t pt-4">
                <p class="text-sm font-medium text-gray-700 mb-2">Авторы:</p>
                <div class="flex flex-wrap gap-2">
                    @foreach($book->authors as $author)
                    <a href="{{ route('authors.show', $author) }}" class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full hover:bg-blue-200">
                        {{ $author->name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
