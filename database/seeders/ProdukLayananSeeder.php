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
        // $categories = [
        //     [
        //         'name' => 'Marketing Digital',
        //         'slug' => 'marketing-digital',
        //         'description' => 'Layanan pemasaran digital untuk bisnis Anda',
        //         'is_active' => true,
        //         'order' => 1
        //     ],
        //     [
        //         'name' => 'Konsultasi Bisnis',
        //         'slug' => 'konsultasi-bisnis',
        //         'description' => 'Layanan konsultasi untuk pengembangan bisnis',
        //         'is_active' => true,
        //         'order' => 2
        //     ]
        // ];

        // foreach ($categories as $category) {
        //     ProdukCategory::create($category);
        // }

        // Create Layanan
        $layanans = [
            [
                'nama_produk' => 'Pembiayaan',
                'hero_title' => 'Solusi Pembiayaan Syariah untuk Pengembangan Bisnis',
                'hero_subtitle' => 'Pendanaan Cepat dan Mudah untuk UMKM',
                'slug' => 'pembiayaan-modal-usaha',
                'deskripsi' => 'Pembiayaan syariah untuk mendukung pertumbuhan dan ekspansi bisnis Anda',
                'deskripsi_lengkap' => 'Dapatkan bantuan modal dengan skema syariah yang transparan dan adil untuk berbagai jenis usaha',
                'materi' => ['Pembiayaan Modal Kerja', 'Investasi Aset', 'Modal Ekspansi'],
                'manfaat' => ['Perluasan Usaha', 'Tambahan Modal Kerja', 'Pengembangan Bisnis'],
                'persyaratan' => ['Memiliki Usaha Minimal 1 Tahun', 'Legalitas Usaha', 'Dokumen Keuangan'],
                'status' => 'aktif'
            ],
            [
                'nama_produk' => 'Pendanaan',
                'hero_title' => 'Solusi Pendanaan untuk Inovasi Bisnis',
                'hero_subtitle' => 'Pendanaan Komprehensif untuk Startup Inovatif',
                'slug' => 'pendanaan-startup',
                'deskripsi' => 'Dukungan pendanaan bagi startup dengan potensi pengembangan tinggi',
                'deskripsi_lengkap' => 'Program pendanaan khusus untuk startup dengan model bisnis yang berkelanjutan dan inovatif',
                'materi' => ['Pendanaan Awal', 'Pendanaan Lanjutan', 'Pendampingan Bisnis'],
                'manfaat' => ['Akselerasi Pertumbuhan', 'Pengembangan Produk', 'Jaringan Investor'],
                'persyaratan' => ['Pitch Deck', 'Prototype Produk', 'Tim Inti Startup'],
                'status' => 'aktif'
            ],
            [
                'nama_produk' => 'Asuransi',
                'hero_title' => 'Perlindungan Menyeluruh untuk Ketenangan Anda',
                'hero_subtitle' => 'Asuransi Syariah dengan Manfaat Komprehensif',
                'slug' => 'asuransi-comprehensive',
                'deskripsi' => 'Perlindungan menyeluruh untuk berbagai aspek kehidupan dan usaha',
                'deskripsi_lengkap' => 'Paket asuransi syariah yang melindungi Anda dari berbagai risiko dengan premi terjangkau',
                'materi' => ['Asuransi Jiwa', 'Asuransi Kesehatan', 'Asuransi Properti'],
                'manfaat' => ['Perlindungan Keluarga', 'Jaminan Kesehatan', 'Keamanan Aset'],
                'persyaratan' => ['KTP', 'Kartu Keluarga', 'Bukti Penghasilan'],
                'status' => 'aktif'
            ],
            [
                'nama_produk' => 'Platform Filantropi',
                'hero_title' => 'Salurkan Kebaikan, Wujudkan Kebermanfaatan',
                'hero_subtitle' => 'Platform Filantropi Modern untuk Pemberdayaan Masyarakat',
                'slug' => 'wakaf-sedekah',
                'deskripsi' => 'Platform untuk menyalurkan dana wakaf dan sedekah secara transparan dan tepat sasaran',
                'deskripsi_lengkap' => 'Membantu Anda menyalurkan bantuan untuk berbagai program sosial dan pemberdayaan masyarakat',
                'materi' => ['Wakaf Produktif', 'Sedekah Jariyah', 'Bantuan Sosial'],
                'manfaat' => ['Pemberdayaan Masyarakat', 'Edukasi', 'Kesejahteraan Sosial'],
                'persyaratan' => ['Identitas Pribadi', 'Niat Baik', 'Kemampuan Donasi'],
                'status' => 'aktif'
            ],
        ];

        foreach ($layanans as $layanan) {
            // $produkLayanan = 
            ProdukLayanan::create($layanan);

            // Create related products
            // Produk::create([
            //     'produk_layanan_id' => $produkLayanan->id,
            //     'produk_category_id' => ProdukCategory::where('slug', 'marketing-digital')->first()->id,
            //     'nama_produk' => $layanan['nama_produk'] . ' - Basic',
            //     'status' => 'aktif',
            //     'fitur' => ['Feature 1', 'Feature 2', 'Feature 3'],
            //     'keunggulan' => ['Benefit 1', 'Benefit 2', 'Benefit 3'])
            // ]);
        }
    }
}
