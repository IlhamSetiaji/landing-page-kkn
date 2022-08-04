<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Delsa Alfannia',
                'email' => 'delsaalfannia@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ilham Setiaji',
                'email' => 'ilham.ahmadz18@gmail.com',
                'password' => Hash::make('password'),
            ],
        ])->each(function($users){
            $user = User::create($users);
            $user->assignRole('admin');
        });
    }
}
