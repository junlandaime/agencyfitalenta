<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdukLayanan;
use App\Models\ProdukLayananSection;

class ProdukLayananSectionSeeder extends Seeder
{
    public function run()
    {
        $layanan = ProdukLayanan::first();

        if ($layanan) {
            $sections = [
                [
                    'title' => 'Pembiayaan',
                    'content' => 'Selamat datang di layanan kami. Bagian ini akan menjelaskan tentang overview dari layanan yang kami tawarkan.',
                    'order' => 1,
                    'is_active' => true
                ],
                [
                    'title' => 'Pendanaan',
                    'content' => 'Berikut adalah fitur-fitur utama yang akan Anda dapatkan dalam layanan ini.',
                    'order' => 2,
                    'is_active' => true
                ],
                [
                    'title' => 'Asuransi',
                    'content' => 'Pelajari bagaimana layanan kami bekerja dan bagaimana Anda bisa memaksimalkan manfaatnya.',
                    'order' => 3,
                    'is_active' => true
                ],
                [
                    'title' => 'Filantropi',
                    'content' => 'Dengarkan langsung dari pelanggan kami yang telah merasakan manfaat dari layanan ini.',
                    'order' => 4,
                    'is_active' => true
                ],

            ];

            foreach ($sections as $section) {
                $layanan->sections()->create($section);
            }
        }
    }
}
