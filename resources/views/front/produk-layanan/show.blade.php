@extends('layouts.front')

@section('content')
    <div class="bg-white">
        <!-- Hero Section -->
        <div class="relative">
            @if ($layanan->gambar_banner)
                <div class="absolute inset-0">
                    <img class="w-full h-full object-cover" src="{{ Storage::url('banner/' . $layanan->gambar_banner) }}"
                        alt="{{ $layanan->nama_produk }}">
                    <div class="absolute inset-0 bg-blue-700 mix-blend-multiply"></div>
                </div>
            @endif
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-blue-700 sm:text-5xl lg:text-6xl">
                    {{ $layanan->hero_title }}
                </h1>
                <p class="mt-6 text-xl text-blue-300 max-w-3xl">
                    {{ $layanan->hero_subtitle }}
                </p>
            </div>
        </div>

        <!-- Content Section -->
        <div class="relative py-16 bg-white overflow-hidden">
            <div class="relative px-4 sm:px-6 lg:px-8">
                <div class="text-lg max-w-prose mx-auto">
                    <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $layanan->nama_produk }}
                    </h2>
                    <p class="mt-8 text-xl text-gray-500 leading-8">
                        {{ $layanan->deskripsi }}
                    </p>
                </div>

                <div class="mt-6 prose prose-blue prose-lg text-gray-500 mx-auto">
                    {!! $layanan->deskripsi_lengkap !!}
                </div>

                @if ($layanan->materi)
                    <div class="mt-12 max-w-prose mx-auto">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Materi</h3>
                        <ul class="space-y-4">
                            @foreach ($layanan->materi as $item)
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 h-6 w-6 text-blue-600">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </span>
                                    <span class="ml-3 text-gray-700">{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($layanan->manfaat)
                    <div class="mt-12 max-w-prose mx-auto">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Manfaat</h3>
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            @foreach ($layanan->manfaat as $manfaat)
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-gray-700">{{ $manfaat }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if ($layanan->persyaratan)
                    <div class="mt-12 max-w-prose mx-auto">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Persyaratan</h3>
                        <ul class="space-y-4">
                            @foreach ($layanan->persyaratan as $syarat)
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 h-6 w-6 text-blue-600">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </span>
                                    <span class="ml-3 text-gray-700">{{ $syarat }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <!-- Related Products -->
        @if ($relatedLayanans->count() > 0)
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">
                        Produk & Layanan Terkait
                    </h2>
                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($relatedLayanans as $related)
                            <div class="group relative">
                                <div class="aspect-w-4 aspect-h-3 bg-gray-200 rounded-lg overflow-hidden">
                                    @if ($related->gambar_banner)
                                        <img src="{{ Storage::url('banner/' . $related->gambar_banner) }}"
                                            alt="{{ $related->nama_produk }}"
                                            class="w-full h-full object-center object-cover group-hover:opacity-75">
                                    @endif
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-sm text-gray-700">
                                        <a href="{{ route('front.produk-layanan.show', $related->slug) }}">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $related->nama_produk }}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">{{ $related->hero_subtitle }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
