<?php

namespace Database\Seeders;

use App\Models\LeaderTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaderTeamSeeder extends Seeder
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
                'name' => 'Rella Desinta Kustri',
                'job' => 'Koordinator Desa',
                'desc' => '"Don’t gain the world and lose your soul, wisdom is better than silver or gold."',
                'image' => 'assets/img/teams/rella.HEIC.png',
            ],
        ])->each(function ($leader) {
            LeaderTeam::create($leader);
        });
    }
}
