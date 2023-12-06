<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonials;
class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $testimonials= [
            [
                'name' => 'Putra',
                'comment' => 'Desain bagus dan fungsional, Sesuaikan karakter desain web dengan brand. Pastikan desain tersebut bukan cuma kelihatan bagus tapi juga fungsional alias berguna',
            ],
            [
                'name' => 'Candra',
                'comment' => 'Mudah digunakan, Pastikan pengunjung tidak kebingungan ketika mencari dan menggunakan fitur website. Misal, menu, halaman tertentu, kolom kontak, dll.',
            ],
            [
                'name' => 'Aryo',
                'comment' => 'Mobile-friendly, Pengunjung website terbanyak datang lewat smartphone. Jadi, pastikan website punya tampilan yang bagus ketika diakses dari smartphone dan tablet.',
            ],
        ];
        Testimonials::truncate();
        Testimonials::insert($testimonials); 
    }

}
