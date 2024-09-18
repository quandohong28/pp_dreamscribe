<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vouchers = [
            [
                'name' => 'Voucher 1',
                'code' => 'ASFASJF',
                'description' => 'Voucher 1 description',
                'discount' => 3,
                'limit' => 100,
                'in_stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Voucher 2',
                'code' => 'ASFASJFD',
                'description' => 'Voucher 2 description',
                'discount' => 5,
                'limit' => 200,
                'in_stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Voucher 3',
                'code' => 'ASFASJFA',
                'description' => 'Voucher 3 description',
                'discount' => 10,
                'limit' => 300,
                'in_stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        foreach ($vouchers as $voucher) {
            Voucher::create($voucher);
        }
    }
}
