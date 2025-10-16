<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Novel karya Tere Liye yang menceritakan perjalanan hidup seorang pemuda mencari jati diri.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku pengembangan diri karya Mark Manson yang membahas pentingnya memilih hal yang benar-benar berarti dalam hidup.',
            'price' => 25000.00,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Naruto',
            'description' => 'Komik karya Masashi Kishimoto yang mengikuti perjalanan ninja muda bernama Naruto Uzumaki.',
            'price' => 30000.00,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif perjuangan anak-anak di Belitung untuk menggapai pendidikan.',
            'price' => 50000.00,
            'stock' => 20,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 1,
            'author_id' => 4
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer’s Stone',
            'description' => 'Kisah awal perjalanan Harry Potter di dunia sihir yang penuh keajaiban dan misteri.',
            'price' => 60000.00,
            'stock' => 10,
            'cover_photo' => 'harry_potter1.jpg',
            'genre_id' => 4,
            'author_id' => 5
        ]);
    }
}
