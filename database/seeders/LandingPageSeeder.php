<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use App\Models\LandingSection;
use App\Models\LandingFeature;
use App\Models\LandingStat;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    public function run()
    {
        $landingPage = LandingPage::create([
            'hero_title' => 'Wujudkan Masa Depan Finansial Syariah',
            'hero_subtitle' => 'Bergabung dengan ribuan affiliate untuk menyediakan solusi keuangan syariah terbaik bagi masyarakat Indonesia.',
            'hero_image' => 'landing/hero/default.jpg',
            'hero_rating' => 4.9,
            'hero_rating_count' => 1234,
            'hero_cta_primary_text' => 'Mulai Sekarang',
            'hero_cta_primary_url' => '/register',
            'hero_cta_secondary_text' => 'Pelajari Lebih Lanjut',
            'hero_cta_secondary_url' => '#features',
            'is_active' => true,

            'contact_address' => 'Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'contact_email' => 'info@halalsalman.org',
            'contact_phone' => '+62 22 2500935',
            'contact_whatsapp' => '+62 812 3456 7890',

            'social_facebook' => 'https://facebook.com/halalsalman',
            'social_twitter' => 'https://twitter.com/halalsalman',
            'social_instagram' => 'https://instagram.com/halalsalman',
            'social_linkedin' => 'https://linkedin.com/company/halalsalman',

            'footer_description' => 'Pusat Halal Salman ITB berkomitmen untuk memberikan layanan terbaik dalam sertifikasi halal dan edukasi halal kepada masyarakat.',

            'meta_title' => 'Pusat Halal Salman ITB - Lembaga Sertifikasi Halal Terpercaya',
            'meta_description' => 'Pusat Halal Salman ITB adalah lembaga sertifikasi halal terpercaya yang berfokus pada pengembangan dan edukasi sistem halal di Indonesia.',
            'meta_keywords' => 'halal, sertifikasi halal, edukasi halal, Salman ITB, lembaga halal'
        ]);

        // Create Features
        $features = [
            [
                'title' => 'Mudah Digunakan',
                'description' => 'Platform yang intuitif dan mudah digunakan untuk semua kalangan',
                'icon' => 'fas fa-mobile-alt',
                'order' => 1
            ],
            [
                'title' => '100% Syariah',
                'description' => 'Semua produk dan layanan sesuai dengan prinsip syariah',
                'icon' => 'fas fa-star-and-crescent',
                'order' => 2
            ],
            [
                'title' => 'Komisi Kompetitif',
                'description' => 'Dapatkan komisi yang kompetitif untuk setiap transaksi',
                'icon' => 'fas fa-hand-holding-usd',
                'order' => 3
            ],
            [
                'title' => 'Support 24/7',
                'description' => 'Tim support kami siap membantu Anda 24/7',
                'icon' => 'fas fa-headset',
                'order' => 4
            ]
        ];

        foreach ($features as $feature) {
            $landingPage->features()->create($feature);
        }

        // Create Stats
        $stats = [
            [
                'label' => 'Affiliate Aktif',
                'value' => '10,000+',
                'icon' => 'fas fa-users',
                'order' => 1
            ],
            [
                'label' => 'Total Transaksi',
                'value' => 'Rp 100M+',
                'icon' => 'fas fa-chart-line',
                'order' => 2
            ],
            [
                'label' => 'Produk Syariah',
                'value' => '50+',
                'icon' => 'fas fa-box-open',
                'order' => 3
            ],
            [
                'label' => 'Rating Kepuasan',
                'value' => '4.9/5',
                'icon' => 'fas fa-star',
                'order' => 4
            ]
        ];

        foreach ($stats as $stat) {
            $landingPage->stats()->create($stat);
        }

        // Create Sections
        $sections = [
            [
                'title' => 'Tentang Kami',
                'subtitle' => 'Platform Affiliate Syariah #1 di Indonesia',
                'content' => 'Fitalenta.id adalah platform yang menghubungkan para affiliate dengan produk-produk keuangan syariah terbaik. Kami berkomitmen untuk memajukan ekonomi syariah di Indonesia melalui teknologi digital yang inovatif.',
                'type' => 'about',
                'order' => 1
            ],
            [
                'title' => 'Keunggulan Kami',
                'subtitle' => 'Mengapa Memilih Fitalenta.id?',
                'type' => 'features',
                'order' => 2
            ],
            [
                'title' => 'Pencapaian Kami',
                'subtitle' => 'Angka yang Berbicara',
                'type' => 'stats',
                'order' => 3
            ]
        ];

        foreach ($sections as $section) {
            $landingPage->sections()->create($section);
        }
    }
}
