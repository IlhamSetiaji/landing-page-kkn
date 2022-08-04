<?php

namespace Database\Seeders;

use App\Models\ProfileContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileContentSeeder extends Seeder
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
                'title' => 'PROFIL',
                'desc' => 'Darungan adalah desa yang berada di kecamatan Yosowilangun, Kabupaten Lumajang, Jawa Timur, Indonesia. Pada tahun 2010, desa ini berpenduduk 3.993 jiwa.',
                'image' => 'assets/img/tugu.png',
                'video' => 'https://www.youtube.com/embed/qqvP3yZJVi8',
            ],
        ])->each(function($contents){
            ProfileContent::create($contents);
        });
    }
}
