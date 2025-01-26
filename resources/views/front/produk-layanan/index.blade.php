@extends('layouts.front')

@section('content')
<div class="bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">Produk & Layanan</span>
                <span class="block text-blue-600">Fitalenta</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Temukan berbagai produk dan layanan terbaik untuk mengembangkan bisnis Anda bersama Fitalenta
            </p>
        </div>
    </div>

    <!-- Category Filter -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('front.produk-layanan.index') }}" 
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md 
                      {{ request()->routeIs('front.produk-layanan.index') ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }}">
                Semua
            </a>
            @foreach($categories as $category)
            <a href="{{ route('front.produk-layanan.category', $category->slug) }}"
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md
                      {{ request()->segment(3) == $category->slug ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }}">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
    </div>

    <!-- Products Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            @foreach($layanans as $layanan)
            <div class="group relative">
                <div class="aspect-w-4 aspect-h-3 bg-gray-200 rounded-lg overflow-hidden">
                    @if($layanan->gambar_banner)
                    <img src="{{ Storage::url('banner/'.$layanan->gambar_banner) }}" 
                         alt="{{ $layanan->nama_produk }}"
                         class="w-full h-full object-center object-cover group-hover:opacity-75">
                    @endif
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="{{ route('front.produk-layanan.show', $layanan->slug) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $layanan->nama_produk }}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">{{ $layanan->hero_subtitle }}</p>
                    </div>
                </div>
                <p class="mt-2 text-sm text-gray-500 line-clamp-3">
                    {{ $layanan->deskripsi }}
                </p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        {{ $layanans->links() }}
    </div>
</div>
@endsection
