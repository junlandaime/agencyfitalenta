@extends('layouts.front')

@section('title', 'Daftar Kandidat')

@push('skrip')
    
@endpush

@section('content')
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

<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-blue-600 to-blue-800 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://picsum.photos/seed/business/1920/600" alt="Business Background" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-blue-900 opacity-50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Business Solutions
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                Comprehensive business services designed to help your organization thrive in today's competitive market.
            </p>
        </div>
    </div>
</div>

<!-- Overview Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Why Choose Our Business Services?</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Expert Consultation</h3>
                            <p class="mt-2 text-gray-600">Access to industry experts and consultants with proven track records.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Tailored Solutions</h3>
                            <p class="mt-2 text-gray-600">Customized strategies that align with your business goals and values.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Syariah Compliant</h3>
                            <p class="mt-2 text-gray-600">All services follow Islamic business principles and ethics.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="relative">
                <img src="https://picsum.photos/seed/overview/600/400" alt="Business Overview" class="rounded-lg shadow-xl">
                <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-6 rounded-lg shadow-lg">
                    <div class="text-3xl font-bold">15+</div>
                    <div class="text-sm">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Grid -->
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Our Business Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <img src="https://picsum.photos/seed/consulting/400/200" alt="Business Consulting" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Business Consulting</h3>
                    <p class="text-gray-600 mb-4">Strategic guidance and expert advice to optimize your business operations.</p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                        Learn more
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <img src="https://picsum.photos/seed/financial/400/200" alt="Financial Services" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Financial Services</h3>
                    <p class="text-gray-600 mb-4">Syariah-compliant financial solutions for sustainable business growth.</p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                        Learn more
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <img src="https://picsum.photos/seed/digital/400/200" alt="Digital Transformation" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Digital Transformation</h3>
                    <p class="text-gray-600 mb-4">Modernize your business with cutting-edge digital solutions.</p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                        Learn more
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Sticky Nav Section --}}
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sticky Sidebar -->
        <div x-data="{
            activeSection: 'overview',
            sections: ['overview', 'instructor', 'curriculum', 'tools', 'alumni', 'tuition', 'registration', 'faq'],
            isInView(section) {
                const el = document.getElementById(section);
                if (!el) return false;
                const rect = el.getBoundingClientRect();
                return rect.top <= 100 && rect.bottom >= 100;
            },
            init() {
                window.addEventListener('scroll', () => {
                    this.sections.forEach(section => {
                        if (this.isInView(section)) {
                            this.activeSection = section;
                        }
                    });
                });
            }
        }" class="hidden lg:block">
            <div class="sticky top-24 space-y-6 bg-white rounded-2xl shadow-lg p-6">
                <div class="border-b pb-4">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Full-Stack Digital Marketing Bootcamp
                    </h3>
                </div>
                
                <nav class="flex flex-col space-y-2">
                    <template x-for="(section, index) in sections" :key="index">
                        <a :href="'#' + section"
                           @click.prevent="document.getElementById(section).scrollIntoView({behavior: 'smooth'})"
                           class="px-4 py-2 rounded-lg transition-all duration-200"
                           :class="activeSection === section ? 
                                  'bg-blue-50 text-blue-600 font-medium' : 
                                  'text-gray-600 hover:bg-gray-50 hover:text-gray-900'"
                           x-text="section.charAt(0).toUpperCase() + section.slice(1)">
                        </a>
                    </template>
                </nav>
                
                <div class="border-t pt-6">
                    <a href="#register" 
                       class="block w-full px-4 py-3 text-center bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors duration-200">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Main Content (for demo) -->
        <div class="lg:col-span-3 space-y-32">
            <section id="overview" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Overview</h2>
                <p class="text-gray-600">Content for overview section...</p>
            </section>
            
            <section id="instructor" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Instructor</h2>
                <p class="text-gray-600">Content for instructor section...</p>
            </section>
            
            <section id="curriculum" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Curriculum</h2>
                <p class="text-gray-600">Content for curriculum section...</p>
            </section>
            
            <section id="tools" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Tools</h2>
                <p class="text-gray-600">Content for tools section...</p>
            </section>
            
            <section id="alumni" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Alumni & Previous</h2>
                <p class="text-gray-600">Content for alumni section...</p>
            </section>
            
            <section id="tuition" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Tuition</h2>
                <p class="text-gray-600">Content for tuition section...</p>
            </section>
            
            <section id="registration" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">Registration</h2>
                <p class="text-gray-600">Content for registration section...</p>
            </section>
            
            <section id="faq" class="min-h-screen">
                <h2 class="text-3xl font-bold mb-4">FAQ</h2>
                <p class="text-gray-600">Content for FAQ section...</p>
            </section>
        </div>
    </div>
</div>


<!-- Success Stories -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Success Stories</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Story 1 -->
            <div class="bg-gray-50 rounded-lg p-6" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <img src="https://picsum.photos/seed/client1/64/64" alt="Client" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">PT Maju Bersama</h4>
                        <p class="text-sm text-gray-600">Manufacturing Sector</p>
                    </div>
                </div>
                <p class="text-gray-600">"FITALENTA's business consulting services helped us optimize our operations and increase efficiency by 40%."</p>
            </div>

            <!-- Story 2 -->
            <div class="bg-gray-50 rounded-lg p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <img src="https://picsum.photos/seed/client2/64/64" alt="Client" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">CV Berkah Jaya</h4>
                        <p class="text-sm text-gray-600">Retail Business</p>
                    </div>
                </div>
                <p class="text-gray-600">"The financial solutions provided by FITALENTA enabled us to expand our business while staying true to Islamic principles."</p>
            </div>

            <!-- Story 3 -->
            <div class="bg-gray-50 rounded-lg p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4">
                    <img src="https://picsum.photos/seed/client3/64/64" alt="Client" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold">PT Tech Solusi</h4>
                        <p class="text-sm text-gray-600">Technology Company</p>
                    </div>
                </div>
                <p class="text-gray-600">"Digital transformation with FITALENTA has revolutionized our business processes and customer experience."</p>
            </div>
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
