@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">
                    {{ isset($produk) ? 'Edit' : 'Tambah' }} Produk
                </h1>
            </div>
            <a href="{{ route('admin.produk.index') }}" 
               class="text-blue-600 hover:text-blue-800">
                &larr; Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <form action="{{ isset($produk) 
                ? route('admin.produk.update', $produk) 
                : route('admin.produk.store') }}" 
                  method="POST"
                  class="p-6 space-y-6">
                @csrf
                @if(isset($produk))
                    @method('PUT')
                @endif

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label for="produk_layanan_id" class="block text-sm font-medium text-gray-700">Layanan</label>
                        <select name="produk_layanan_id" 
                                id="produk_layanan_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Pilih Layanan</option>
                            @foreach($layanans as $layanan)
                            <option value="{{ $layanan->id }}" 
                                {{ old('produk_layanan_id', $produk->produk_layanan_id ?? '') == $layanan->id ? 'selected' : '' }}>
                                {{ $layanan->nama_produk }}
                            </option>
                            @endforeach
                        </select>
                        @error('produk_layanan_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="produk_category_id" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="produk_category_id" 
                                id="produk_category_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('produk_category_id', $produk->produk_category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('produk_category_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" 
                           name="nama_produk" 
                           id="nama_produk"
                           value="{{ old('nama_produk', $produk->nama_produk ?? '') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('nama_produk')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="external_link" class="block text-sm font-medium text-gray-700">Link External</label>
                    <input type="url" 
                           name="external_link" 
                           id="external_link"
                           value="{{ old('external_link', $produk->external_link ?? '') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('external_link')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div x-data="{ 
                    fitur: {{ old('fitur', $produk->fitur ?? '[]') }},
                    newFitur: '',
                    addFitur() {
                        if (this.newFitur.trim()) {
                            this.fitur.push(this.newFitur.trim());
                            this.newFitur = '';
                        }
                    },
                    removeFitur(index) {
                        this.fitur.splice(index, 1);
                    }
                }">
                    <label class="block text-sm font-medium text-gray-700">Fitur</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" 
                               x-model="newFitur"
                               @keydown.enter.prevent="addFitur"
                               placeholder="Tambah fitur baru"
                               class="flex-1 rounded-l-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <button type="button" 
                                @click="addFitur"
                                class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                            Tambah
                        </button>
                    </div>
                    <template x-for="(item, index) in fitur" :key="index">
                        <div class="flex items-center mt-2">
                            <input type="hidden" :name="'fitur[]'" :value="item">
                            <span class="flex-1 text-sm" x-text="item"></span>
                            <button type="button" 
                                    @click="removeFitur(index)"
                                    class="ml-2 text-red-600 hover:text-red-900">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </template>
                </div>

                <div x-data="{ 
                    keunggulan: {{ old('keunggulan', $produk->keunggulan ?? '[]') }},
                    newKeunggulan: '',
                    addKeunggulan() {
                        if (this.newKeunggulan.trim()) {
                            this.keunggulan.push(this.newKeunggulan.trim());
                            this.newKeunggulan = '';
                        }
                    },
                    removeKeunggulan(index) {
                        this.keunggulan.splice(index, 1);
                    }
                }">
                    <label class="block text-sm font-medium text-gray-700">Keunggulan</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" 
                               x-model="newKeunggulan"
                               @keydown.enter.prevent="addKeunggulan"
                               placeholder="Tambah keunggulan baru"
                               class="flex-1 rounded-l-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <button type="button" 
                                @click="addKeunggulan"
                                class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                            Tambah
                        </button>
                    </div>
                    <template x-for="(item, index) in keunggulan" :key="index">
                        <div class="flex items-center mt-2">
                            <input type="hidden" :name="'keunggulan[]'" :value="item">
                            <span class="flex-1 text-sm" x-text="item"></span>
                            <button type="button" 
                                    @click="removeKeunggulan(index)"
                                    class="ml-2 text-red-600 hover:text-red-900">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </template>
                </div>

                <div>
                    <label for="catatan_produk" class="block text-sm font-medium text-gray-700">Catatan Produk</label>
                    <textarea name="catatan_produk" 
                              id="catatan_produk" 
                              rows="4"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('catatan_produk', $produk->catatan_produk ?? '') }}</textarea>
                    @error('catatan_produk')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" 
                            id="status"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="draft" {{ old('status', $produk->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="aktif" {{ old('status', $produk->status ?? '') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    </select>
                    @error('status')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end pt-6">
                    <button type="submit" 
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        {{ isset($produk) ? 'Update' : 'Simpan' }} Produk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
@endsection
