<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdukCategory;

class ProdukCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [

            // Pembiayaan
            [
                'name' => 'Kendaraan',
                'slug' => 'kendaraan',
                'description' => 'Pembiayaan untuk pembelian kendaraan baru atau bekas',
                'is_active' => false,
                'order' => 1
            ],
            [
                'name' => 'Modal',
                'slug' => 'modal',
                'description' => 'Pembiayaan modal usaha untuk mengembangkan bisnis Anda',
                'is_active' => false,
                'order' => 2
            ],
            [
                'name' => 'Rumah',
                'slug' => 'rumah',
                'description' => 'Pembiayaan untuk pembelian atau renovasi rumah',
                'is_active' => false,
                'order' => 3
            ],
            [
                'name' => 'Pendidikan',
                'slug' => 'pendidikan',
                'description' => 'Pembiayaan untuk biaya pendidikan',
                'is_active' => false,
                'order' => 4
            ],
            [
                'name' => 'Konsumtif',
                'slug' => 'konsumtif',
                'description' => 'Pembiayaan untuk kebutuhan konsumtif',
                'is_active' => false,
                'order' => 5
            ],
            [
                'name' => 'Refinancing',
                'slug' => 'refinancing',
                'description' => 'Pembiayaan ulang untuk aset yang telah dimiliki',
                'is_active' => false,
                'order' => 6
            ],
            [
                'name' => 'Back to Back',
                'slug' => 'back-to-back',
                'description' => 'Pembiayaan dengan jaminan simpanan',
                'is_active' => false,
                'order' => 7
            ],

            // Pendanaan
            [
                'name' => 'Tabungan',
                'slug' => 'tabungan',
                'description' => 'Layanan simpanan dana dengan berbagai keuntungan',
                'is_active' => false,
                'order' => 8
            ],
            [
                'name' => 'Deposito',
                'slug' => 'deposito',
                'description' => 'Investasi berjangka dengan imbal hasil optimal',
                'is_active' => false,
                'order' => 9
            ],
            [
                'name' => 'Wakaf Uang',
                'slug' => 'wakaf-uang',
                'description' => 'Layanan wakaf uang untuk kemaslahatan umat',
                'is_active' => false,
                'order' => 10
            ],

            // Asuransi
            [
                'name' => 'Asuransi',
                'slug' => 'asuransi',
                'description' => 'Penjagaan diri kalo kenapa-napa',
                'is_active' => false,
                'order' => 11
            ],

            // Filantropi
            [
                'name' => 'Wakaf Salman',
                'slug' => 'wakaf-salman',
                'description' => 'Program wakaf untuk pembangunan dan pengembangan Masjid Salman',
                'is_active' => false,
                'order' => 12
            ],
            [
                'name' => 'BPRS Al Salaam',
                'slug' => 'bprs-al-salaam',
                'description' => 'Program kemitraan dengan BPRS Al Salaam',
                'is_active' => false,
                'order' => 13
            ]

        ];

        foreach ($categories as $category) {
            ProdukCategory::create($category);
        }
    }
}
