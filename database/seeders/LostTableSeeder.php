<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Losts;

class LostTableSeeder extends Seeder
{
    public function run(): void
    {
        $losts = [
            [
                'name' => 'Siti Bilqis',
                'photo' => 'https://jateng.disway.id/upload/873454143f10e311bffd62213706ce0b.jpg',
                'items' => 'Laptop',
                'date_lost' => Carbon::now(),
                'description' => 'Laptop berwarna silver',
                'category' => 'Elektronik',
                'brand' => 'Asus',
                'lost_place' => 'Gedung GKU',
                'detail_loc' => 'Sekitar lobi gedung GKU',

            ],
            [
                'name' => 'Nimas Ayu',
                'photo' => 'https://www.blibli.com/friends-backend/wp-content/uploads/2022/07/Apa-Saja-Sih-Tipe-Jam-Tangan-Casio.jpg',
                'items' => 'Jam tangan',
                'date_lost' => Carbon::now(),
                'description' => 'Dengan strap kulit berwarna coklat',
                'category' => 'Barang pribadi',
                'brand' => 'Casio',
                'lost_place' => 'Mushola Gedung FIT lantai 2',
                'detail_loc' => 'Di tempat wudhu',

            ],
            [
                'name' => 'Ayu',
                'photo' => 'https://ae01.alicdn.com/kf/S7ce1785244cc4ed1a8e17b6adf45c439j.jpg?width=800&height=800&hash=1600',
                'items' => 'Handphone',
                'date_lost' => Carbon::now(),
                'description' => 'Dengan casing berwarna biru',
                'category' => 'Barang pribadi',
                'brand' => 'Iphone',
                'lost_place' => 'Open Library',
                'detail_loc' => 'Area library cafe',

            ],
        ];
        Losts::truncate();
        Losts::insert($losts);
    }
}
