<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AuthorSeeder::class,
            CategorySeeder::class,
            CountrySeeder::class,
            BookSeeder::class,
            ChapterSeeder::class,
            RankSeeder::class,
            UserSeeder::class,
            HistorySeeder::class,
            WalletSeeder::class,
            CommentSeeder::class,
            ContentSeeder::class,
            CurrencySeeder::class,
            FavouriteSeeder::class,
            TransactionSeeder::class,
            PaymentSeeder::class,
            VoucherSeeder::class,
        ]);
    }
}
