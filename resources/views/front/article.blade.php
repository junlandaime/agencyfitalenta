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
                Article Us
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
                <span class="text-gray-700 font-medium">Artikel</span>
            </li>
        </ol>
    </nav>
</div>

<div class="container mx-auto px-4 py-8 lg:px-32">
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Featured Article -->
        <div class="md:col-span-2 bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="/api/placeholder/800/400" alt="Featured Article" class="w-full h-64 object-cover">
            <div class="p-6">
                <span class="text-sm text-pink-500 font-semibold uppercase tracking-wide">Featured</span>
                <h2 class="mt-2 text-2xl font-bold text-blueGray-800">Breaking New Ground in Web Development</h2>
                <p class="mt-2 text-blueGray-600">Explore the latest trends and innovations that are reshaping the digital landscape.</p>
                <div class="mt-4 flex items-center">
                    <img src="/api/placeholder/40/40" class="w-10 h-10 rounded-full mr-4" alt="Author">
                    <div>
                        <p class="text-blueGray-700 font-medium">Jane Doe</p>
                        <p class="text-blueGray-500 text-sm">Published on Nov 27, 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Articles -->
        <div class="space-y-6">
            <div x-data="{ categories: ['Technology', 'Design', 'Productivity'] }" class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-bold mb-4 text-blueGray-700">Article Categories</h3>
                <div class="space-y-2">
                    <template x-for="category in categories">
                        <a href="#" x-text="category" class="block text-blueGray-600 hover:text-pink-500 transition"></a>
                    </template>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-bold mb-4 text-blueGray-700">Latest Articles</h3>
                <ul class="space-y-4">
                    <li class="border-b pb-2 last:border-b-0">
                        <a href="#" class="text-blueGray-700 hover:text-pink-500 transition">The Future of AI</a>
                        <p class="text-sm text-blueGray-500">Nov 25, 2024</p>
                    </li>
                    <li class="border-b pb-2 last:border-b-0">
                        <a href="#" class="text-blueGray-700 hover:text-pink-500 transition">Sustainable Design Practices</a>
                        <p class="text-sm text-blueGray-500">Nov 22, 2024</p>
                    </li>
                    <li>
                        <a href="#" class="text-blueGray-700 hover:text-pink-500 transition">Remote Work Strategies</a>
                        <p class="text-sm text-blueGray-500">Nov 20, 2024</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Article Grid -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-6 text-blueGray-800">More Articles</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Article" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-blueGray-800">Machine Learning Basics</h3>
                    <p class="text-blueGray-600 text-sm mt-2">A comprehensive guide to understanding machine learning principles.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Article" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-blueGray-800">UX Design Trends</h3>
                    <p class="text-blueGray-600 text-sm mt-2">Exploring the latest user experience design innovations.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/api/placeholder/400/250" alt="Article" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-blueGray-800">Cybersecurity Essentials</h3>
                    <p class="text-blueGray-600 text-sm mt-2">Protecting your digital assets in an evolving threat landscape.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
