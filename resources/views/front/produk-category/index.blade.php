@extends('layouts.front')

@section('content')
<div class="bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">Kategori Produk</span>
                <span class="block text-blue-600">Fitalenta</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Temukan berbagai kategori produk dan layanan yang sesuai dengan kebutuhan bisnis Anda
            </p>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($categories as $category)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <a href="{{ route('front.produk-category.show', $category->slug) }}" class="block">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $category->name }}</h3>
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600">
                                {{ $category->produks_count ?? 0 }}
                            </span>
                        </div>
                        
                        <p class="text-gray-600 mb-4 line-clamp-2">{{ $category->description }}</p>
                        
                        <div class="flex items-center text-blue-600">
                            <span class="text-sm font-medium">Lihat Produk</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Features Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Produk Terpercaya</h3>
                <p class="text-gray-600">Semua produk dan layanan telah melalui proses kurasi yang ketat</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Proses Cepat</h3>
                <p class="text-gray-600">Proses pendaftaran dan aktivasi yang cepat dan mudah</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Dukungan Penuh</h3>
                <p class="text-gray-600">Tim support yang siap membantu Anda 24/7</p>
            </div>
        </div>
    </div>
</div>
@endsection
