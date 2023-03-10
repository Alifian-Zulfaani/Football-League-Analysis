<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                'clubs_id' => 1,
                'photo' => 'https://assets.laliga.com/squad/2022/t186/p19927/256x278/p19927_t186_2022_1_001_000.png',
                'name' => 'Karim Benzema',
                'height' => '185',
                'position' => 'Center Forward',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p176297.png',
                'name' => 'Marcus Rashford',
                'height' => '180',
                'position' => 'Left Wing Forward',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p103025.png',
                'name' => 'Riyad Mahrez',
                'height' => '179',
                'position' => 'Right Wing Forward',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 4,
                'photo' => 'https://img.a.transfermarkt.technology/portrait/big/122153-1582114937.jpg?lm=1',
                'name' => 'Paul Pogba',
                'height' => '191',
                'position' => 'Left Mid Fielder',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 5,
                'photo' => 'https://assets.laliga.com/squad/2022/t178/p54104/256x278/p54104_t178_2022_1_001_000.png',
                'name' => 'Sergio Busquets',
                'height' => '189',
                'position' => 'Deffensive Mid Fielder',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 1,
                'photo' => 'https://assets.laliga.com/squad/2022/t186/p37055/256x278/p37055_t186_2022_1_001_000.png',
                'name' => 'Luka Modrić',
                'height' => '172',
                'position' => 'Center Mid Fielder',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p221820.png',
                'name' => 'Lisandro Martínez',
                'height' => '175',
                'position' => 'Left Back',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p171314.png',
                'name' => 'Rúben Dias',
                'height' => '186',
                'position' => 'Center Back',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 4,
                'photo' => 'https://img.a.transfermarkt.technology/portrait/big/39983-1661268218.jpg?lm=1',
                'name' => 'Leonardo Bonucci',
                'height' => '190',
                'position' => 'Center Back',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 5,
                'photo' => 'https://assets.laliga.com/squad/2022/t178/p445087/256x278/p445087_t178_2022_1_001_000.png',
                'name' => 'Ronald Araújo',
                'height' => '188',
                'position' => 'Right Back',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'clubs_id' => 1,
                'photo' => 'https://assets.laliga.com/squad/2022/t186/p60772/256x278/p60772_t186_2022_1_001_000.png',
                'name' => 'Thibaut Courtois',
                'height' => '200',
                'position' => 'Goal Keeper',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
        ];

        Players::insert($players);
    }
}