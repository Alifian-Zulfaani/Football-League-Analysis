<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stadiums = [
             [
                 'name' => 'Santiago Bernabéu Stadium',
                 'photo' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/19/44/3b/tour-bernabeu.jpg?w=1200&h=-1&s=1',
                 'capacity' => 81044,
                 'address' => 'Av. de Concha Espina, 1, 28036 Madrid, Spanyol',
                 'created_at' => '2023-03-06 00:00:00',
                 'updated_at' => '2023-03-06 00:00:00',
             ],
             [
                 'name' => 'Old Trafford',
                 'photo' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/8f/69/90/stadium-with-75-000-people.jpg?w=1200&h=-1&s=1',
                 'capacity' => 74310,
                 'address' => 'Sir Matt Busby Way, Old Trafford, Stretford, Manchester M16 0RA, Inggris Raya',
                 'created_at' => '2023-03-06 00:00:00',
                 'updated_at' => '2023-03-06 00:00:00',
             ],
             [
                 'name' => 'Etihad Stadium',
                 'photo' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/d5/4a/02/fb-img-1472486295335.jpg?w=1100&h=-1&s=1',
                 'capacity' => 53400,
                 'address' => 'Ashton New Rd, Manchester M11 3FF, Inggris Raya',
                 'created_at' => '2023-03-06 00:00:00',
                 'updated_at' => '2023-03-06 00:00:00',
             ],
             [
                 'name' => 'Allianz Arena',
                 'photo' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/b5/f3/6b/allianz-arena.jpg?w=1200&h=-1&s=1',
                 'capacity' => 41507,
                 'address' => 'Corso Gaetano Scirea, 50, 10151 Torino TO, Italia',
                 'created_at' => '2023-03-06 00:00:00',
                 'updated_at' => '2023-03-06 00:00:00',
             ],
             [
                 'name' => 'Camp Nou',
                 'photo' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/2d/9c/a1/camp-nou.jpg?w=1200&h=-1&s=1',
                 'capacity' => 99354,
                 'address' => 'C.d Arístides Maillol, 12, 08028 Barcelona, Spanyol',
                 'created_at' => '2023-03-06 00:00:00',
                 'updated_at' => '2023-03-06 00:00:00',
             ],
         ];

        Stadiums::insert($stadiums);
    }
}