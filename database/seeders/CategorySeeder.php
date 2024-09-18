<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Fantasy',
                'slug' => 'fantasy',
            ],
            [
                'name' => 'Science Fiction',
                'slug' => 'science-fiction',
            ],
            [
                'name' => 'Mystery',
                'slug' => 'mystery',
            ],
            [
                'name' => 'Horror',
                'slug' => 'horror',
            ],
            [
                'name' => 'Romance',
                'slug' => 'romance',
            ],
            [
                'name' => 'Western',
                'slug' => 'western',
            ],
            [
                'name' => 'Thriller',
                'slug' => 'thriller',
            ],
            [
                'name' => 'Dystopian',
                'slug' => 'dystopian',
            ],
            [
                'name' => 'Memoir',
                'slug' => 'memoir',
            ],
            [
                'name' => 'Biography',
                'slug' => 'biography',
            ],
        ];

        foreach ($categories as $category) {
           Category::create($category);
        }
    }
}
