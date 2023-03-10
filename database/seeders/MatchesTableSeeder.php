<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matches = [
            [
                'clubs_id' => 1,
                'rivals_id' => 2,
                'schedule' => '2023-04-10 00:00:00',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 2,
                'rivals_id' => 1,
                'schedule' => '2023-04-10 00:00:00',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 3,
                'rivals_id' => 4,
                'schedule' => '2023-04-10 00:00:00',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 4,
                'rivals_id' => 3,
                'schedule' => '2023-04-10 00:00:00',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 5,
                'rivals_id' => 1,
                'schedule' => '2023-04-10 00:00:00',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 5,
                'rivals_id' => 3,
                'schedule' => '2023-04-10 00:00:00',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
        ];

        Matches::insert($matches);
    }
}