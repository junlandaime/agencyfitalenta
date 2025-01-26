<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukCategory;
use App\Models\ProdukLayanan;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::with(['category', 'layanan'])
            ->latest()
            ->paginate(10);

        return view('admin.produk.index', compact('products'));
    }

    public function create()
    {
        $categories = ProdukCategory::all();
        $layanans = ProdukLayanan::all();
        return view('admin.produk.form', compact('categories', 'layanans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'produk_layanan_id' => 'required|exists:produk_layanan,id',
            'produk_category_id' => 'required|exists:produk_categories,id',
            'nama_produk' => 'required|string|max:255',
            'external_link' => 'nullable|url|max:255',
            'status' => 'required|in:draft,aktif',
            'fitur' => 'nullable|array',
            'fitur.*' => 'string',
            'keunggulan' => 'nullable|array',
            'keunggulan.*' => 'string',
            'catatan_produk' => 'nullable|string'
        ]);

        // Set default values for arrays if they're not present
        $validated['fitur'] = $request->fitur ?? [];
        $validated['keunggulan'] = $request->keunggulan ?? [];

        // Set default status if not provided
        $validated['status'] = $validated['status'] ?? 'draft';

        Produk::create($validated);

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Produk $produk)
    {
        $categories = ProdukCategory::all();
        $layanans = ProdukLayanan::all();
        return view('admin.produk.form', compact('produk', 'categories', 'layanans'));
    }

    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'produk_layanan_id' => 'required|exists:produk_layanan,id',
            'produk_category_id' => 'required|exists:produk_categories,id',
            'nama_produk' => 'required|string|max:255',
            'external_link' => 'nullable|url|max:255',
            'status' => 'required|in:draft,aktif',
            'fitur' => 'nullable|array',
            'fitur.*' => 'string',
            'keunggulan' => 'nullable|array',
            'keunggulan.*' => 'string',
            'catatan_produk' => 'nullable|string'
        ]);

        $produk->update($validated);

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}
