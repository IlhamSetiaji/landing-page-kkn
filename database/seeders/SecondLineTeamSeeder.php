<?php

namespace Database\Seeders;

use App\Models\SecondLineTeam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SecondLineTeamSeeder extends Seeder
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
                'name' => 'Fadhlissyafiq AB',
                'job' => 'Media dan Informasi',
                'desc' => '"Believe that life is worth living and your belief will help create the fact."',
                'image' => 'assets/img/teams/sapeg.HEIC.png',
            ],
            [
                'name' => 'Delsa Alfannia',
                'job' => 'Media dan Informasi',
                'desc' => '"Life must be lived and curiosity kept alive. One must never, for whatever reason, turn its back on life."',
                'image' => 'assets/img/teams/delsa.HEIC.png',
            ],
            [
                'name' => 'Abdullah Faza Al Fafa',
                'job' => 'Media dan Informasi',
                'desc' => '"Change your thoughts and you change your world."',
                'image' => 'assets/img/teams/abdullah.HEIC.png',
            ],
        ])->each(function ($second) {
            SecondLineTeam::create($second);
        });
    }
}
