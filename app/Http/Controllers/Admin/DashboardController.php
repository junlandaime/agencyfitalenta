<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdukCategory;
use App\Models\ProdukLayanan;
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'categories' => ProdukCategory::count(),
            'services' => ProdukLayanan::count(),
            'products' => Produk::count(),
            'active_products' => Produk::where('status', 'active')->count()
        ];

        $latest_products = Produk::with(['category', 'layanan'])
            ->latest()
            ->take(5)
            ->get();

        $latest_services = ProdukLayanan::
            // with('category')
            latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'latest_products', 'latest_services'));
    }
}
