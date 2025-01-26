<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProdukCategory;
use Illuminate\Http\Request;

class ProdukCategoryController extends Controller
{
    public function index()
    {
        $categories = ProdukCategory::where('is_active', true)
            ->orderBy('order')
            ->get();
            
        return view('front.produk-category.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = ProdukCategory::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $products = $category->produks()
            ->with('layanan')
            ->paginate(12);

        return view('front.produk-category.show', compact('category', 'products'));
    }
}
