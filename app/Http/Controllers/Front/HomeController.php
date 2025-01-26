<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProdukCategory;
use App\Models\ProdukLayanan;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $categories = ProdukCategory::withCount('produks')
            ->where('is_active', true)
            ->orderBy('name')
            ->take(6)
            ->get();

        $services = ProdukLayanan::
            // with('category')
            where('status', 'aktif')
            ->latest()
            ->take(6)
            ->get();

        $products = Produk::with(['category', 'layanan'])
            ->where('status', 'aktif')
            ->latest()
            ->take(8)
            ->get();

        return view('front.home', compact('categories', 'services', 'products'));
    }
}
