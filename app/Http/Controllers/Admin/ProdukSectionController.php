<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukSectionController extends Controller
{
    public function index(Produk $produk)
    {
        $sections = $produk->sections()
            ->orderBy('order')
            ->get();
            
        return view('admin.produk-section.index', compact('produk', 'sections'));
    }

    public function create(Produk $produk)
    {
        return view('admin.produk-section.form', compact('produk'));
    }

    public function store(Request $request, Produk $produk)
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
            $file->storeAs('public/produk-sections', $filename);
            $validated['image'] = $filename;
        }

        $produk->sections()->create($validated);

        return redirect()->route('admin.produk.sections.index', $produk)
            ->with('success', 'Section berhasil ditambahkan');
    }

    public function edit(Produk $produk, ProdukSection $section)
    {
        return view('admin.produk-section.form', compact('produk', 'section'));
    }

    public function update(Request $request, Produk $produk, ProdukSection $section)
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
                Storage::delete('public/produk-sections/' . $section->image);
            }
            
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/produk-sections', $filename);
            $validated['image'] = $filename;
        }

        $section->update($validated);

        return redirect()->route('admin.produk.sections.index', $produk)
            ->with('success', 'Section berhasil diperbarui');
    }

    public function destroy(Produk $produk, ProdukSection $section)
    {
        if ($section->image) {
            Storage::delete('public/produk-sections/' . $section->image);
        }
        
        $section->delete();

        return redirect()->route('admin.produk.sections.index', $produk)
            ->with('success', 'Section berhasil dihapus');
    }

    public function reorder(Request $request, Produk $produk)
    {
        $request->validate([
            'sections' => 'required|array',
            'sections.*.id' => 'required|exists:produk_sections,id',
            'sections.*.order' => 'required|integer|min:0'
        ]);

        foreach ($request->sections as $sectionData) {
            ProdukSection::where('id', $sectionData['id'])
                ->update(['order' => $sectionData['order']]);
        }

        return response()->json(['message' => 'Urutan section berhasil diperbarui']);
    }
}
