<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $histories = [
            [
                'user_id' => 1,
                'book_id' => 1,
                'chaper_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 2,
                'chaper_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 3,
                'chaper_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 4,
                'chaper_order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 5,
                'chaper_order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 6,
                'chaper_order' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 7,
                'chaper_order' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 8,
                'chaper_order' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 9,
                'chaper_order' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'book_id' => 10,
                'chaper_order' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($histories as $history) {
            History::create($history);
        }
    }
}
