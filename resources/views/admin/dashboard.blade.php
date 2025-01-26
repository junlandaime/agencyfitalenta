@extends('layouts.admin')

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
        <!-- Stats -->
        <div class="mt-8">
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-12 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-blue-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Kategori</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['categories'] }}</p>
                    </dd>
                </div>

                <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-12 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-blue-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Layanan</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['services'] }}</p>
                    </dd>
                </div>

                <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-12 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-blue-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Produk</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['products'] }}</p>
                    </dd>
                </div>

                <div class="relative overflow-hidden rounded-lg bg-white px-4 pt-5 pb-12 shadow sm:px-6 sm:pt-6">
                    <dt>
                        <div class="absolute rounded-md bg-green-500 p-3">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 truncate text-sm font-medium text-gray-500">Produk Aktif</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['active_products'] }}</p>
                    </dd>
                </div>
            </dl>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
            <!-- Latest Products -->
            <div class="bg-white shadow rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Produk Terbaru</h3>
                    <div class="mt-6 flow-root">
                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                            @forelse($latest_products as $product)
                                <li class="py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate">
                                                {{ $product->nama_produk }}
                                            </p>
                                            <p class="text-sm text-gray-500">
                                                {{ $product->category->name }}
                                            </p>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.produk.edit', $product) }}"
                                                class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4">
                                    <p class="text-sm text-gray-500 text-center">Belum ada produk</p>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('admin.produk.index') }}"
                            class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Lihat Semua
                        </a>
                    </div>
                </div>
            </div>

            <!-- Latest Services -->
            <div class="bg-white shadow rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Layanan Terbaru</h3>
                    <div class="mt-6 flow-root">
                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                            @forelse($latest_services as $service)
                                <li class="py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate">
                                                {{ $service->nama_produk }}
                                            </p>
                                            <p class="text-sm text-gray-500">
                                                {{-- {{ $service->category->name }} --}}
                                            </p>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.produk-layanan.edit', $service) }}"
                                                class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4">
                                    <p class="text-sm text-gray-500 text-center">Belum ada layanan</p>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('admin.produk-layanan.index') }}"
                            class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Lihat Semua
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
