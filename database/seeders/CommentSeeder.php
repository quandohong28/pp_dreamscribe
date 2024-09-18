<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'user_id' => 1,
                'book_id' => 1,
                'chapter_order' => 1,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
            ],
            [
                'user_id' => 1,
                'book_id' => 1,
                'chapter_order' => 1,
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ],
            [
                'user_id' => 1,
                'book_id' => 1,
                'chapter_order' => 1,
                'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'
            ],
            [
                'user_id' => 1,
                'book_id' => 1,
                'chapter_order' => 1,
                'content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'
            ],
            [
                'user_id' => 1,
                'book_id' => 1,
                'chapter_order' => 1,
                'content' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
            ],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
