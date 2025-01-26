<?php

namespace App\Http\Controllers\Front;

use App\Models\Produk;
use App\Models\LandingPage;
use App\Models\ProdukLayanan;
use App\Models\ProdukCategory;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $landingPage = LandingPage::where('is_active', true)
            ->with(['sections', 'features', 'stats'])
            ->first();

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

        return view('front.home', compact(
            'landingPage',
            'categories',
            'services',
            'products'
        ));
    }
}
