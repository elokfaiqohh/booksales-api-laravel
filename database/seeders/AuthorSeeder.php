<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Tere Liye adalah penulis asal Indonesia yang dikenal dengan karya bertema kehidupan dan nilai moral.'
        ]);
        
        Author::create([
            'name' => 'Mark Manson',
            'photo' => 'mark_manson.jpg',
            'bio' => 'Mark Manson adalah penulis asal Amerika Serikat yang terkenal dengan bukunya “Sebuah Seni untuk Bersikap Bodo Amat”.'
        ]);

        Author::create([
            'name' => 'Masashi Kishimoto',
            'photo' => 'masashi_kishimoto.jpg',
            'bio' => 'Masashi Kishimoto adalah mangaka asal Jepang, pencipta seri legendaris Naruto.'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'photo' => 'andrea_hirata.jpg',
            'bio' => 'Andrea Hirata adalah novelis Indonesia yang terkenal melalui karya “Laskar Pelangi”.'
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'J.K. Rowling adalah penulis asal Inggris, pencipta seri fenomenal “Harry Potter”.',
        ]);

    }
}
