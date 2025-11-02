@extends('layout')

@section('title', $book->title)

@section('content')
<div class="px-4 sm:px-0">
    <a href="{{ route('books.index') }}" class="text-blue-600 hover:text-blue-800 mb-4 inline-block">
        ← Назад к книгам
    </a>
    
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ $book->title }}</h2>
        
        @if($book->published_year)
        <p class="text-lg text-gray-500 mb-6">{{ $book->published_year }} год</p>
        @endif
        
        @if($book->description)
        <p class="text-gray-700 text-lg mb-8 leading-relaxed">{{ $book->description }}</p>
        @endif
        
        <div class="border-t pt-6">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Авторы</h3>
            <div class="space-y-4">
                @foreach($book->authors as $author)
                <div class="bg-gray-50 rounded-lg p-4">
                    <h4 class="text-xl font-medium text-gray-900 mb-2">
                        <a href="{{ route('authors.show', $author) }}" class="hover:text-blue-600">
                            {{ $author->name }}
                        </a>
                    </h4>
                    @if($author->bio)
                    <p class="text-gray-600">{{ $author->bio }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
