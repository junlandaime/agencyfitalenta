<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProdukSeeder;
use Database\Seeders\LandingPageSeeder;
use Database\Seeders\ProdukLayananSeeder;
use Database\Seeders\ProdukSectionSeeder;
use Database\Seeders\ProdukCategorySeeder;
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\ProdukLayananSectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            RolePermissionSeeder::class,
            ProdukCategorySeeder::class,
            ProdukLayananSectionSeeder::class,
            ProdukLayananSeeder::class,
            ProdukSectionSeeder::class,
            ProdukSeeder::class,
            LandingPageSeeder::class,
        ]);
    }
}
