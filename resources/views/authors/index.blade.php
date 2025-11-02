@extends('layout')

@section('title', 'Все авторы')

@section('content')
<div class="px-4 sm:px-0">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Все авторы</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($authors as $author)
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <h3 class="text-2xl font-semibold text-gray-900 mb-3">
                <a href="{{ route('authors.show', $author) }}" class="hover:text-blue-600">
                    {{ $author->name }}
                </a>
            </h3>
            
            @if($author->bio)
            <p class="text-gray-600 mb-4">{{ $author->bio }}</p>
            @endif
            
            <div class="border-t pt-4">
                <p class="text-sm font-medium text-gray-700 mb-2">
                    Книг: {{ $author->books->count() }}
                </p>
                <div class="flex flex-wrap gap-2">
                    @foreach($author->books->take(3) as $book)
                    <span class="inline-block bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">
                        {{ $book->title }}
                    </span>
                    @endforeach
                    @if($author->books->count() > 3)
                    <span class="inline-block text-gray-500 text-xs px-3 py-1">
                        +{{ $author->books->count() - 3 }} ещё
                    </span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
