<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ranks = [
            [
                'name' => 'Phàm nhân',
                'slug' => 'pham-nhan',
                'level' => 1,
                'point' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trúc cơ',
                'slug' => 'truc-co',
                'level' => 2,
                'point' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kim đan',
                'slug' => 'kim-dan',
                'level' => 3,
                'point' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nguyên anh',
                'slug' => 'nguyen-anh',
                'level' => 4,
                'point' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Huyền anh',
                'slug' => 'huyen-anh',
                'level' => 5,
                'point' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thần chiếu',
                'slug' => 'than-chieu',
                'level' => 6,
                'point' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hoá hư',
                'slug' => 'hoa-hu',
                'level' => 7,
                'point' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dung hồn',
                'slug' => 'dung-hon',
                'level' => 7,
                'point' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thánh nhân',
                'slug' => 'thanh-nhan',
                'level' => 8,
                'point' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thánh vương',
                'slug' => 'thanh-vuong',
                'level' => 9,
                'point' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thánh đế',
                'slug' => 'thanh-de',
                'level' => 10,
                'point' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vô thượng',
                'slug' => 'vo-thuong',
                'level' => 11,
                'point' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chí tôn',
                'slug' => 'chi-ton',
                'level' => 12,
                'point' => 10000000,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];

        foreach ($ranks as $rank) {
            Rank::create($rank);
        }
    }
}
