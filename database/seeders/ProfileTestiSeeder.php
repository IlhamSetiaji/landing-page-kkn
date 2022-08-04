<?php

namespace Database\Seeders;

use App\Models\ProfileTesti;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileTestiSeeder extends Seeder
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
                'name' => 'Saul Goodman',
                'job' => 'Ceo - Founder',
                'desc' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                risus at semper.',
                'star' => 5,
                'image' => 'assets/img/testimonials/testimonials-1.jpg',
            ],
            [
                'name' => 'Sara Wilsson',
                'job' => 'Designer',
                'desc' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                legam anim culpa.',
                'star' => 4,
                'image' => 'assets/img/testimonials/testimonials-2.jpg',
            ],
            [
                'name' => 'Jena Karlis',
                'job' => 'Store Owner',
                'desc' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
                'star' => 3,
                'image' => 'assets/img/testimonials/testimonials-3.jpg',
            ],
            [
                'name' => 'Matt Brandon',
                'job' => 'Freelancer',
                'desc' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                labore illum veniam.',
                'star' => 2,
                'image' => 'assets/img/testimonials/testimonials-4.jpg',
            ],
            [
                'name' => 'John Larson',
                'job' => 'Entrepreneur',
                'desc' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                culpa fore nisi cillum quid.',
                'star' => 1,
                'image' => 'assets/img/testimonials/testimonials-5.jpg',
            ],
        ])->each(function($testi){
            ProfileTesti::create($testi);
        });
    }
}
