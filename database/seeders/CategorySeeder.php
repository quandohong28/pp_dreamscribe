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
                'name' => 'Hành động',
                'slug' => 'hanh-dong',
            ],
            [
                'name' => 'Phiêu lưu',
                'slug' => 'phieu-luu',
            ],
            [
                'name' => 'Manga',
                'slug' => 'manga',
            ],
            [
                'name' => 'Manhua',
                'slug' => 'manhua',
            ],
            [
                'name' => 'Manhwa',
                'slug' => 'manhwa',
            ],
            [
                'name' => 'Comic',
                'slug' => 'comic',
            ],
            [
                'name' => 'Chuyển sinh',
                'slug' => 'chuyen-sinh',
            ],
            [
                'name' => 'Kinh dị',
                'slug' => 'kinh-di',
            ],
            [
                'name' => 'Lãng mạn',
                'slug' => 'lang-man',
            ],
            [
                'name' => 'Hài hước',
                'slug' => 'hai-huoc',
            ],
            [
                'name' => 'Cổ đại',
                'slug' => 'co-dai',
            ],
            [
                'name' => 'Ngôn tình',
                'slug' => 'ngon-tinh',
            ],
            [
                'name' => 'Xuyên không',
                'slug' => 'xuyen-khong',
            ],
            [
                'name' => 'Ảo tưởng',
                'slug' => 'ao-tuong',
            ],
        ];

        foreach ($categories as $category) {
           Category::create($category);
        }
    }
}
