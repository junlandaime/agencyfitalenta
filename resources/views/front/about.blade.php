@extends('layouts.front')

@section('title', 'Daftar Kandidat')

@push('styles')
<style>
    .logos-slide {
        animation: slide 30s linear infinite;
        will-change: transform;
    }
    
    .logo-track {
        display: flex;
        width: max-content;
    }
    
    .logos-container:hover .logos-slide {
        animation-play-state: paused;
    }
    
    @keyframes slide {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-50%));
        }
    }
</style>
@endpush

@section('content')


<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-blue-600 to-blue-800 overflow-hidden pt-24">
    <div class="absolute inset-0">
        <img src="https://picsum.photos/seed/business/1920/600" alt="Business Background" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-blue-900 opacity-50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                About Us
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                Comprehensive business services designed to help your organization thrive in today's competitive market.
            </p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
            <li>
                <a href="#" class="text-gray-500 hover:text-gray-700">Home</a>
            </li>
            <li>
                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <span class="text-gray-700 font-medium">Business Services</span>
            </li>
        </ol>
    </nav>
</div>

<section class="py-16 overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Partner yang telah mempercayai kami
            </h2>
        </div>

        <!-- First Row of Logos -->
        <div class="logos-container relative mb-8 overflow-hidden">
            <div class="logos-slide logo-track">
                <!-- First set of logos -->
                <div class="flex shrink-0 items-center justify-around min-w-full">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 1" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 2" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 3" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 4" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 5" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 6" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 7" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 8" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <!-- Duplicate first set for seamless loop -->
                <div class="flex shrink-0 items-center justify-around min-w-full">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 1" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 2" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 3" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 4" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 5" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 6" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 7" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 8" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                </div>
            </div>
        </div>

        <!-- Second Row of Logos -->
        <div class="logos-container relative overflow-hidden">
            <div class="logos-slide logo-track" style="animation-direction: reverse;">
                <!-- First set of logos -->
                <div class="flex shrink-0 items-center justify-around min-w-full">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 9" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 10" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 11" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 12" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 13" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 14" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 15" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 16" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <!-- Duplicate second set for seamless loop -->
                <div class="flex shrink-0 items-center justify-around min-w-full">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 9" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 10" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 11" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 12" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 13" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 14" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 15" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="{{ asset('logo-salman.png') }}" alt="Logo 16" class="h-12 w-auto mx-4 grayscale hover:grayscale-0 transition-all duration-300">
                </div>
            </div>
        </div>
    </div>
</section>

<div x-data="{
    currentSlide: 0,
    slides: [
        {
            title: 'Social Media Handling',
            client: 'DJPPR Kementerian Keuangan',
            logo: '/api/placeholder/120/40',
            images: [
                '/api/placeholder/600/400',
                '/api/placeholder/600/400',
                '/api/placeholder/600/400'
            ],
            stats: [
                { value: '25M+', label: 'Impression', desc: 'Total dari semua campaign akun yang terafiliasi' },
                { value: '16K+', label: 'New Followers', desc: 'Total dari semua social media akun yang terafiliasi' },
                { value: '1.3K+', label: 'Content', desc: 'Total content yang ada di Social Media akun yang terafiliasi' },
                { value: '9.6%', label: 'Engagement Rate', desc: 'Tingkat interaksi audience terhadap akun yang terafiliasi' }
            ]
        },
        {
            title: 'Brand Campaign',
            client: 'Client Example',
            logo: '/api/placeholder/120/40',
            images: [
                '/api/placeholder/600/400',
                '/api/placeholder/600/400',
                '/api/placeholder/600/400'
            ],
            stats: [
                { value: '15M+', label: 'Reach', desc: 'Total campaign reach across all platforms' },
                { value: '8K+', label: 'Engagements', desc: 'Total engagement from campaign activities' },
                { value: '500+', label: 'Posts', desc: 'Total content pieces created and published' },
                { value: '12%', label: 'Conversion Rate', desc: 'Average conversion rate from campaign' }
            ]
        }
    ]
}" class="max-w-7xl mx-auto">
    <div class="mb-12 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Portfolio kami</h2>
    </div>

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-full"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform translate-x-0"
                 x-transition:leave-end="opacity-0 transform -translate-x-full"
                 class="grid md:grid-cols-2 gap-8 p-8">
                
                <!-- Image Slider -->
                <div x-data="{ activeImage: 0 }" class="relative rounded-xl overflow-hidden">
                    <template x-for="(image, imgIndex) in slide.images" :key="imgIndex">
                        <img :src="image" 
                             x-show="activeImage === imgIndex"
                             class="w-full h-[400px] object-cover"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100">
                    </template>
                    
                    <!-- Image Navigation -->
                    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                        <template x-for="(image, imgIndex) in slide.images" :key="imgIndex">
                            <button @click="activeImage = imgIndex"
                                    :class="{'bg-white': activeImage === imgIndex, 'bg-white/50': activeImage !== imgIndex}"
                                    class="w-2 h-2 rounded-full transition-all duration-300"></button>
                        </template>
                    </div>
                </div>

                <!-- Content -->
                <div class="space-y-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900" x-text="slide.title"></h3>
                            <p class="text-gray-600 mt-2" x-text="slide.client"></p>
                        </div>
                        <img :src="slide.logo" class="h-10">
                    </div>

                    <div class="grid grid-cols-1 gap-6">
                        <template x-for="(stat, statIndex) in slide.stats" :key="statIndex">
                            <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                                <div class="text-3xl font-bold text-blue-600" x-text="stat.value"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-900" x-text="stat.label"></h4>
                                    <p class="text-sm text-gray-600 mt-1" x-text="stat.desc"></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </template>

        <!-- Slider Navigation -->
        <div class="flex justify-between p-4 bg-gray-50">
            <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length"
                    class="p-2 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <div class="flex space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="currentSlide = index"
                            :class="{'bg-blue-600': currentSlide === index, 'bg-gray-300': currentSlide !== index}"
                            class="w-3 h-3 rounded-full transition-all duration-300"></button>
                </template>
            </div>
            <button @click="currentSlide = (currentSlide + 1) % slides.length"
                    class="p-2 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-blue-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Transform Your Business?</h2>
            <p class="text-xl text-blue-100 mb-8">Let's discuss how our services can help you achieve your business goals.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">
                    Get Started
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
