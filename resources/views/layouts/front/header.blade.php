<header x-data="{ mobileMenuOpen: false }" class="bg-white shadow-sm">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex">
                <a href="{{ route('front.home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">{{ config('app.name') }}</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:items-center lg:space-x-6">
                <a href="{{ route('front.produk-category.index') }}" 
                   class="text-sm font-medium text-gray-700 hover:text-blue-600">
                    Kategori
                </a>
                <a href="{{ route('front.produk-layanan.index') }}" 
                   class="text-sm font-medium text-gray-700 hover:text-blue-600">
                    Layanan
                </a>
                <a href="{{ route('front.produk.index') }}" 
                   class="text-sm font-medium text-gray-700 hover:text-blue-600">
                    Produk
                </a>
                @auth
                    <a href="{{ route('admin.dashboard') }}" 
                       class="text-sm font-medium text-gray-700 hover:text-blue-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="text-sm font-medium text-gray-700 hover:text-blue-600">
                        Login
                    </a>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" 
                         :class="{'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }"
                         fill="none" 
                         viewBox="0 0 24 24" 
                         stroke-width="1.5" 
                         stroke="currentColor" 
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="h-6 w-6" 
                         :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen }"
                         fill="none" 
                         viewBox="0 0 24 24" 
                         stroke-width="1.5" 
                         stroke="currentColor" 
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="lg:hidden" 
             x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
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
