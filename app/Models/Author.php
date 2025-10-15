<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'nationality' => 'Indonesia',
            'birth_year' => 1979,
            'books_written' => 35
        ],
        [
            'id' => 2,
            'name' => 'Mark Manson',
            'nationality' => 'United States',
            'birth_year' => 1984,
            'books_written' => 5
        ],
        [
            'id' => 3,
            'name' => 'Masashi Kishimoto',
            'nationality' => 'Japan',
            'birth_year' => 1974,
            'books_written' => 20
        ],
        [
            'id' => 4,
            'name' => 'Andrea Hirata',
            'nationality' => 'Indonesia',
            'birth_year' => 1976,
            'books_written' => 10
        ],
        [
            'id' => 5,
            'name' => 'J.K. Rowling',
            'nationality' => 'United Kingdom',
            'birth_year' => 1965,
            'books_written' => 14
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
