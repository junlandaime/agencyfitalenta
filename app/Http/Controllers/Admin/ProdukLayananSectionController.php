<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdukLayanan;
use App\Models\ProdukLayananSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukLayananSectionController extends Controller
{
    public function index(ProdukLayanan $produkLayanan)
    {
        $sections = $produkLayanan->sections()
            ->orderBy('order')
            ->get();
            
        return view('admin.produk-layanan-section.index', compact('produkLayanan', 'sections'));
    }

    public function create(ProdukLayanan $produkLayanan)
    {
        return view('admin.produk-layanan-section.form', compact('produkLayanan'));
    }

    public function store(Request $request, ProdukLayanan $produkLayanan)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'integer|min:0',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/sections', $filename);
            $validated['image'] = $filename;
        }

        $produkLayanan->sections()->create($validated);

        return redirect()->route('admin.produk-layanan.sections.index', $produkLayanan)
            ->with('success', 'Section berhasil ditambahkan');
    }

    public function edit(ProdukLayanan $produkLayanan, ProdukLayananSection $section)
    {
        return view('admin.produk-layanan-section.form', compact('produkLayanan', 'section'));
    }

    public function update(Request $request, ProdukLayanan $produkLayanan, ProdukLayananSection $section)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'integer|min:0',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($section->image) {
                Storage::delete('public/sections/' . $section->image);
            }
            
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/sections', $filename);
            $validated['image'] = $filename;
        }

        $section->update($validated);

        return redirect()->route('admin.produk-layanan.sections.index', $produkLayanan)
            ->with('success', 'Section berhasil diperbarui');
    }

    public function destroy(ProdukLayanan $produkLayanan, ProdukLayananSection $section)
    {
        if ($section->image) {
            Storage::delete('public/sections/' . $section->image);
        }
        
        $section->delete();

        return redirect()->route('admin.produk-layanan.sections.index', $produkLayanan)
            ->with('success', 'Section berhasil dihapus');
    }

    public function reorder(Request $request, ProdukLayanan $produkLayanan)
    {
        $request->validate([
            'sections' => 'required|array',
            'sections.*.id' => 'required|exists:produk_layanan_sections,id',
            'sections.*.order' => 'required|integer|min:0'
        ]);

        foreach ($request->sections as $sectionData) {
            ProdukLayananSection::where('id', $sectionData['id'])
                ->update(['order' => $sectionData['order']]);
        }

        return response()->json(['message' => 'Urutan section berhasil diperbarui']);
    }
}
