<?php

namespace Database\Seeders;

use App\Models\HomeHero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeHeroSeeder extends Seeder
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
                'krajan' => '1781',
                'rekesan' => '1973',
                'igir' => '572',
            ],
        ])->each(function($heros){
            HomeHero::create($heros);
        });
    }
}
