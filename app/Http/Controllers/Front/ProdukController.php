<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukCategory;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::with(['category', 'layanan'])
            ->where('status', 'aktif')
            ->latest()
            ->paginate(12);
            
        $categories = ProdukCategory::has('produks')
            ->withCount('produks')
            ->get();
            
        return view('front.produk.index', compact('products', 'categories'));
    }

    public function show(Produk $produk)
    {
        if ($produk->status !== 'aktif') {
            abort(404);
        }

        $relatedProducts = Produk::where('produk_category_id', $produk->produk_category_id)
            ->where('id', '!=', $produk->id)
            ->where('status', 'aktif')
            ->limit(3)
            ->get();

        return view('front.produk.show', compact('produk', 'relatedProducts'));
    }

    public function byCategory(ProdukCategory $category)
    {
        $products = $category->produks()
            ->where('status', 'aktif')
            ->with('layanan')
            ->latest()
            ->paginate(12);
            
        $categories = ProdukCategory::has('produks')
            ->withCount('produks')
            ->get();
            
        return view('front.produk.by-category', compact('products', 'categories', 'category'));
    }
}
