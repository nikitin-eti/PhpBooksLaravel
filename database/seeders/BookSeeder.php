<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Война и мир',
                'description' => 'Роман-эпопея о русском обществе в эпоху войн против Наполеона.',
                'published_year' => 1869,
                'authors' => ['Лев Толстой'],
            ],
            [
                'title' => 'Анна Каренина',
                'description' => 'Роман о трагической любви замужней дамы Анны Карениной и блестящего офицера Вронского.',
                'published_year' => 1877,
                'authors' => ['Лев Толстой'],
            ],
            [
                'title' => 'Преступление и наказание',
                'description' => 'Психологический роман о студенте Раскольникове, совершившем убийство.',
                'published_year' => 1866,
                'authors' => ['Фёдор Достоевский'],
            ],
            [
                'title' => 'Братья Карамазовы',
                'description' => 'Философский роман о трёх братьях и их отце.',
                'published_year' => 1880,
                'authors' => ['Фёдор Достоевский'],
            ],
            [
                'title' => 'Евгений Онегин',
                'description' => 'Роман в стихах о жизни русского дворянства.',
                'published_year' => 1833,
                'authors' => ['Александр Пушкин'],
            ],
            [
                'title' => 'Вишнёвый сад',
                'description' => 'Пьеса о судьбе дворянской усадьбы.',
                'published_year' => 1904,
                'authors' => ['Антон Чехов'],
            ],
            [
                'title' => 'Мастер и Маргарита',
                'description' => 'Роман о дьяволе, посетившем Москву, и истории Понтия Пилата.',
                'published_year' => 1967,
                'authors' => ['Михаил Булгаков'],
            ],
            [
                'title' => 'Идиот',
                'description' => 'Роман о князе Мышкине, человеке исключительной доброты.',
                'published_year' => 1869,
                'authors' => ['Фёдор Достоевский'],
            ],
        ];

        foreach ($books as $bookData) {
            $authorNames = $bookData['authors'];
            unset($bookData['authors']);

            $book = Book::create($bookData);

            foreach ($authorNames as $authorName) {
                $author = Author::where('name', $authorName)->first();
                if ($author) {
                    $book->authors()->attach($author->id);
                }
            }
        }
    }
}
