@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Health Resources - Fight From Diseases | Medical Information & Tools';
    $metaDescription = 'Access comprehensive health resources, medical information, and tools to help you make informed healthcare decisions. Your trusted source for health information.';
    $metaKeywords = 'health resources, medical information, healthcare tools, health education, medical resources';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#9fd7e4] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#b8e3ed] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Health Resources</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Comprehensive health information, medical tools, and resources to support your healthcare journey.
                </p>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Medical Guides</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Comprehensive guides on various medical conditions, treatments, and procedures to help you understand your healthcare options.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Treatment Information</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Detailed information about medical treatments, procedures, and therapies available in India for international patients.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Hospital Directory</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Access our directory of partner hospitals with detailed information about facilities, specialities, and services.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Cost Calculator</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Estimate treatment costs and compare prices across different hospitals and procedures in India.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Travel Guide</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Essential travel information, visa requirements, and accommodation options for medical tourists visiting India.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Appointment Booking</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Schedule consultations with top medical specialists and hospitals through our convenient booking system.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white slide-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Need More Information?</h2>
                <p class="text-xl text-[#9fd7e4] mb-8">
                    Our team is here to help you access the health resources you need.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection

