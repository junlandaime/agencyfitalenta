<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProdukLayanan;
use App\Models\ProdukCategory;
use Illuminate\Http\Request;

class ProdukLayananController extends Controller
{
    public function index()
    {
        $categories = ProdukCategory::where('is_active', true)
            ->orderBy('order')
            ->get();
            
        $layanans = ProdukLayanan::where('status', 'aktif')
            ->latest()
            ->paginate(12);

        return view('front.produk-layanan.index', compact('categories', 'layanans'));
    }

    public function show($slug)
    {
        $layanan = ProdukLayanan::where('slug', $slug)
            ->where('status', 'aktif')
            ->firstOrFail();

        $relatedLayanans = ProdukLayanan::where('status', 'aktif')
            ->where('id', '!=', $layanan->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('front.produk-layanan.show', compact('layanan', 'relatedLayanans'));
    }

    public function byCategory($categorySlug)
    {
        $category = ProdukCategory::where('slug', $categorySlug)
            ->where('is_active', true)
            ->firstOrFail();

        $layanans = ProdukLayanan::whereHas('produks', function($query) use ($category) {
                $query->where('produk_category_id', $category->id);
            })
            ->where('status', 'aktif')
            ->paginate(12);

        return view('front.produk-layanan.category', compact('category', 'layanans'));
    }
}
