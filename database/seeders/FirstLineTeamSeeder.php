<?php

namespace Database\Seeders;

use App\Models\FirstLineTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstLineTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Siti Murdiyati Mukarromah',
                'job' => 'Sekretaris',
                'desc' => '"Everything has beauty, but not everyone sees it."',
                'image' => 'assets/img/teams/siti_second.HEIC.png',
            ],
            [
                'name' => 'Hamid Baidhowi Warda',
                'job' => 'Wakil Koordinator Desa',
                'desc' => '"Life is what happens when you’re busy making other plans."',
                'image' => 'assets/img/teams/hamid.HEIC.png',
            ],
            [
                'name' => 'Siti Lailatul Mufidah',
                'job' => 'Bendahara',
                'desc' => '"Life is short, and truth works far and lives long: let us then speak the truth."',
                'image' => 'assets/img/teams/muffidah.HEIC.png',
            ],
        ])->each(function ($first) {
            FirstLineTeam::create($first);
        });
    }
}
