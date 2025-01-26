<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 bg-white/80 backdrop-blur-md shadow-sm z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('front.home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">Fitalenta</span>
                    <span class="text-gray-500">.id</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('front.home') }}"
                    class="text-gray-600 hover:text-blue-600 {{ request()->routeIs('front.home') ? 'text-blue-600' : '' }}">
                    Beranda
                </a>
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('front.produk-layanan.index') }}">
                        <button
                            class="inline-flex items-center text-gray-600 hover:text-blue-600 {{ request()->routeIs('produk-layanan.*') ? 'text-blue-600' : '' }}">
                            Produk dan Layanan
                            <svg :class="{ 'rotate-180': open }" class="ml-1 w-4 h-4 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </a>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                        @foreach ($headerProduk as $produk)
                            <a href="{{ route('front.produk-layanan.show', $produk->slug) }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 {{ request()->routeIs('produk-layanan.show') && request()->segment(2) == $produk->slug ? 'text-primary bg-gray-50 font-medium' : 'text-gray-600 hover:text-primary hover:bg-gray-50' }}">
                                {{ $produk->nama_produk }}
                            </a>
                        @endforeach
                    </div>
                </div>
                {{-- 
                <a href="{{ route('front.produk.index') }}"
                    class="text-gray-600 hover:text-blue-600 {{ request()->routeIs('produk.*') ? 'text-blue-600' : '' }}">
                    Produk
                </a> --}}
                {{-- <a href="{{ route('galleries.index') }}"
                    class="text-gray-600 hover:text-blue-600 {{ request()->routeIs('galleries.*') ? 'text-blue-600' : '' }}">
                    Galeri
                </a> --}}
                <a href="#" class="text-gray-600 hover:text-blue-600">Kontak</a>

                @auth
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 text-gray-600 hover:text-blue-600">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="px-4 py-2 text-gray-600 hover:text-blue-600">Masuk</a>
                    </div>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" :class="{ 'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="h-6 w-6" :class="{ 'block': mobileMenuOpen, 'hidden': !mobileMenuOpen }" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="lg:hidden" x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-1">
            <div class="space-y-1 pb-3 pt-2">
                <a href="{{ route('front.produk-category.index') }}"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">
                    Kategori
                </a>
                <a href="{{ route('front.produk-layanan.index') }}"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">
                    Layanan
                </a>
                <a href="{{ route('front.produk.index') }}"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">
                    Produk
                </a>
                @auth
                    <a href="{{ route('admin.dashboard') }}"
                        class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>
