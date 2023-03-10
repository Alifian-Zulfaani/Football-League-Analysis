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
            StadiumsTableSeeder::class,
            ClubsTableSeeder::class,
            ManagersTableSeeder::class,
            PlayersTableSeeder::class,
            MatchesTableSeeder::class,

            // Pemanggilan seeder harus urut yaa...
        ]);
    }
}