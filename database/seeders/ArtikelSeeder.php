<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
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
                'title' => 'Potensi Darungan',
                'description' => 'Menelisik Lebih Dalam Potensi Besar Desa Darungan, Kecamatan Yosowilangun,
                Kabupaten Lumajang.',
                'date' => Carbon::now(),
                'image' => 'assets/img/sawah1.jpg',
            ],
        ])->each(function($artikel){
            for($i=0 ; $i<6 ; $i++)
            {
                Article::create($artikel);
            }
        });
    }
}
