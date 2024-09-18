<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'user_id' => 1,
                'amount' => 10000,
                'type' => 1,
                'status' => 1,
                'bank_code' => 'bni',
                'bank_account' => '1234567890',
                'bank_account_name' => 'Test User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'amount' => 30000,
                'type' => 2,
                'status' => 2,
                'bank_code' => 'bni',
                'bank_account' => '1234567890',
                'bank_account_name' => 'Test User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
