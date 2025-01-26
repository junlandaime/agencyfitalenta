@extends('layouts.front')

@section('content')
<div class="bg-white">
    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <div>
                        <a href="{{ route('front.produk.index') }}" class="text-gray-400 hover:text-gray-500">
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
                        <a href="{{ route('front.produk.category', $produk->category->slug) }}" 
                           class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                            {{ $produk->category->name }}
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-4 text-sm font-medium text-gray-500">{{ $produk->nama_produk }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Product Header -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
            <!-- Left column -->
            <div class="flex flex-col">
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $produk->nama_produk }}</h1>
                
                <div class="mt-4 flex items-center">
                    <a href="{{ route('front.produk-layanan.show', $produk->layanan->slug) }}" 
                       class="text-sm text-blue-600 hover:text-blue-800">
                        {{ $produk->layanan->nama_produk }}
                    </a>
                    <span class="mx-2 text-gray-500">&bull;</span>
                    <span class="text-sm text-gray-500">{{ $produk->category->name }}</span>
                </div>

                @if($produk->catatan_produk)
                <div class="mt-4">
                    <p class="text-gray-500">{{ $produk->catatan_produk }}</p>
                </div>
                @endif

                @if($produk->external_link)
                <div class="mt-6">
                    <a href="{{ $produk->external_link }}" 
                       target="_blank"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Lihat Detail
                        <svg class="ml-2 -mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
                @endif
            </div>

            <!-- Right column -->
            <div class="mt-10 lg:mt-0">
                @if($produk->fitur)
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900">Fitur</h2>
                    <div class="mt-4">
                        <ul class="space-y-4">
                            @foreach($produk->fitur as $fitur)
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="ml-3 text-gray-500">{{ $fitur }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if($produk->keunggulan)
                <div class="mt-6">
                    <h2 class="text-lg font-medium text-gray-900">Keunggulan</h2>
                    <div class="mt-4">
                        <ul class="space-y-4">
                            @foreach($produk->keunggulan as $keunggulan)
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="ml-3 text-gray-500">{{ $keunggulan }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Related Products -->
    @if($relatedProducts->count() > 0)
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Produk Terkait</h2>
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($relatedProducts as $related)
                <div class="group relative bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="{{ route('front.produk.show', $related) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $related->nama_produk }}
                            </a>
                        </h3>
                        
                        @if($related->catatan_produk)
                        <p class="mt-2 text-sm text-gray-500 line-clamp-2">{{ $related->catatan_produk }}</p>
                        @endif

                        @if($related->fitur)
                        <div class="mt-4">
                            <h4 class="sr-only">Features</h4>
                            <ul class="space-y-2">
                                @foreach(array_slice($related->fitur, 0, 2) as $fitur)
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
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
