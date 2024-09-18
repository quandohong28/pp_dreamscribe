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
        $authors = [
            [
                'fullname' => 'J.K. Rowling',
                'slug' => 'j-k-rowling',
                'avatar' => 'j-k-rowling.jpg',
                'biography' => 'Joanne Rowling CH, OBE, HonFRSE, FRCPE, FRSL, better known by her pen fullname J. K. Rowling, is a British author, philanthropist, film producer, television producer, and screenwriter.',
                'birthday' => '1965-07-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'J.R.R. Tolkien',
                'slug' => 'j-r-r-tolkien',
                'avatar' => 'j-r-r-tolkien.jpg',
                'biography' => 'John Ronald Reuel Tolkien CBE FRSL was an English writer, poet, philologist, and academic, best known as the author of the high fantasy works The Hobbit and The Lord of the Rings.',
                'birthday' => '1892-01-03',
                'deathday' => '1973-09-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'C.S. Lewis',
                'slug' => 'c-s-lewis',
                'avatar' => 'c-s-lewis.jpg',
                'biography' => 'Clive Staples Lewis was a British writer and lay theologian. He held academic positions in English literature at both Oxford University and Cambridge University.',
                'birthday' => '1898-11-29',
                'deathday' => '1963-11-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Stephen King',
                'slug' => 'stephen-king',
                'avatar' => 'stephen-king.jpg',
                'biography' => 'Stephen Edwin King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels.',
                'birthday' => '1947-09-21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
