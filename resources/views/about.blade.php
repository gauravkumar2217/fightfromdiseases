@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'About Us - Fight From Diseases | Our Mission & Vision';
    $metaDescription = 'Learn about Fight From Diseases - our mission to promote health awareness, disease prevention, and community wellness. Discover how we\'re making a difference.';
    $metaKeywords = 'about fight from diseases, health awareness mission, disease prevention organization, health education, wellness community';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#9fd7e4] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#b8e3ed] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">About Fight From Diseases</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    We are dedicated to empowering individuals and communities through comprehensive health awareness and disease prevention initiatives.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="slide-left">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Mission</h2>
                        <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                            At Fight From Diseases, our mission is to create a healthier world by providing accessible health education, promoting disease prevention strategies, and building supportive communities that prioritize wellness.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            We believe that knowledge is the first line of defense against diseases. Through our comprehensive resources and community-driven approach, we aim to empower individuals to take control of their health and make informed decisions.
                        </p>
                    </div>
                    <div class="slide-right">
                        <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] rounded-2xl p-8 shadow-xl">
                            <img src="https://img.freepik.com/free-vector/healthcare-professionals-team_23-2148486003.jpg" alt="Healthcare Team" class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="slide-right order-2 md:order-1">
                        <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] rounded-2xl p-8 shadow-xl">
                            <img src="https://img.freepik.com/free-vector/healthcare-medical-concept_23-2148486004.jpg" alt="Healthcare Vision" class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                    <div class="slide-left order-1 md:order-2">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Vision</h2>
                        <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                            We envision a world where every individual has access to reliable health information and the tools needed to prevent diseases before they occur.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Our goal is to bridge the gap between medical knowledge and everyday health practices, making preventive healthcare accessible to everyone, regardless of their background or location.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    The principles that guide everything we do
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Trust & Reliability</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We provide evidence-based information from trusted medical sources to ensure accuracy and reliability.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Community First</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We believe in the power of community support and collaboration to achieve better health outcomes for everyone.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We continuously innovate our approach to health education, using the latest research and technology to serve our community better.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What We Do</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Our comprehensive approach to health awareness and disease prevention
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 slide-up">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Health Education</h3>
                    <p class="text-gray-600 text-sm">Comprehensive learning resources</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 slide-up">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Prevention Strategies</h3>
                    <p class="text-gray-600 text-sm">Proactive health measures</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 slide-up">
                    <div class="text-4xl mb-4">💬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Community Support</h3>
                    <p class="text-gray-600 text-sm">Engaged health community</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 slide-up">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Health Resources</h3>
                    <p class="text-gray-600 text-sm">Accessible health tools</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white slide-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Join Us in Making a Difference</h2>
                <p class="text-xl text-[#9fd7e4] mb-8">
                    Together, we can create a healthier future. Get involved and be part of the change.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Contact Us Today
                </a>
            </div>
        </div>
    </section>
@endsection

