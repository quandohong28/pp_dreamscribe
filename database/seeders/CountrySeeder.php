<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'Afghanistan',
                'slug' => 'afghanistan',
            ],
            [
                'name' => 'Albania',
                'slug' => 'albania',
            ],
            [
                'name' => 'Algeria',
                'slug' => 'algeria',
            ],
            [
                'name' => 'Andorra',
                'slug' => 'andorra',
            ],
            [
                'name' => 'Angola',
                'slug' => 'angola',
            ],
            [
                'name' => 'Antigua and Barbuda',
                'slug' => 'antigua-and-barbuda',
            ],
            [
                'name' => 'Argentina',
                'slug' => 'argentina',
            ],
            [
                'name' => 'Armenia',
                'slug' => 'armenia',
            ],
            [
                'name' => 'Australia',
                'slug' => 'australia',
            ],
            [
                'name' => 'Austria',
                'slug' => 'austria',
            ],
            [
                'name' => 'Azerbaijan',
                'slug' => 'azerbaijan',
            ],
            [
                'name' => 'Bahamas',
                'slug' => 'bahamas',
            ],
            [
                'name' => 'Bahrain',
                'slug' => 'bahrain',
            ],
            [
                'name' => 'Bangladesh',
                'slug' => 'bangladesh',
            ],
            [
                'name' => 'Barbados',
                'slug' => 'barbados',
            ],
            [
                'name' => 'Belarus',
                'slug' => 'belarus',
            ],
            [
                'name' => 'Belgium',
                'slug' => 'belgium',
            ],
            [
                'name' => 'Belize',
                'slug' => 'belize',
            ],
            [
                'name' => 'Benin',
                'slug' => 'benin',
            ],
            [
                'name' => 'Bhutan',
                'slug' => 'bhutan',
            ],
            [
                'name' => 'Bolivia',
                'slug' => 'bolivia',
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
