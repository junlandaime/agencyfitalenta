@extends('layouts.front')

@section('content')
<div class="bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <!-- Category Header -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">{{ $category->name }}</span>
            </h1>
            @if($category->description)
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                {{ $category->description }}
            </p>
            @endif
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <div class="w-full lg:w-64 flex-shrink-0">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-8">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Kategori</h2>
                    <nav class="space-y-2">
                        @foreach($categories as $cat)
                        <a href="{{ route('front.produk.category', $cat->slug) }}" 
                           class="flex items-center justify-between px-3 py-2 text-sm rounded-md hover:bg-blue-50 
                                  {{ $category->id === $cat->id ? 'bg-blue-50 text-blue-700' : 'text-gray-600' }}">
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
                @if($products->count() > 0)
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-semibold text-gray-900">{{ $product->nama_produk }}</h3>
                                @if($product->external_link)
                                <a href="{{ $product->external_link }}" 
                                   target="_blank"
                                   class="text-blue-600 hover:text-blue-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                @endif
                            </div>

                            @if($product->catatan_produk)
                            <p class="text-gray-600 mb-4">{{ $product->catatan_produk }}</p>
                            @endif

                            @if($product->fitur)
                            <div class="mb-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Fitur:</h4>
                                <ul class="space-y-2">
                                    @foreach(array_slice($product->fitur, 0, 3) as $fitur)
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span class="text-sm text-gray-600">{{ $fitur }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-200">
                                <div class="flex items-center">
                                    <span class="text-sm text-gray-500">{{ $product->layanan->nama_produk }}</span>
                                </div>
                                <a href="{{ route('front.produk.show', $product) }}" 
                                   class="text-sm font-medium text-blue-600 hover:text-blue-800">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $products->links() }}
                </div>
                @else
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada produk</h3>
                    <p class="mt-1 text-sm text-gray-500">Belum ada produk yang tersedia dalam kategori ini.</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
