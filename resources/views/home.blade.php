@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Fight From Diseases - Your Health, Your Priority | Disease Prevention & Wellness';
    $metaDescription = 'Join the fight against diseases. Get expert health tips, disease prevention strategies, and wellness resources to protect yourself and your loved ones. Start your health journey today.';
    $metaKeywords = 'health awareness, disease prevention, wellness, medical tips, health education, preventive healthcare, healthy living';
@endphp

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8]">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-[#9fd7e4] rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-[#b8e3ed] rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-[#9fd7e4] rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-5xl mx-auto text-center">
                <div class="fade-in">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                        Fight From <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0a4d78] to-[#9fd7e4]">Diseases</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-700 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Empowering communities through health awareness and disease prevention. Together, we can build a healthier future for everyone.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('contact') }}" class="px-8 py-4 bg-[#0a4d78] text-white rounded-lg font-semibold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                            Get Started Today
                        </a>
                        <a href="{{ route('about') }}" class="px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold text-lg border-2 border-gray-300 hover:border-[#0a4d78] hover:text-[#0a4d78] transition-all duration-300 shadow-lg hover:shadow-xl">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We provide comprehensive health resources and awareness to help you stay healthy and prevent diseases.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <div class="w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Expert Health Tips</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Access evidence-based health tips and strategies from medical professionals to maintain optimal wellness.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <div class="w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Health Education</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Comprehensive educational resources to help you understand diseases and how to prevent them effectively.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <div class="w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Community Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Join a supportive community dedicated to promoting health awareness and disease prevention.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a] text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">10K+</div>
                    <div class="text-xl text-[#9fd7e4]">Active Members</div>
                </div>
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">500+</div>
                    <div class="text-xl text-[#9fd7e4]">Health Resources</div>
                </div>
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">50+</div>
                    <div class="text-xl text-[#9fd7e4]">Expert Articles</div>
                </div>
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">24/7</div>
                    <div class="text-xl text-[#9fd7e4]">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a] rounded-3xl p-12 md:p-16 shadow-2xl slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Start Your Health Journey?</h2>
                <p class="text-xl text-[#9fd7e4] mb-8 max-w-2xl mx-auto">
                    Join thousands of people who are taking proactive steps towards better health and disease prevention.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Get Started Now
                </a>
            </div>
        </div>
    </section>
@endsection

