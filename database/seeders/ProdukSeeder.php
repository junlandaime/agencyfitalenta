<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\ProdukCategory;
use App\Models\ProdukLayanan;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $layanan = ProdukLayanan::first();
        $category = ProdukCategory::first();

        if ($layanan && $category) {
            $products = [
                [
                    'nama_produk' => 'Paket Basic',
                    'external_link' => 'https://example.com/basic',
                    'status' => 'aktif',
                    'fitur' => [
                        'Akses ke materi dasar',
                        'Konsultasi via email',
                        'Sertifikat digital'
                    ],
                    'keunggulan' => [
                        'Harga terjangkau',
                        'Materi lengkap',
                        'Belajar mandiri'
                    ],
                    'catatan_produk' => 'Cocok untuk pemula yang ingin memulai bisnis'
                ],
                [
                    'nama_produk' => 'Paket Premium',
                    'external_link' => 'https://example.com/premium',
                    'status' => 'aktif',
                    'fitur' => [
                        'Akses ke semua materi',
                        'Konsultasi 24/7',
                        'Sertifikat fisik',
                        'Pendampingan bisnis'
                    ],
                    'keunggulan' => [
                        'Prioritas support',
                        'Materi eksklusif',
                        'Networking session',
                        'Money back guarantee'
                    ],
                    'catatan_produk' => 'Untuk yang serius mengembangkan bisnis'
                ],
                [
                    'nama_produk' => 'Paket Enterprise',
                    'external_link' => 'https://example.com/enterprise',
                    'status' => 'draft',
                    'fitur' => [
                        'Solusi kustom',
                        'Dedicated account manager',
                        'Training on-site',
                        'API access'
                    ],
                    'keunggulan' => [
                        'Fully customizable',
                        'Priority support',
                        'SLA guarantee',
                        'Regular business review'
                    ],
                    'catatan_produk' => 'Solusi lengkap untuk perusahaan'
                ]
            ];

            foreach ($products as $product) {
                Produk::create(array_merge($product, [
                    'produk_layanan_id' => $layanan->id,
                    'produk_category_id' => $category->id
                ]));
            }
        }
    }
}
