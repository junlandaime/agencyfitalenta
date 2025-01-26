<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdukLayanan;
use App\Models\ProdukCategory;
use App\Models\Produk;

class ProdukLayananSeeder extends Seeder
{
    public function run()
    {
        // Create Categories
        $categories = [
            [
                'name' => 'Marketing Digital',
                'slug' => 'marketing-digital',
                'description' => 'Layanan pemasaran digital untuk bisnis Anda',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Konsultasi Bisnis',
                'slug' => 'konsultasi-bisnis',
                'description' => 'Layanan konsultasi untuk pengembangan bisnis',
                'is_active' => true,
                'order' => 2
            ]
        ];

        foreach ($categories as $category) {
            ProdukCategory::create($category);
        }

        // Create Layanan
        $layanans = [
            [
                'nama_produk' => 'Paket Digital Marketing',
                'hero_title' => 'Tingkatkan Bisnis Anda dengan Digital Marketing',
                'hero_subtitle' => 'Solusi lengkap untuk pemasaran digital',
                'slug' => 'paket-digital-marketing',
                'deskripsi' => 'Paket lengkap untuk kebutuhan digital marketing bisnis Anda',
                'deskripsi_lengkap' => 'Dapatkan layanan digital marketing terlengkap untuk mengembangkan bisnis Anda',
                'materi' => json_encode(['Social Media Management', 'Content Creation', 'SEO']),
                'manfaat' => json_encode(['Peningkatan Brand Awareness', 'Leads Generation', 'Sales Conversion']),
                'persyaratan' => json_encode(['Memiliki Bisnis', 'KTP', 'NPWP']),
                'status' => 'aktif'
            ],
            [
                'nama_produk' => 'Konsultasi Bisnis Premium',
                'hero_title' => 'Konsultasi Bisnis Bersama Expert',
                'hero_subtitle' => 'Dapatkan insight bisnis dari para ahli',
                'slug' => 'konsultasi-bisnis-premium',
                'deskripsi' => 'Konsultasi bisnis premium dengan expert berpengalaman',
                'deskripsi_lengkap' => 'Konsultasi mendalam dengan expert bisnis untuk mengembangkan bisnis Anda',
                'materi' => json_encode(['Business Model Canvas', 'Financial Planning', 'Marketing Strategy']),
                'manfaat' => json_encode(['Business Growth', 'Risk Management', 'Strategic Planning']),
                'persyaratan' => json_encode(['Laporan Keuangan', 'Business Plan', 'Company Profile']),
                'status' => 'aktif'
            ]
        ];

        foreach ($layanans as $layanan) {
            $produkLayanan = ProdukLayanan::create($layanan);
            
            // Create related products
            Produk::create([
                'produk_layanan_id' => $produkLayanan->id,
                'produk_category_id' => ProdukCategory::where('slug', 'marketing-digital')->first()->id,
                'nama_produk' => $layanan['nama_produk'] . ' - Basic',
                'status' => 'aktif',
                'fitur' => json_encode(['Feature 1', 'Feature 2', 'Feature 3']),
                'keunggulan' => json_encode(['Benefit 1', 'Benefit 2', 'Benefit 3'])
            ]);
        }
    }
}
