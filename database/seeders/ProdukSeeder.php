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
        // $layanan = ProdukLayanan::first();
        // $category = ProdukCategory::first();

        // if ($layanan && $category) {
        $products = [
            [
                'nama_produk' => 'Pembiayaan Motor',
                'external_link' => 'https://example.com/motor',
                'produk_layanan_id' => 1,
                'produk_category_id' => 1,
                'status' => 'aktif',
                'fitur' => [
                    'Proses cepat dan mudah',
                    'Cicilan ringan',
                    'Pilihan motor berbagai merek'
                ],
                'keunggulan' => [
                    'Syarat mudah',
                    'Angsuran terjangkau',
                    'Proses tanpa ribet'
                ],
                'catatan_produk' => 'Solusi pembiayaan motor dengan syariah'
            ],
            [
                'nama_produk' => 'Pembiayaan Mobil',
                'external_link' => 'https://example.com/mobil',
                'produk_layanan_id' => 1,
                'produk_category_id' => 1,
                'status' => 'aktif',
                'fitur' => [
                    'Dp ringan',
                    'Tenor panjang',
                    'Pilihan mobil baru dan bekas'
                ],
                'keunggulan' => [
                    'Margin kompetitif',
                    'Proses cepat',
                    'Fleksibel'
                ],
                'catatan_produk' => 'Pembiayaan mobil syariah dengan kemudahan'
            ],
            [
                'nama_produk' => 'Pembiayaan Project',
                'external_link' => 'https://example.com/project',
                'produk_layanan_id' => 1,
                'produk_category_id' => 2,
                'status' => 'aktif',
                'fitur' => [
                    'Pendanaan hingga 100%',
                    'Pendampingan bisnis',
                    'Struktur pembiayaan fleksibel'
                ],
                'keunggulan' => [
                    'Penilaian komprehensif',
                    'Pendanaan berkelanjutan',
                    'Minim risiko'
                ],
                'catatan_produk' => 'Solusi pendanaan project dengan skema syariah'
            ],
            [
                'nama_produk' => 'Pembiayaan Usaha',
                'external_link' => 'https://example.com/usaha',
                'produk_layanan_id' => 1,
                'produk_category_id' => 2,
                'status' => 'aktif',
                'fitur' => [
                    'Modal kerja',
                    'Investasi aset',
                    'Pengembangan usaha'
                ],
                'keunggulan' => [
                    'Skema syariah',
                    'Proses transparan',
                    'Pembinaan usaha'
                ],
                'catatan_produk' => 'Pembiayaan untuk pengembangan UMKM'
            ],
            [
                'nama_produk' => 'Pembiayaan Rumah',
                'external_link' => 'https://example.com/rumah',
                'produk_layanan_id' => 1,
                'produk_category_id' => 3,
                'status' => 'aktif',
                'fitur' => [
                    'Dp ringan',
                    'Tenor panjang',
                    'Pilihan lokasi bebas'
                ],
                'keunggulan' => [
                    'Margin kompetitif',
                    'Proses mudah',
                    'Syariah murni'
                ],
                'catatan_produk' => 'Solusi kepemilikan rumah dengan skema syariah'
            ],
            [
                'nama_produk' => 'Pinjaman Guru',
                'external_link' => 'https://example.com/guru',
                'produk_layanan_id' => 1,
                'produk_category_id' => 4,
                'status' => 'aktif',
                'fitur' => [
                    'Cicilan ringan',
                    'Tanpa jaminan',
                    'Proses cepat'
                ],
                'keunggulan' => [
                    'Khusus tenaga pendidik',
                    'Syarat mudah',
                    'Tenor fleksibel'
                ],
                'catatan_produk' => 'Pembiayaan khusus untuk guru dengan skema syariah'
            ],
            [
                'nama_produk' => 'Tabungan Syariah',
                'external_link' => 'https://example.com/tabungan',
                'produk_layanan_id' => 2,
                'produk_category_id' => 5,
                'status' => 'aktif',
                'fitur' => [
                    'Setoran ringan',
                    'Bagi hasil kompetitif',
                    'Transaksi mudah'
                ],
                'keunggulan' => [
                    'Sesuai prinsip syariah',
                    'Bebas biaya administrasi',
                    'Dapat diakses online'
                ],
                'catatan_produk' => 'Solusi simpanan syariah dengan keuntungan optimal'
            ],
            [
                'nama_produk' => 'Deposito Syariah',
                'external_link' => 'https://example.com/deposito',
                'produk_layanan_id' => 2,
                'produk_category_id' => 6,
                'status' => 'aktif',
                'fitur' => [
                    'Bagi hasil tinggi',
                    'Pilihan jangka waktu',
                    'Modal terjamin'
                ],
                'keunggulan' => [
                    'Investasi aman',
                    'Return kompetitif',
                    'Perpanjangan otomatis'
                ],
                'catatan_produk' => 'Investasi syariah dengan keuntungan optimal'
            ],
            [
                'nama_produk' => 'Wakaf Uang',
                'external_link' => 'https://example.com/wakaf',
                'produk_layanan_id' => 2,
                'produk_category_id' => 7,
                'status' => 'aktif',
                'fitur' => [
                    'Donasi fleksibel',
                    'Alokasi tepat guna',
                    'Laporan transparan'
                ],
                'keunggulan' => [
                    'Sedekah jariyah',
                    'Manfaat berkelanjutan',
                    'Pemberdayaan masyarakat'
                ],
                'catatan_produk' => 'Wakaf uang untuk kebaikan dan keberkahan'
            ],
            [
                'nama_produk' => 'Asuransi Pure Tech Care',
                'external_link' => 'https://example.com/pure-tech-care',
                'produk_layanan_id' => 3,
                'produk_category_id' => 8,
                'status' => 'aktif',
                'fitur' => [
                    'Perlindungan teknologi',
                    'Ganti rugi elektronik',
                    'Klaim cepat'
                ],
                'keunggulan' => [
                    'Coverage perangkat digital',
                    'Premi terjangkau',
                    'Perlindungan komprehensif'
                ],
                'catatan_produk' => 'Asuransi khusus untuk perangkat teknologi'
            ],
            [
                'nama_produk' => 'Asuransi Jiwa Syariah',
                'external_link' => 'https://example.com/asuransi-jiwa',
                'produk_layanan_id' => 3,
                'produk_category_id' => 8,
                'status' => 'aktif',
                'fitur' => [
                    'Perlindungan keluarga',
                    'Tabungan masa depan',
                    'Santunan meninggal'
                ],
                'keunggulan' => [
                    'Sesuai prinsip syariah',
                    'Premi ringan',
                    'Manfaat komprehensif'
                ],
                'catatan_produk' => 'Jaminan perlindungan jiwa secara syariah'
            ],
            [
                'nama_produk' => 'Asuransi Kesehatan Syariah',
                'external_link' => 'https://example.com/asuransi-kesehatan',
                'produk_layanan_id' => 3,
                'produk_category_id' => 8,
                'status' => 'aktif',
                'fitur' => [
                    'Rawat inap',
                    'Pengobatan alternatif',
                    'Klaim mudah'
                ],
                'keunggulan' => [
                    'Biaya medis ditanggung',
                    'Proses klaim transparan',
                    'Pendekatan syariah'
                ],
                'catatan_produk' => 'Perlindungan kesehatan sesuai prinsip syariah'
            ],
            [
                'nama_produk' => 'Donasi Gaza',
                'external_link' => 'https://example.com/donasi-gaza',
                'produk_layanan_id' => 4,
                'produk_category_id' => 9,
                'status' => 'aktif',
                'fitur' => [
                    'Bantuan kemanusiaan',
                    'Distribusi langsung',
                    'Transparan'
                ],
                'keunggulan' => [
                    'Bantuan darurat',
                    'Tepat sasaran',
                    'Dukungan global'
                ],
                'catatan_produk' => 'Donasi untuk korban kemanusiaan di Gaza'
            ],
            [
                'nama_produk' => 'Donasi Sumur Pedalaman',
                'external_link' => 'https://example.com/donasi-sumur',
                'produk_layanan_id' => 4,
                'produk_category_id' => 9,
                'status' => 'aktif',
                'fitur' => [
                    'Air bersih',
                    'Akses mudah',
                    'Pemberdayaan masyarakat'
                ],
                'keunggulan' => [
                    'Solusi air jangka panjang',
                    'Membantu daerah kekeringan',
                    'Keberlanjutan'
                ],
                'catatan_produk' => 'Menyediakan air bersih untuk masyarakat terpencil'
            ],
            [
                'nama_produk' => 'Donasi Masjid',
                'external_link' => 'https://example.com/donasi-masjid',
                'produk_layanan_id' => 4,
                'produk_category_id' => 10,
                'status' => 'aktif',
                'fitur' => [
                    'Pembangunan fasilitas',
                    'Sarana ibadah',
                    'Wakaf produktif'
                ],
                'keunggulan' => [
                    'Sedekah jariyah',
                    'Pemberdayaan umat',
                    'Investasi spiritual'
                ],
                'catatan_produk' => 'Membangun dan mengembangkan rumah ibadah'
            ],
        ];

        foreach ($products as $product) {
            Produk::create($product);
        }
        // }
    }
}
