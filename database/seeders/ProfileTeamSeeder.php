<?php

namespace Database\Seeders;

use App\Models\ProfileTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileTeamSeeder extends Seeder
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
                'name' => 'Walter White',
                'job' => 'Web Development',
                'desc' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                quaerat qui aut aut aut',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-1.jpg',
            ],
            [
                'name' => 'Sarah Jhinson',
                'job' => 'Marketing',
                'desc' => 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                rerum temporibus',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-2.jpg',
            ],
            [
                'name' => 'William Anderson',
                'job' => 'Content',
                'desc' => 'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                toro des clara',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-3.jpg',
            ],
            [
                'name' => 'Walter White',
                'job' => 'Web Development',
                'desc' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                quaerat qui aut aut aut',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-1.jpg',
            ],
            [
                'name' => 'Sarah Jhinson',
                'job' => 'Marketing',
                'desc' => 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                rerum temporibus',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-2.jpg',
            ],
            [
                'name' => 'William Anderson',
                'job' => 'Content',
                'desc' => 'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                toro des clara',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-3.jpg',
            ],
            [
                'name' => 'Walter White',
                'job' => 'Web Development',
                'desc' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                quaerat qui aut aut aut',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-1.jpg',
            ],
            [
                'name' => 'Sarah Jhinson',
                'job' => 'Marketing',
                'desc' => 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                rerum temporibus',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-2.jpg',
            ],
            [
                'name' => 'William Anderson',
                'job' => 'Content',
                'desc' => 'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                toro des clara',
                'twitter' => 'https://www.twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'image' => 'assets/img/team/team-3.jpg',
            ],
        ])->each(function($teams){
            ProfileTeam::create($teams);
        });
    }
}
