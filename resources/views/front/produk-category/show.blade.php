@extends('layouts.front')

@section('content')
<div class="bg-white">
    <!-- Category Header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                    {{ $category->name }}
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                    {{ $category->description }}
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <div>
                        <a href="{{ route('front.produk-category.index') }}" class="text-gray-400 hover:text-gray-500">
                            <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-4 text-sm font-medium text-gray-500">{{ $category->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Products Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @if($products->count() > 0)
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($products as $product)
                <div class="group relative">
                    <div class="aspect-w-4 aspect-h-3 bg-gray-200 rounded-lg overflow-hidden">
                        @if($product->layanan->gambar_banner)
                        <img src="{{ Storage::url('banner/'.$product->layanan->gambar_banner) }}"
                             alt="{{ $product->nama_produk }}"
                             class="w-full h-full object-center object-cover group-hover:opacity-75">
                        @endif
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="{{ route('front.produk-layanan.show', $product->layanan->slug) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->nama_produk }}
                            </a>
                        </h3>
                        
                        @if($product->fitur)
                        <div class="mt-2">
                            <h4 class="sr-only">Features</h4>
                            <ul class="space-y-2">
                                @foreach(array_slice($product->fitur, 0, 3) as $fitur)
                                <li class="text-sm text-gray-500">
                                    <svg class="flex-shrink-0 h-4 w-4 text-blue-600 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    {{ $fitur }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if($product->keunggulan)
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <h4 class="sr-only">Benefits</h4>
                                <div class="text-sm text-blue-600">
                                    {{ count($product->keunggulan) }} keunggulan produk
                                </div>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium {{ $product->status === 'aktif' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ ucfirst($product->status) }}
                                </span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
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
@endsection
