<header x-data="{ 
    isOpen: false,
    solutions: false,
    partners: false,
    toggleMenu() {
        this.isOpen = !this.isOpen;
        this.solutions = false;
        this.partners = false;
    }
}" class="md:fixed w-full bg-white shadow-lg rounded-xl z-50">
    <nav class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                    FITALENTA
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="inline-flex items-center text-gray-600 hover:text-blue-600 font-medium">
                        Solutions
                        <svg :class="{'rotate-180': open}" class="ml-1 w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                        <a href="{{ route('business') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-t-lg">Business Analytics</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Digital Transform</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-b-lg">Cloud Solutions</a>
                    </div>
                </div>
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="inline-flex items-center text-gray-600 hover:text-blue-600 font-medium">
                        Partners
                        <svg :class="{'rotate-180': open}" class="ml-1 w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-t-lg">Find Partners</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Become a Partner</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-b-lg">Partner Benefits</a>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 font-medium">About</a>
                <a href="{{ route('article') }}" class="text-gray-600 hover:text-blue-600 font-medium">Artikel</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Contact</a>
                <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-blue-600 font-medium bg-red-800 px-3 rounded-2xl">Admin</a>
            </div>

            <!-- Mobile Menu Button - Pulse Grid Style -->
            <div class="md:hidden">
                <button @click="toggleMenu()" 
                        class="w-12 h-12 relative focus:outline-none bg-blue-50 rounded-full hover:bg-blue-100 transition-colors">
                    <div class="w-6 h-6 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 grid grid-cols-2 gap-1">
                        <span class="w-2 h-2 bg-blue-600 rounded-full transform transition-all duration-300"
                              :class="isOpen ? 'scale-150' : ''"></span>
                        <span class="w-2 h-2 bg-blue-600 rounded-full transform transition-all duration-300 delay-100"
                              :class="isOpen ? 'scale-150' : ''"></span>
                        <span class="w-2 h-2 bg-blue-600 rounded-full transform transition-all duration-300 delay-200"
                              :class="isOpen ? 'scale-150' : ''"></span>
                        <span class="w-2 h-2 bg-blue-600 rounded-full transform transition-all duration-300 delay-300"
                              :class="isOpen ? 'scale-150' : ''"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" 
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <div class="relative" @mouseenter="solutions = true" @mouseleave="solutions = false">
                    <button class="w-full text-left px-3 py-2 flex items-center justify-between text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium">
                        <span>Solutions</span>
                        <svg :class="{'rotate-180': solutions}" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="solutions" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="px-4 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md">Business Analytics</a>
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md">Digital Transform</a>
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md">Cloud Solutions</a>
                    </div>
                </div>
                <div class="relative" @mouseenter="partners = true" @mouseleave="partners = false">
                    <button class="w-full text-left px-3 py-2 flex items-center justify-between text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium">
                        <span>Partners</span>
                        <svg :class="{'rotate-180': partners}" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="partners"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="px-4 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md">Find Partners</a>
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md">Become a Partner</a>
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md">Partner Benefits</a>
                    </div>
                </div>
                <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium">About</a>
                <a href="#" class="block px-3 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg font-medium">Contact</a>
            </div>
        </div>
    </nav>
</header>