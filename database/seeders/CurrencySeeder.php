<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'name' => 'Khoáng thạch',
                'slug' => 'khoang-thach',
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Linh thạch',
                'slug' => 'linh-thach',
                'value' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thánh linh thạch',
                'slug' => 'thanh-linh-thach',
                'value' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
