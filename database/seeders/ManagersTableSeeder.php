<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $managers = [
            [
                'clubs_id' => 1,
                'photo' => 'https://www.footballdatabase.eu/images/photos/players/2020-2021/a_2/2345.jpg',
                'name' => 'Carlo Ancelotti',
                'old' => 63,
                'nationality' => 'Italy',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://www.footballdatabase.eu/images/photos/players/a_35/35818.jpg',
                'name' => 'Erik ten Hag',
                'old' => 53,
                'nationality' => 'Netherland',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://www.footballdatabase.eu/images/photos/players/2020-2021/a_2/2373.jpg',
                'name' => 'Pep Guardiola',
                'old' => 52,
                'nationality' => 'Spain',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 4,
                'photo' => 'https://www.footballdatabase.eu/images/photos/players/a_17/17683.jpg',
                'name' => 'Massimiliano Allegri',
                'old' => 55,
                'nationality' => 'Italy',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 5,
                'photo' => 'https://www.footballdatabase.eu/images/photos/players/a_0/394.jpg',
                'name' => 'Xavi Hernandez',
                'old' => 43,
                'nationality' => 'Spain',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
        ];

        Managers::insert($managers);
    }
}