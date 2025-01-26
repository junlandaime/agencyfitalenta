@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                {{ isset($produkLayanan) ? 'Edit Produk Layanan' : 'Tambah Produk Layanan' }}
            </h1>

            <form action="{{ isset($produkLayanan) ? route('admin.produk-layanan.update', $produkLayanan) : route('admin.produk-layanan.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @if(isset($produkLayanan))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" name="nama_produk" 
                               value="{{ old('nama_produk', $produkLayanan->nama_produk ?? '') }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('nama_produk')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Hero Title</label>
                        <input type="text" name="hero_title"
                               value="{{ old('hero_title', $produkLayanan->hero_title ?? '') }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('hero_title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Hero Subtitle</label>
                        <input type="text" name="hero_subtitle"
                               value="{{ old('hero_subtitle', $produkLayanan->hero_subtitle ?? '') }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" rows="3"
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('deskripsi', $produkLayanan->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Deskripsi Lengkap</label>
                        <textarea name="deskripsi_lengkap" rows="5"
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('deskripsi_lengkap', $produkLayanan->deskripsi_lengkap ?? '') }}</textarea>
                        @error('deskripsi_lengkap')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div x-data="{ items: {{ old('materi', $produkLayanan->materi ?? '[]') }} }">
                        <label class="block text-sm font-medium text-gray-700">Materi</label>
                        <div class="space-y-2">
                            <template x-for="(item, index) in items" :key="index">
                                <div class="flex gap-2">
                                    <input type="text" :name="'materi['+index+']'" x-model="items[index]"
                                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <button type="button" @click="items.splice(index, 1)"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                                        Hapus
                                    </button>
                                </div>
                            </template>
                        </div>
                        <button type="button" @click="items.push('')"
                                class="mt-2 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            Tambah Materi
                        </button>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gambar Banner</label>
                        <input type="file" name="gambar_banner"
                               class="mt-1 block w-full">
                        @if(isset($produkLayanan) && $produkLayanan->gambar_banner)
                            <div class="mt-2">
                                <img src="{{ Storage::url('banner/'.$produkLayanan->gambar_banner) }}" 
                                     alt="Current banner" class="h-32 w-auto">
                            </div>
                        @endif
                        @error('gambar_banner')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="aktif" {{ (old('status', $produkLayanan->status ?? '') == 'aktif') ? 'selected' : '' }}>Aktif</option>
                            <option value="nonaktif" {{ (old('status', $produkLayanan->status ?? '') == 'nonaktif') ? 'selected' : '' }}>Non Aktif</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.produk-layanan.index') }}"
                           class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            Batal
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                            {{ isset($produkLayanan) ? 'Update' : 'Simpan' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add any additional JavaScript here
</script>
@endpush
