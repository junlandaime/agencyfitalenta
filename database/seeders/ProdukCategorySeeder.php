<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdukCategory;

class ProdukCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'description' => 'Layanan pemasaran digital untuk mengembangkan bisnis Anda',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Konsultasi Bisnis',
                'slug' => 'konsultasi-bisnis',
                'description' => 'Layanan konsultasi untuk pengembangan dan pertumbuhan bisnis',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'Teknologi',
                'slug' => 'teknologi',
                'description' => 'Solusi teknologi untuk transformasi digital bisnis',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'Pengembangan SDM',
                'slug' => 'pengembangan-sdm',
                'description' => 'Program pengembangan sumber daya manusia',
                'is_active' => true,
                'order' => 4
            ]
        ];

        foreach ($categories as $category) {
            ProdukCategory::create($category);
        }
    }
}
