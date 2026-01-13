<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Amenity::truncate();

        Amenity::factory()
            ->count(20)
            ->state(new Sequence(
                ['code' => '01', 'abbreviation' => 'WIFI', 'description' => 'Wi-Fi Percuma'],
                ['code' => '02', 'abbreviation' => 'AC', 'description' => 'Penghawa Dingin'],
                ['code' => '03', 'abbreviation' => 'POOL', 'description' => 'Kolam Renang'],
                ['code' => '04', 'abbreviation' => 'GYM', 'description' => 'Gimnasium'],
                ['code' => '05', 'abbreviation' => 'PARK', 'description' => 'Tempat Letak Kereta'],
                ['code' => '06', 'abbreviation' => 'SPA', 'description' => 'Pusat Spa'],
                ['code' => '07', 'abbreviation' => 'REST', 'description' => 'Restoran'],
                ['code' => '08', 'abbreviation' => 'BAR', 'description' => 'Bar Mini'],
                ['code' => '09', 'abbreviation' => 'TV', 'description' => 'Televisyen Pintar'],
                ['code' => '10', 'abbreviation' => 'MEET', 'description' => 'Bilik Mesyuarat'],
                ['code' => '11', 'abbreviation' => 'LAUN', 'description' => 'Dobi Layan Diri'],
                ['code' => '12', 'abbreviation' => 'SEC', 'description' => 'Kawalan Keselamatan 24 Jam'],
                ['code' => '13', 'abbreviation' => 'PLAY', 'description' => 'Taman Permainan Kanak-kanak'],
                ['code' => '14', 'abbreviation' => 'LIFT', 'description' => 'Lif Penumpang'],
                ['code' => '15', 'abbreviation' => 'BBQ', 'description' => 'Tempat BBQ'],
                ['code' => '16', 'abbreviation' => 'SUR', 'description' => 'Surau'],
                ['code' => '17', 'abbreviation' => 'LIB', 'description' => 'Perpustakaan Mini'],
                ['code' => '18', 'abbreviation' => 'SHUT', 'description' => 'Perkhidmatan Shuttle'],
                ['code' => '19', 'abbreviation' => 'VIEW', 'description' => 'Pemandangan Laut'],
                ['code' => '20', 'abbreviation' => 'BALC', 'description' => 'Balkoni Peribadi'],
            ))
            ->create();
    }
}
