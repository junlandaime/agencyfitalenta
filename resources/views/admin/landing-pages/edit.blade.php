@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-800">
                        Edit Landing Page
                    </h1>
                </div>

            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <form action="{{ route('admin.landing-pages.update', $landingPage) }}" method="POST"
                    enctype="multipart/form-data" class="p-6 space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="space-y-6">
                        <div>
                            <label for="hero_title" class="block text-sm font-medium text-gray-700">Hero Title</label>
                            <input type="text" name="hero_title" id="hero_title"
                                value="{{ old('hero_title', $landingPage->hero_title) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            @error('hero_title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="hero_subtitle" class="block text-sm font-medium text-gray-700">Hero Subtitle</label>
                            <textarea name="hero_subtitle" id="hero_subtitle" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('hero_subtitle', $landingPage->hero_subtitle) }}</textarea>
                            @error('hero_subtitle')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="hero_image" class="block text-sm font-medium text-gray-700">Hero Image</label>
                            @if ($landingPage->hero_image)
                                <div class="mt-2 mb-4">
                                    <img src="{{ $landingPage->hero_image_url }}" alt="Hero Image"
                                        class="h-48 w-auto object-cover rounded-lg">
                                </div>
                            @endif
                            <input type="file" name="hero_image" id="hero_image" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-md file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-blue-50 file:text-blue-700
                                      hover:file:bg-blue-100">
                            <p class="mt-1 text-sm text-gray-500">
                                Leave empty to keep current image. Recommended size: 1920x1080px. Max size: 2MB
                            </p>
                            @error('hero_image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="hero_rating" class="block text-sm font-medium text-gray-700">Hero Rating</label>
                                <input type="number" step="0.1" min="0" max="5" name="hero_rating"
                                    id="hero_rating" value="{{ old('hero_rating', $landingPage->hero_rating) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('hero_rating')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hero_rating_count" class="block text-sm font-medium text-gray-700">Rating
                                    Count</label>
                                <input type="number" min="0" name="hero_rating_count" id="hero_rating_count"
                                    value="{{ old('hero_rating_count', $landingPage->hero_rating_count) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('hero_rating_count')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="hero_cta_primary_text" class="block text-sm font-medium text-gray-700">Primary
                                    CTA Text</label>
                                <input type="text" name="hero_cta_primary_text" id="hero_cta_primary_text"
                                    value="{{ old('hero_cta_primary_text', $landingPage->hero_cta_primary_text) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('hero_cta_primary_text')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hero_cta_primary_url" class="block text-sm font-medium text-gray-700">Primary
                                    CTA URL</label>
                                <input type="text" name="hero_cta_primary_url" id="hero_cta_primary_url"
                                    value="{{ old('hero_cta_primary_url', $landingPage->hero_cta_primary_url) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('hero_cta_primary_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="hero_cta_secondary_text"
                                    class="block text-sm font-medium text-gray-700">Secondary CTA Text</label>
                                <input type="text" name="hero_cta_secondary_text" id="hero_cta_secondary_text"
                                    value="{{ old('hero_cta_secondary_text', $landingPage->hero_cta_secondary_text) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('hero_cta_secondary_text')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hero_cta_secondary_url"
                                    class="block text-sm font-medium text-gray-700">Secondary CTA URL</label>
                                <input type="text" name="hero_cta_secondary_url" id="hero_cta_secondary_url"
                                    value="{{ old('hero_cta_secondary_url', $landingPage->hero_cta_secondary_url) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('hero_cta_secondary_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="is_active" id="is_active" value="1"
                                {{ old('is_active', $landingPage->is_active) ? 'checked' : '' }}
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="is_active" class="ml-2 block text-sm text-gray-700">
                                Active
                            </label>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <!-- Social Media -->
                            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                                <div class="p-6">
                                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Social Media</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label for="social_facebook"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook
                                                URL</label>
                                            <input type="url" id="social_facebook" name="social_facebook"
                                                value="{{ old('social_facebook', $landingPage->social_facebook ?? '') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="https://facebook.com/yourusername">
                                            @error('social_facebook')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="social_twitter"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Twitter
                                                URL</label>
                                            <input type="url" id="social_twitter" name="social_twitter"
                                                value="{{ old('social_twitter', $landingPage->social_twitter ?? '') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="https://twitter.com/yourusername">
                                            @error('social_twitter')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="social_instagram"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram
                                                URL</label>
                                            <input type="url" id="social_instagram" name="social_instagram"
                                                value="{{ old('social_instagram', $landingPage->social_instagram ?? '') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="https://instagram.com/yourusername">
                                            @error('social_instagram')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="social_linkedin"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Linkedin
                                                URL</label>
                                            <input type="url" id="social_linkedin" name="social_linkedin"
                                                value="{{ old('social_linkedin', $landingPage->social_linkedin ?? '') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="https://youtube.com/yourchannel">
                                            @error('social_linkedin')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer & SEO -->
                            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                                <div class="p-6">
                                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Footer & SEO</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label for="footer_description"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Footer
                                                Text</label>
                                            <textarea id="footer_description" name="footer_description" rows="3"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{ old('footer_description', $landingPage->footer_description ?? '') }}</textarea>
                                            @error('footer_description')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="meta_title"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                                Title</label>
                                            <input type="text" id="meta_title" name="meta_title"
                                                value="{{ old('meta_title', $landingPage->meta_title ?? '') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                            @error('meta_title')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="meta_description"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                                Description</label>
                                            <textarea id="meta_description" name="meta_description" rows="3"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{ old('meta_description', $landingPage->meta_description ?? '') }}</textarea>
                                            @error('meta_description')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="meta_keywords"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                                Keywords</label>
                                            <input type="text" id="meta_keywords" name="meta_keywords"
                                                value="{{ old('meta_keywords', $landingPage->meta_keywords ?? '') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primer-500 focus:border-primer-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="keyword1, keyword2, keyword3">
                                            @error('meta_keywords')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="flex justify-end space-x-3">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update Landing Page
                            </button>
                        </div>
                    </div>


                </form>
            </div>

            <!-- Sections -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Sections</h2>
                    <a href="{{ route('admin.landing-pages.sections.create') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Section
                    </a>
                </div>

                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <ul class="divide-y divide-gray-200">
                        @forelse($landingPage->sections as $section)
                            <li>
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            @if ($section->image)
                                                <img src="{{ Storage::url($section->image) }}"
                                                    alt="{{ $section->title }}"
                                                    class="h-12 w-12 rounded-lg object-cover mr-4">
                                            @endif
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">
                                                    {{ $section->title }}
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    {{ $section->type }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.landing-pages.sections.edit', $section) }}"
                                                class="inline-flex items-center px-3 py-1 border border-transparent rounded-md text-sm font-medium text-blue-600 hover:text-blue-800">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.landing-pages.sections.delete', $section) }}"
                                                method="POST" class="inline-block"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-4 sm:px-6 text-center text-gray-500">
                                No sections found.
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Features -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Features</h2>
                    <a href="{{ route('admin.landing-pages.features.create') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Feature
                    </a>
                </div>

                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <ul class="divide-y divide-gray-200">
                        @forelse($landingPage->features as $feature)
                            <li>
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            @if ($feature->icon)
                                                <i class="{{ $feature->icon }} text-2xl text-gray-500 mr-4"></i>
                                            @endif
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">
                                                    {{ $feature->title }}
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    {{ Str::limit($feature->description, 100) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.landing-pages.features.edit', $feature) }}"
                                                class="inline-flex items-center px-3 py-1 border border-transparent rounded-md text-sm font-medium text-blue-600 hover:text-blue-800">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.landing-pages.features.delete', $feature) }}"
                                                method="POST" class="inline-block"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-4 sm:px-6 text-center text-gray-500">
                                No features found.
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Stats -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Statistics</h2>
                    <a href="{{ route('admin.landing-pages.stats.create') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Statistic
                    </a>
                </div>

                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <ul class="divide-y divide-gray-200">
                        @forelse($landingPage->stats as $stat)
                            <li>
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            @if ($stat->icon)
                                                <i class="{{ $stat->icon }} text-2xl text-gray-500 mr-4"></i>
                                            @endif
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">
                                                    {{ $stat->label }}
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    {{ $stat->value }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.landing-pages.stats.edit', $stat) }}"
                                                class="inline-flex items-center px-3 py-1 border border-transparent rounded-md text-sm font-medium text-blue-600 hover:text-blue-800">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.landing-pages.stats.delete', $stat) }}"
                                                method="POST" class="inline-block"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-4 sm:px-6 text-center text-gray-500">
                                No statistics found.
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

<template id="section-template">
    <div class="bg-white border rounded-lg shadow-sm mb-4">
        <div class="p-4">
            <form class="section-form">
                <input type="hidden" name="id" value="">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Type</label>
                        <select name="type" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="content">Content</option>
                            <option value="features">Features</option>
                            <option value="stats">Stats</option>
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Subtitle</label>
                    <input type="text" name="subtitle"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea name="content" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" accept="image/*"
                        class="mt-1 block w-full text-sm text-gray-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-md file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Order</label>
                    <input type="number" name="order" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mt-4 flex items-center">
                    <input type="checkbox" name="is_active" value="1"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label class="ml-2 block text-sm text-gray-700">
                        Active
                    </label>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Save Section
                    </button>
                    <button type="button"
                        class="delete-section inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<template id="feature-template">
    <div class="bg-white border rounded-lg shadow-sm mb-4">
        <div class="p-4">
            <form class="feature-form">
                <input type="hidden" name="id" value="">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Icon</label>
                        <input type="text" name="icon"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" rows="2" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Order</label>
                    <input type="number" name="order" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mt-4 flex items-center">
                    <input type="checkbox" name="is_active" value="1"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label class="ml-2 block text-sm text-gray-700">
                        Active
                    </label>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Save Feature
                    </button>
                    <button type="button"
                        class="delete-feature inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<template id="stat-template">
    <div class="bg-white border rounded-lg shadow-sm mb-4">
        <div class="p-4">
            <form class="stat-form">
                <input type="hidden" name="id" value="">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Label</label>
                        <input type="text" name="label" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Value</label>
                        <input type="text" name="value" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Icon</label>
                    <input type="text" name="icon"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Order</label>
                    <input type="number" name="order" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="mt-4 flex items-center">
                    <input type="checkbox" name="is_active" value="1"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label class="ml-2 block text-sm text-gray-700">
                        Active
                    </label>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Save Stat
                    </button>
                    <button type="button"
                        class="delete-stat inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

@push('scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // CSRF Token setup for AJAX requests
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Utility functions
            function showNotification(message, type = 'success') {
                // Implement your notification system here
                alert(message);
            }

            function serializeForm(form) {
                const formData = new FormData(form);
                const data = {};
                for (let [key, value] of formData.entries()) {
                    if (key === 'is_active') {
                        data[key] = value === '1';
                    } else {
                        data[key] = value;
                    }
                }
                return data;
            }

            // Sections handling
            function setupSectionHandlers() {
                const container = document.getElementById('sections-container');
                const template = document.getElementById('section-template');
                const addButton = document.getElementById('add-section');

                if (!container || !template || !addButton) return;

                // Add new section
                addButton.addEventListener('click', () => {
                    const clone = template.content.cloneNode(true);
                    container.appendChild(clone);
                    setupFormHandlers();
                });

                // Setup existing forms
                setupFormHandlers();

                function setupFormHandlers() {
                    document.querySelectorAll('.section-form').forEach(form => {
                        if (form.dataset.initialized) return;
                        form.dataset.initialized = 'true';

                        form.addEventListener('submit', async (e) => {
                            e.preventDefault();
                            const sections = Array.from(document.querySelectorAll(
                                '.section-form')).map(form => serializeForm(form));

                            try {
                                const response = await fetch('/admin/landing-pages/sections', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    body: JSON.stringify({
                                        sections
                                    })
                                });

                                if (!response.ok) throw new Error(
                                    'Network response was not ok');
                                const data = await response.json();
                                showNotification(data.message);
                            } catch (error) {
                                showNotification('Error updating sections', 'error');
                                console.error('Error:', error);
                            }
                        });

                        form.querySelector('.delete-section')?.addEventListener('click', async () => {
                            if (confirm('Are you sure you want to delete this section?')) {
                                form.closest('.bg-white').remove();
                            }
                        });
                    });
                }
            }

            // Features handling
            function setupFeatureHandlers() {
                const container = document.getElementById('features-container');
                const template = document.getElementById('feature-template');
                const addButton = document.getElementById('add-feature');

                if (!container || !template || !addButton) return;

                // Add new feature
                addButton.addEventListener('click', () => {
                    const clone = template.content.cloneNode(true);
                    container.appendChild(clone);
                    setupFormHandlers();
                });

                // Setup existing forms
                setupFormHandlers();

                function setupFormHandlers() {
                    document.querySelectorAll('.feature-form').forEach(form => {
                        if (form.dataset.initialized) return;
                        form.dataset.initialized = 'true';

                        form.addEventListener('submit', async (e) => {
                            e.preventDefault();
                            const features = Array.from(document.querySelectorAll(
                                '.feature-form')).map(form => serializeForm(form));

                            try {
                                const response = await fetch('/admin/landing-pages/features', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    body: JSON.stringify({
                                        features
                                    })
                                });

                                if (!response.ok) throw new Error(
                                    'Network response was not ok');
                                const data = await response.json();
                                showNotification(data.message);
                            } catch (error) {
                                showNotification('Error updating features', 'error');
                                console.error('Error:', error);
                            }
                        });

                        form.querySelector('.delete-feature')?.addEventListener('click', async () => {
                            if (confirm('Are you sure you want to delete this feature?')) {
                                form.closest('.bg-white').remove();
                            }
                        });
                    });
                }
            }

            // Stats handling
            function setupStatHandlers() {
                const container = document.getElementById('stats-container');
                const template = document.getElementById('stat-template');
                const addButton = document.getElementById('add-stat');

                if (!container || !template || !addButton) return;

                // Add new stat
                addButton.addEventListener('click', () => {
                    const clone = template.content.cloneNode(true);
                    container.appendChild(clone);
                    setupFormHandlers();
                });

                // Setup existing forms
                setupFormHandlers();

                function setupFormHandlers() {
                    document.querySelectorAll('.stat-form').forEach(form => {
                        if (form.dataset.initialized) return;
                        form.dataset.initialized = 'true';

                        form.addEventListener('submit', async (e) => {
                            e.preventDefault();
                            const stats = Array.from(document.querySelectorAll('.stat-form'))
                                .map(form => serializeForm(form));

                            try {
                                const response = await fetch('/admin/landing-pages/stats', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    body: JSON.stringify({
                                        stats
                                    })
                                });

                                if (!response.ok) throw new Error(
                                    'Network response was not ok');
                                const data = await response.json();
                                showNotification(data.message);
                            } catch (error) {
                                showNotification('Error updating stats', 'error');
                                console.error('Error:', error);
                            }
                        });

                        form.querySelector('.delete-stat')?.addEventListener('click', async () => {
                            if (confirm('Are you sure you want to delete this stat?')) {
                                form.closest('.bg-white').remove();
                            }
                        });
                    });
                }
            }

            // Initialize all handlers
            setupSectionHandlers();
            setupFeatureHandlers();
            setupStatHandlers();
        });
    </script> --}}
@endpush
