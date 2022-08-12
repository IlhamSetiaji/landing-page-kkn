<?php

namespace Database\Seeders;

use App\Models\ThirdLineTeam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThirdLineTeamSeeder extends Seeder
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
                'name' => 'Musyaffa Fajar Pratama',
                'job' => 'Divisi Logistik',
                'desc' => '"It’s better to be a lion for a day than a sheep all your life."',
                'image' => 'assets/img/teams/musyaffa.HEIC.png',
            ],
            [
                'name' => 'Dhiana Mayangshinta',
                'job' => 'Divisi Logistik',
                'desc' => '"Life is a journey to be experienced, not a problem to be solved."',
                'image' => 'assets/img/teams/diana.HEIC.png',
            ],
            [
                'name' => 'Ghifary Achmad Azhar',
                'job' => 'Divisi Logistik',
                'desc' => '"If you are brave enough to say goodbye, life will reward you with a new hello."',
                'image' => 'assets/img/teams/ghifary.HEIC.png',
            ],
        ])->each(function ($third) {
            ThirdLineTeam::create($third);
        });
    }
}
