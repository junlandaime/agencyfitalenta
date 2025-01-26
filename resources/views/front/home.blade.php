@extends('layouts.front')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
            <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h1 class="mt-24 text-4xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-6xl">
                        Solusi Terbaik untuk Kebutuhan Anda
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        Temukan berbagai produk dan layanan berkualitas yang sesuai dengan kebutuhan Anda. Kami menyediakan
                        solusi terbaik dengan dukungan profesional.
                    </p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="{{ route('front.produk.index') }}"
                            class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                            Lihat Produk
                        </a>
                        <a href="{{ route('front.produk-layanan.index') }}"
                            class="text-sm font-semibold leading-6 text-gray-900">
                            Layanan Kami <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
