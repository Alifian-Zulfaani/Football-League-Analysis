<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = [
            [
                'stadiums_id' => '1',
                'name' => 'Real Madrid FC',
                'logo' => 'https://content.sportslogos.net/logos/130/4017/full/643_-real_madrid-primary-.gif',
                'url' => 'https://www.realmadrid.com',
                'thropy' => '14',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'stadiums_id' => '2',
                'name' => 'Manchester United FC',
                'logo' => 'https://sportslogohistory.com/wp-content/uploads/2020/04/manchester_united_fc_1998-pres.png',
                'url' => 'https://www.manutd.com',
                'thropy' => '6',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'stadiums_id' => '3',
                'name' => 'Manchester City FC',
                'logo' => 'https://sportslogohistory.com/wp-content/uploads/2020/04/manchester_city_fc_2016-pres.png',
                'url' => 'https://id.mancity.com',
                'thropy' => '1',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'stadiums_id' => '4',
                'name' => 'Juventus FC',
                'logo' => 'https://1000logos.net/wp-content/uploads/2021/05/Juventus-logo.png',
                'url' => 'https://www.juventus.com',
                'thropy' => '4',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
            [
                'stadiums_id' => '5',
                'name' => 'Barcelona FC',
                'logo' => 'https://content.sportslogos.net/logos/130/4016/full/954_-fc_barcelona-primary-.gif',
                'url' => 'https://www.fcbarcelona.com',
                'thropy' => '5',
                'created_at' => '2023-03-06 00:00:00',
                'updated_at' => '2023-03-06 00:00:00',
            ],
        ];

        Clubs::insert($clubs);
    }
}