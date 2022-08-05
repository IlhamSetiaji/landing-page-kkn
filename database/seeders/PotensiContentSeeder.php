<?php

namespace Database\Seeders;

use App\Models\PotensiContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PotensiContentSeeder extends Seeder
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
                'title' => 'Ketan',
                'desc' => 'Salah satu potensi terbesar yang ada di Desa Darungan, Kecamatan Yosowilangun, Kabupatan Lumajang
                ialah Beras Ketan yang mana Desa Darungan menjadi salah satu produsen beras ketan terbesar
                se-Jawa Timur karena hasil produksinya yang sangat melimpah yaitu sebanyak 4.092 Ton/Ha.',
                'image' => 'assets/img/ketanputih.jpg'
            ],
            [
                'title' => 'Peternakan',
                'desc' => 'Mayoritas di tiap rumah Desa Darungan mempunyai peliharaan hewan ternak, seperti Sapi dan
                Kambing.',
                'image' => 'assets/img/sapi.jpg'
            ],
            [
                'title' => 'UMKM',
                'desc' => 'Banyak penduduk di Desa Darungan mempunyai Usaha Kecil Mikro Menengah (UMKM), yang mana sebagian
                penduduk sudah mempunyai jiwa keinginan untuk menjadi pengusaha',
                'image' => 'assets/img/umkm.jpg'
            ],
        ])->each(function($contents){
            PotensiContent::create($contents);
        });
    }
}
