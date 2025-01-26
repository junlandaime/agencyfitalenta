@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">
                    {{ isset($section) ? 'Edit' : 'Tambah' }} Section
                </h1>
                <p class="mt-1 text-sm text-gray-600">{{ $produkLayanan->nama_produk }}</p>
            </div>
            <a href="{{ route('admin.produk-layanan.sections.index', $produkLayanan) }}" 
               class="text-blue-600 hover:text-blue-800">
                &larr; Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <form action="{{ isset($section) 
                ? route('admin.produk-layanan.sections.update', [$produkLayanan, $section]) 
                : route('admin.produk-layanan.sections.store', $produkLayanan) }}" 
                  method="POST"
                  enctype="multipart/form-data"
                  class="p-6 space-y-6">
                @csrf
                @if(isset($section))
                    @method('PUT')
                @endif

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           value="{{ old('title', $section->title ?? '') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                    <textarea name="content" 
                              id="content" 
                              rows="6"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('content', $section->content ?? '') }}</textarea>
                    @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" 
                           name="image" 
                           id="image"
                           accept="image/*"
                           class="mt-1 block w-full text-sm text-gray-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-md file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100">
                    @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    @if(isset($section) && $section->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url('sections/' . $section->image) }}" 
                             alt="{{ $section->title }}"
                             class="w-32 h-32 object-cover rounded">
                    </div>
                    @endif
                </div>

                <div>
                    <label for="order" class="block text-sm font-medium text-gray-700">Urutan</label>
                    <input type="number" 
                           name="order" 
                           id="order" 
                           value="{{ old('order', $section->order ?? 0) }}"
                           min="0"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('order')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center">
                    <input type="checkbox" 
                           name="is_active" 
                           id="is_active" 
                           value="1"
                           {{ old('is_active', $section->is_active ?? true) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_active" class="ml-2 block text-sm text-gray-700">
                        Aktif
                    </label>
                </div>

                <div class="flex justify-end pt-6">
                    <button type="submit" 
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        {{ isset($section) ? 'Update' : 'Simpan' }} Section
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
