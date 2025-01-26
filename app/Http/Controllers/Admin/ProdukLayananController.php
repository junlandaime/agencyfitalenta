<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdukLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukLayananController extends Controller
{
    public function index()
    {
        $layanans = ProdukLayanan::latest()->paginate(10);
        return view('admin.produk-layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.produk-layanan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'deskripsi_lengkap' => 'required|string',
            'materi' => 'nullable|array',
            'manfaat' => 'nullable|array',
            'persyaratan' => 'nullable|array',
            'alur_proses' => 'nullable|array',
            'jalur_pelatihan' => 'nullable|array',
            'gambar_banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:aktif,nonaktif'
        ]);

        if ($request->hasFile('gambar_banner')) {
            $file = $request->file('gambar_banner');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/banner', $filename);
            $validated['gambar_banner'] = $filename;
        }

        $validated['slug'] = Str::slug($validated['nama_produk']);

        ProdukLayanan::create($validated);

        return redirect()->route('admin.produk-layanan.index')
            ->with('success', 'Produk Layanan berhasil ditambahkan');
    }

    public function edit(ProdukLayanan $produkLayanan)
    {
        return view('admin.produk-layanan.edit', compact('produkLayanan'));
    }

    public function update(Request $request, ProdukLayanan $produkLayanan)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'deskripsi_lengkap' => 'required|string',
            'materi' => 'nullable|array',
            'manfaat' => 'nullable|array',
            'persyaratan' => 'nullable|array',
            'alur_proses' => 'nullable|array',
            'jalur_pelatihan' => 'nullable|array',
            'gambar_banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:aktif,nonaktif'
        ]);

        if ($request->hasFile('gambar_banner')) {
            // Delete old image
            if ($produkLayanan->gambar_banner) {
                Storage::delete('public/banner/' . $produkLayanan->gambar_banner);
            }
            
            $file = $request->file('gambar_banner');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/banner', $filename);
            $validated['gambar_banner'] = $filename;
        }

        $validated['slug'] = Str::slug($validated['nama_produk']);

        $produkLayanan->update($validated);

        return redirect()->route('admin.produk-layanan.index')
            ->with('success', 'Produk Layanan berhasil diperbarui');
    }

    public function destroy(ProdukLayanan $produkLayanan)
    {
        if ($produkLayanan->gambar_banner) {
            Storage::delete('public/banner/' . $produkLayanan->gambar_banner);
        }
        
        $produkLayanan->delete();

        return redirect()->route('admin.produk-layanan.index')
            ->with('success', 'Produk Layanan berhasil dihapus');
    }
}
