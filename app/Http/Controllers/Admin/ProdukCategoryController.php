<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdukCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukCategoryController extends Controller
{
    public function index()
    {
        $categories = ProdukCategory::orderBy('order')->paginate(10);
        return view('admin.produk-category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.produk-category.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
            'external_link' => 'nullable|url|max:255'
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        
        ProdukCategory::create($validated);

        return redirect()->route('admin.produk-category.index')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(ProdukCategory $produkCategory)
    {
        return view('admin.produk-category.form', compact('produkCategory'));
    }

    public function update(Request $request, ProdukCategory $produkCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
            'external_link' => 'nullable|url|max:255'
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        
        $produkCategory->update($validated);

        return redirect()->route('admin.produk-category.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(ProdukCategory $produkCategory)
    {
        $produkCategory->delete();

        return redirect()->route('admin.produk-category.index')
            ->with('success', 'Kategori berhasil dihapus');
    }
}
