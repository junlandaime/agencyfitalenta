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
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('front.produk-layanan.index') }}" 
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md 
                      {{ request()->routeIs('front.produk-layanan.index') ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }}">
                Semua
            </a>
            @foreach ($categories as $category)
            <a href="{{ route('front.produk-layanan.category', $category->slug) }}"
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md
                      {{ request()->segment(3) == $category->slug ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }}">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
    </div> --}}

        <!-- Products Layanan Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($layanans as $layanan)
                    <div class="group relative">
                        <div class="aspect-w-4 aspect-h-3 bg-gray-200 rounded-lg overflow-hidden">
                            @if ($layanan->gambar_banner)
                                <img src="{{ Storage::url('banner/' . $layanan->gambar_banner) }}"
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

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar -->
                <div class="w-full lg:w-64 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-4">Kategori</h2>
                        <nav class="space-y-2">
                            @foreach ($categories as $cat)
                                <a href="{{ route('front.produk.category', $cat->slug) }}"
                                    class="flex items-center justify-between px-3 py-2 text-sm rounded-md hover:bg-blue-50 
                                  {{ request()->route('category')?->id === $cat->id ? 'bg-blue-50 text-blue-700' : 'text-gray-600' }}">
                                    <span>{{ $cat->name }}</span>
                                    <span class="bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full text-xs">
                                        {{ $cat->produks_count }}
                                    </span>
                                </a>
                            @endforeach
                        </nav>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="flex-1">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($products as $product)
                            <div
                                class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <a href="{{ route('front.produk.show', $product) }}">
                                            <h3 class="text-xl font-semibold text-gray-900">{{ $product->nama_produk }}
                                            </h3>
                                        </a>
                                        @if ($product->external_link)
                                            <a href="{{ $product->external_link }}" target="_blank"
                                                class="text-blue-600 hover:text-blue-800">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                        @endif
                                    </div>

                                    @if ($product->catatan_produk)
                                        <p class="text-gray-600 mb-4">{{ $product->catatan_produk }}</p>
                                    @endif

                                    @if ($product->fitur)
                                        <div class="mb-4">
                                            <h4 class="text-sm font-medium text-gray-900 mb-2">Fitur:</h4>
                                            <ul class="space-y-2">
                                                @foreach (array_slice($product->fitur, 0, 3) as $fitur)
                                                    <li class="flex items-start">
                                                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-sm text-gray-600">{{ $fitur }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-200">
                                        <div class="flex items-center">
                                            <span class="text-sm text-gray-500">{{ $product->category->name }}</span>
                                            <span class="mx-2 text-gray-300">|</span>
                                            <span class="text-sm text-gray-500">{{ $product->layanan->nama_produk }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-8">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
