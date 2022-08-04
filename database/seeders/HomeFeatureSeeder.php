<?php

namespace Database\Seeders;

use App\Models\HomeFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeFeatureSeeder extends Seeder
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
                'jiwa' => 3993,
                'luas' => 5.88,
                'pos' => '67382',
            ],
        ])->each(function($features){
            HomeFeature::create($features);
        });
    }
}
