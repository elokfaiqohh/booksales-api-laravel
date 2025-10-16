<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Tere Liye adalah penulis asal Indonesia yang dikenal dengan karya-karya bertema kehidupan, keluarga, dan nilai moral.'
        ],
        [
            'id' => 2,
            'name' => 'Mark Manson',
            'photo' => 'mark_manson.jpg',
            'bio' => 'Mark Manson adalah penulis dan blogger asal Amerika Serikat, terkenal dengan gaya penulisan yang jujur dan sarkastik dalam membahas kehidupan modern.'
        ],
        [
            'id' => 3,
            'name' => 'Masashi Kishimoto',
            'photo' => 'masashi_kishimoto.jpg',
            'bio' => 'Masashi Kishimoto adalah mangaka asal Jepang yang menciptakan serial terkenal “Naruto” dan dikenal atas gaya ilustrasi khasnya.'
        ],
        [
            'id' => 4,
            'name' => 'Andrea Hirata',
            'photo' => 'andrea_hirata.jpg',
            'bio' => 'Andrea Hirata adalah novelis Indonesia yang terkenal dengan novel debutnya “Laskar Pelangi” yang diangkat dari kisah nyata masa kecilnya.'
        ],
        [
            'id' => 5,
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'J.K. Rowling adalah penulis asal Inggris, pencipta seri “Harry Potter” yang menjadi fenomena global dalam dunia sastra dan perfilman.'
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
