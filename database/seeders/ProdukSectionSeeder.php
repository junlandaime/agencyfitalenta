<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\ProdukSection;
use Illuminate\Database\Seeder;

class ProdukSectionSeeder extends Seeder
{
    public function run()
    {
        $produk = Produk::first();

        if ($produk) {
            $sections = [
                [
                    'title' => 'Deskripsi Produk',
                    'content' => 'Deskripsi lengkap tentang produk ini dan manfaatnya bagi pengguna.',
                    'order' => 1,
                    'is_active' => true
                ],
                [
                    'title' => 'Spesifikasi',
                    'content' => 'Detail spesifikasi dan fitur-fitur yang tersedia dalam produk.',
                    'order' => 2,
                    'is_active' => true
                ],
                [
                    'title' => 'Cara Penggunaan',
                    'content' => 'Panduan lengkap cara menggunakan produk dengan efektif.',
                    'order' => 3,
                    'is_active' => true
                ],
                [
                    'title' => 'Keuntungan',
                    'content' => 'Berbagai keuntungan dan manfaat yang akan Anda dapatkan.',
                    'order' => 4,
                    'is_active' => true
                ],
                [
                    'title' => 'Testimoni',
                    'content' => 'Apa kata pengguna tentang produk ini.',
                    'order' => 5,
                    'is_active' => true
                ]
            ];

            foreach ($sections as $section) {
                $produk->sections()->create($section);
            }
        }
    }
}
