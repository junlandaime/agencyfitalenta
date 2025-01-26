@extends('layouts.front')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-blue-50 py-20">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -right-8 top-20 w-64 h-64 bg-blue-200 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute -left-8 bottom-20 w-96 h-96 bg-blue-300 rounded-full opacity-10 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" class="space-y-8">
                    <span class="inline-block px-4 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                        #1 Platform Affiliate Syariah
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        {{ $landingPage->hero_title }}
                    </h1>
                    <p class="text-lg text-gray-600">
                        {{ $landingPage->hero_subtitle }}
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ $landingPage->hero_cta_primary_url }}"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transform hover:-translate-y-1 transition-all duration-300">
                            {{ $landingPage->hero_cta_primary_text }}
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="{{ $landingPage->hero_cta_secondary_url }}"
                            class="inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transform hover:-translate-y-1 transition-all duration-300">
                            {{ $landingPage->hero_cta_secondary_text }}
                        </a>
                    </div>
                </div>

                <div data-aos="fade-left" class="relative">
                    <img src="{{ $landingPage->hero_image_url }}" alt="Hero Image" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @foreach ($landingPage->sections->where('type', 'features') as $section)
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $section->title }}</h2>
                    @if ($section->subtitle)
                        <p class="text-xl text-gray-600">{{ $section->subtitle }}</p>
                    @endif
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($landingPage->features->where('is_active', true)->sortBy('order') as $feature)
                        <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300"
                            data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            @if ($feature->icon)
                                <div class="text-blue-600 mb-4">
                                    <i class="{{ $feature->icon }} text-3xl"></i>
                                </div>
                            @endif
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $feature->title }}</h3>
                            <p class="text-gray-600">{{ $feature->description }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white" x-data="{ shown: false }" x-intersect="shown = true">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @foreach ($landingPage->sections->where('type', 'stats') as $section)
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $section->title }}</h2>
                    @if ($section->subtitle)
                        <p class="text-xl text-gray-600">{{ $section->subtitle }}</p>
                    @endif
                </div>

                <div class="grid md:grid-cols-4 gap-8 text-center">
                    @foreach ($landingPage->stats->where('is_active', true)->sortBy('order') as $stat)
                        <div class="bg-gradient-to-br from-blue-50 to-white rounded-lg p-6 shadow-lg" data-aos="fade-up"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            @if ($stat->icon)
                                <div class="text-blue-600 mb-4">
                                    <i class="{{ $stat->icon }} text-3xl"></i>
                                </div>
                            @endif
                            <div class="text-4xl font-bold text-gray-900 mb-2" x-text="shown ? '{{ $stat->value }}' : '0'"
                                x-transition:enter="transition ease-out duration-1000"
                                x-transition:enter-start="opacity-0 transform translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0">
                                {{ $stat->value }}
                            </div>
                            <p class="text-gray-600">{{ $stat->label }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <!-- Categories Section -->
    @if ($categories->count() > 0)
        <div class="bg-gray-50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kategori Produk</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        Pilih kategori yang sesuai dengan kebutuhan Anda
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                    @foreach ($categories as $category)
                        <a href="{{ route('front.produk-category.show', $category->slug) }}"
                            class="flex flex-col bg-white rounded-lg shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-shadow duration-300">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold leading-7 text-gray-900">{{ $category->name }}</h3>
                                @if ($category->description)
                                    <p class="mt-2 text-sm leading-6 text-gray-600 line-clamp-2">
                                        {{ $category->description }}</p>
                                @endif
                                <p class="mt-4 text-sm font-medium text-blue-600">
                                    {{ $category->produks_count }} Produk
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                @if ($categories->count() >= 6)
                    <div class="mt-10 text-center">
                        <a href="{{ route('front.produk-category.index') }}"
                            class="text-sm font-semibold leading-6 text-blue-600 hover:text-blue-500">
                            Lihat Semua Kategori <span aria-hidden="true">→</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif

    <!-- Services Section -->
    @if ($services->count() > 0)
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Layanan Kami</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        Berbagai layanan untuk memenuhi kebutuhan Anda
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @foreach ($services as $service)
                        <article
                            class="flex flex-col items-start bg-white rounded-lg shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-shadow duration-300">
                            <div class="p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="{{ $service->created_at->format('Y-m-d') }}" class="text-gray-500">
                                        {{ $service->created_at->format('d M Y') }}
                                    </time>
                                    <span
                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">
                                        {{-- {{ $service->category->name }} --}}
                                    </span>
                                </div>
                                <div class="group relative">
                                    <h3
                                        class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        <a href="{{ route('front.produk-layanan.show', $service->slug) }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $service->nama_produk }}
                                        </a>
                                    </h3>
                                    @if ($service->description)
                                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                            {{ $service->description }}</p>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                @if ($services->count() >= 6)
                    <div class="mt-10 text-center">
                        <a href="{{ route('front.produk-layanan.index') }}"
                            class="text-sm font-semibold leading-6 text-blue-600 hover:text-blue-500">
                            Lihat Semua Layanan <span aria-hidden="true">→</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif

    <!-- Products Section -->
    @if ($products->count() > 0)
        <div class="bg-gray-50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Produk Terbaru</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        Temukan produk-produk terbaru kami
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                    @foreach ($products as $product)
                        <article
                            class="flex flex-col items-start bg-white rounded-lg shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-shadow duration-300">
                            <div class="p-6 flex-1 w-full">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <span
                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">
                                        {{ $product->category->name }}
                                    </span>
                                </div>
                                <div class="group relative mt-3">
                                    <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        <a href="{{ route('front.produk.show', $product) }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $product->nama_produk }}
                                        </a>
                                    </h3>
                                    @if ($product->catatan_produk)
                                        <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">
                                            {{ $product->catatan_produk }}</p>
                                    @endif
                                </div>
                                {{-- @if ($product->fitur)
                                    <div class="mt-4">
                                        <h4 class="text-sm font-medium text-gray-900">Fitur:</h4>
                                        <ul class="mt-2 space-y-1">
                                            @foreach (array_slice($product->fitur, 0, 3) as $fitur)
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-blue-500 mr-2 flex-shrink-0" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">{{ $fitur }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}
                            </div>
                            <div class="px-6 pb-6 mt-auto w-full">
                                @if ($product->external_link)
                                    <a href="{{ $product->external_link }}" target="_blank"
                                        class="mt-4 block w-full rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500">
                                        Lihat Detail
                                    </a>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
                @if ($products->count() >= 8)
                    <div class="mt-10 text-center">
                        <a href="{{ route('front.produk.index') }}"
                            class="text-sm font-semibold leading-6 text-blue-600 hover:text-blue-500">
                            Lihat Semua Produk <span aria-hidden="true">→</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endsection
