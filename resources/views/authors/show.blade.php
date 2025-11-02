@extends('layout')

@section('title', $author->name)

@section('content')
<div class="px-4 sm:px-0">
    <a href="{{ route('authors.index') }}" class="text-blue-600 hover:text-blue-800 mb-4 inline-block">
        ← Назад к авторам
    </a>
    
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ $author->name }}</h2>
        
        @if($author->bio)
        <p class="text-gray-700 text-lg mb-8 leading-relaxed">{{ $author->bio }}</p>
        @endif
        
        <div class="border-t pt-6">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Книги автора</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($author->books as $book)
                <div class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                    <h4 class="text-lg font-medium text-gray-900 mb-2">
                        <a href="{{ route('books.show', $book) }}" class="hover:text-blue-600">
                            {{ $book->title }}
                        </a>
                    </h4>
                    @if($book->published_year)
                    <p class="text-sm text-gray-500 mb-2">{{ $book->published_year }} год</p>
                    @endif
                    @if($book->description)
                    <p class="text-gray-600 text-sm line-clamp-2">{{ $book->description }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
