@extends('layouts.front')

@section('title', '')

@push('skrip')
    
@endpush

@section('content')
    <!-- Hero Section with Dynamic Background -->
    <section class="relative bg-gradient-to-br from-blue-600 to-blue-800 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1551135049-8a33b5883817?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center opacity-20"></div>
            <div class="absolute inset-0 bg-blue-900 opacity-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block px-4 py-2 rounded-full bg-blue-500 bg-opacity-30 text-blue-100 text-sm font-semibold mb-6">
                        Welcome to FITALENTA
                    </span>
                    <h1 class="text-5xl font-bold text-white mb-6 leading-tight">
                        Transform Your Business with Strategic Partnerships
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Join our network of innovative businesses and access top talent, cutting-edge solutions, and endless growth opportunities.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-50 transition-all duration-300 transform hover:scale-105">
                            Get Started
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300">
                            Learn More
                        </button>
                    </div>
                </div>
                <div data-aos="fade-left" class="hidden md:block relative">
                    <!-- Stats Cards -->
                    <div class="absolute top-0 right-0 bg-white rounded-lg shadow-xl p-6 transform -translate-y-1/4 translate-x-1/4 z-50">
                        <div class="text-4xl font-bold text-blue-600">500+</div>
                        <div class="text-gray-600">Active Partners</div>
                    </div>
                    <div class="absolute bottom-0 left-0 bg-white rounded-lg shadow-xl p-6 transform translate-y-1/4 -translate-x-1/4 z-50">
                        <div class="text-4xl font-bold text-blue-600">95%</div>
                        <div class="text-gray-600">Success Rate</div>
                    </div>
                    <!-- Main Image -->
                    <img src="{{ asset('part.png') }}" class="rounded-lg shadow-2xl transform hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-600 text-sm font-semibold mb-4">
                    Our Services
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Comprehensive Solutions for Your Business</h2>
                <p class="text-xl text-gray-600">Choose from our range of specialized services designed to meet your business needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service Card 1 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-48">
                        <img src="https://picsum.photos/seed/service1/400/300" alt="Affiliate Filantropi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Affiliate Filantropi</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Partner with us in making a positive impact through strategic philanthropy initiatives.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                            Learn more
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-48">
                        <img src="https://picsum.photos/seed/service2/400/300" alt="Outsourcing Talenta" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Outsourcing Talenta</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Access our pool of skilled professionals to strengthen your business operations.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                            Learn more
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-48">
                        <img src="https://picsum.photos/seed/service3/400/300" alt="UMKM Partnership" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">UMKM Partnership</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Grow your small business with our comprehensive support and resources.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                            Learn more
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative h-48">
                        <img src="https://picsum.photos/seed/service4/400/300" alt="Financial Services" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Financial Services</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Access Islamic financial solutions tailored to your business needs.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                            Learn more
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Section -->
    <section class="py-20 bg-gradient-to-br from-blue-900 to-blue-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl font-bold text-white mb-2">500+</div>
                    <div class="text-blue-200">Business Partners</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-5xl font-bold text-white mb-2">1000+</div>
                    <div class="text-blue-200">Projects Completed</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-5xl font-bold text-white mb-2">95%</div>
                    <div class="text-blue-200">Success Rate</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-5xl font-bold text-white mb-2">24/7</div>
                    <div class="text-blue-200">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Stats Section with Animated Counters -->
