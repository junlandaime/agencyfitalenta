<footer class="bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-2">
                    <h3 class="text-lg font-semibold text-gray-900">{{ config('app.name') }}</h3>
                    <p class="mt-4 text-sm text-gray-600 max-w-md">
                        Solusi terpercaya untuk kebutuhan produk dan layanan Anda. Kami menyediakan berbagai pilihan produk berkualitas dengan layanan terbaik.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase">Quick Links</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="{{ route('front.produk-category.index') }}" class="text-sm text-gray-600 hover:text-blue-600">
                                Kategori
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.produk-layanan.index') }}" class="text-sm text-gray-600 hover:text-blue-600">
                                Layanan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.produk.index') }}" class="text-sm text-gray-600 hover:text-blue-600">
                                Produk
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase">Contact</h3>
                    <ul class="mt-4 space-y-4">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            info@example.com
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            (123) 456-7890
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            123 Street Name, City, Country
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-200 py-8">
            <p class="text-sm text-gray-500 text-center">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
