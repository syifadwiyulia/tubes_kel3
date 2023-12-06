<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Founds;


class FoundTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $founds = [
            [
                'name' => 'Jonathan',
                'photo' => 'https://s3.ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2020/03/09065942/Kunci-Motor-Hilang-Simak-5-Hal-yang-Mesti-Dilakukan.-saibumi.jpg',
                'items' => 'Kunci Motor',
                'date_found' => Carbon::now(),
                'description' => 'Kunci motor honda vario',
                'category' => 'Barang Pribadi',
                'brand' => 'Honda',
                'where_found' => 'Parkiran GKU',
                'detail_loc' => 'Dekat pos satpam',
            ],
            [
                'name' => 'Rizki',
                'photo' => 'https://awsimages.detik.net.id/community/media/visual/2020/11/10/iphone-12-2_169.jpeg?w=1200',
                'items' => 'Handphone',
                'date_found' => Carbon::now(),
                'description' => 'Iphone 12 warna putih tanpa case',
                'category' => 'Elektronik',
                'brand' => 'Iphone',
                'where_found' => 'Gedung FIT',
                'detail_loc' => 'kamar mandi pria lantai 1',
            ],
        ];
        Founds::truncate();
        Founds::insert($founds);
    }
}
