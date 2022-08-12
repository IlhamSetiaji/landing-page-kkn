<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function GuzzleHttp\Promise\each;

class GallerySeeder extends Seeder
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
                'image' => 'assets/img/balai_desa.png',
            ],
            [
                'image' => 'assets/img/farmroad.png',
            ],
            [
                'image' => 'assets/img/masjid.png',
            ],
            [
                'image' => 'assets/img/sawah1.jpg',
            ],
            [
                'image' => 'assets/img/sekolah.png',
            ],
            [
                'image' => 'assets/img/perempatan.png',
            ],
            [
                'image' => 'assets/img/tugu.png',
            ],
            [
                'image' => 'assets/img/profil.png',
            ],
            [
                'image' => 'assets/img/IMG_1088.png',
            ],
            [
                'image' => 'assets/img/IMG_1091.png',
            ],
            [
                'image' => 'assets/img/IMG_1104.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1108.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1115.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1119.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1125.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1139.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1143.HEIC.png',
            ],
            [
                'image' => 'assets/img/IMG_1142.HEIC.png',
            ],
        ])->each(function ($galeri) {
            Gallery::create($galeri);
        });
    }
}
