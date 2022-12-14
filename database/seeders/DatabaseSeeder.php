<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            HomeHeroSeeder::class,
            HomeFeatureSeeder::class,
            ProfileContentSeeder::class,
            ProfileTeamSeeder::class,
            ProfileTestiSeeder::class,
            PotensiContentSeeder::class,
            ArtikelSeeder::class,
            LeaderTeamSeeder::class,
            FirstLineTeamSeeder::class,
            SecondLineTeamSeeder::class,
            ThirdLineTeamSeeder::class,
            GallerySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
