<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = [
            [
                'title' => 'dolor sit amet',
                'slug' => 'fantasy',
                'book_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            [
                'title' => 'consectetur adipiscing elit',
                'slug' => 'science-fiction',
                'book_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'sed do eiusmod tempor',
                'slug' => 'mystery',
                'book_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'incididunt ut labore et dolore magna aliqua',
                'slug' => 'horror',
                'book_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ut enim ad minim veniam',
                'slug' => 'romance',
                'book_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'quis nostrud exercitation ullamco',
                'slug' => 'western',
                'book_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'laboris nisi ut aliquip ex ea commodo consequat',
                'slug' => 'thriller',
                'book_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'slug' => 'dystopian',
                'book_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'excepteur sint occaecat cupidatat non proident',
                'slug' => 'memoir',
                'book_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'sunt in culpa qui officia deserunt mollit anim id est laborum',
                'slug' => 'biography',
                'book_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($chapters as $chapter) {
            Chapter::create($chapter);
        }
    }
}