<section x-data="{
    stats: [
        { label: 'Active Users', value: 0, target: 15000, prefix: '', suffix: '+' },
        { label: 'Success Rate', value: 0, target: 95, prefix: '', suffix: '%' },
        { label: 'Projects Done', value: 0, target: 500, prefix: '', suffix: '+' },
        { label: 'Team Members', value: 0, target: 100, prefix: '', suffix: '+' }
    ],
    animateValue(index) {
        const stat = this.stats[index];
        const duration = 2000;
        const steps = 60;
        const stepValue = stat.target / steps;
        let current = 0;
        
        const timer = setInterval(() => {
            current += stepValue;
            if (current >= stat.target) {
                stat.value = stat.target;
                clearInterval(timer);
            } else {
                stat.value = Math.floor(current);
            }
        }, duration / steps);
    },
    init() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.stats.forEach((_, index) => this.animateValue(index));
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(this.$el);
    }
}" class="relative py-20 overflow-hidden">
    <!-- Background with gradient and pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-blue-700">
        <div class="absolute inset-0 bg-blue-900 opacity-50"></div>
        <div class="absolute inset-0 opacity-20">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5" />
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>
    </div>

    <!-- Content Container -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-2 rounded-full bg-blue-500 bg-opacity-30 text-blue-100 text-sm font-semibold mb-4">
                Our Achievements
            </span>
            <h2 class="text-4xl font-bold text-white mb-6">Driving Success Through Numbers</h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                We take pride in our accomplishments and the trust our partners place in us
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <template x-for="(stat, index) in stats" :key="index">
                <div class="group" 
                     data-aos="fade-up" 
                     :data-aos-delay="100 * index">
                    <div class="relative bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm transform hover:-translate-y-2 transition-all duration-300">
                        <!-- Animated Number -->
                        <div class="flex justify-center items-baseline mb-2">
                            <span class="text-4xl md:text-5xl font-bold text-white" 
                                  x-text="stat.prefix + stat.value.toLocaleString() + stat.suffix"></span>
                        </div>
                        <!-- Label -->
                        <div class="text-center text-blue-200 font-medium" x-text="stat.label"></div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute top-0 right-0 -mt-2 -mr-2 w-20 h-20 bg-blue-500 bg-opacity-20 rounded-full blur-xl group-hover:bg-opacity-30 transition-all duration-300"></div>
                        <div class="absolute bottom-0 left-0 -mb-2 -ml-2 w-16 h-16 bg-blue-400 bg-opacity-20 rounded-full blur-lg group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

    <!-- Latest News -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-600 text-sm font-semibold mb-4">
                    Latest News
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Stay Updated with FITALENTA</h2>
                <p class="text-xl text-gray-600">Discover the latest updates, insights, and success stories</p>
            </div>
        </div>
        
        <div class="relative overflow-hidden">
            <div class="flex overflow-x-auto pb-8 gap-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto snap-x">
                <!-- News Card 1 -->
                <div class="flex-none w-full sm:w-1/2 lg:w-1/3 snap-start" data-aos="fade-up">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="https://picsum.photos/seed/news1/800/400" alt="News 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">March 15, 2024</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Expanding Our Partner Network Across Indonesia</h3>
                            <p class="text-gray-600 mb-4">Learn about our latest initiatives to support businesses across the archipelago.</p>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                Read more
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="flex-none w-full sm:w-1/2 lg:w-1/3 snap-start" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="https://picsum.photos/seed/news2/800/400" alt="News 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">March 10, 2024</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">New Financial Services Launch</h3>
                            <p class="text-gray-600 mb-4">Discover our latest Islamic financial products designed for modern businesses.</p>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                Read more
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="flex-none w-full sm:w-1/2 lg:w-1/3 snap-start" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="https://picsum.photos/seed/news3/800/400" alt="News 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">March 5, 2024</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">UMKM Success Stories</h3>
                            <p class="text-gray-600 mb-4">Read about how our partners achieved growth through our UMKM program.</p>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                Read more
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-600 text-sm font-semibold mb-4">
                        Contact Us
                    </span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Let's Start a Conversation</h2>
                    <p class="text-xl text-gray-600 mb-8">Ready to transform your business? Get in touch with our team to explore partnership opportunities.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Phone</h3>
                                <p class="text-gray-600">+62 123 4567 890</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                                <p class="text-gray-600">contact@fitalenta.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Office</h3>
                                <p class="text-gray-600">Jl. Business Center No. 123<br>Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <form class="bg-white rounded-xl shadow-lg p-8">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Subject</label>
                                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection
