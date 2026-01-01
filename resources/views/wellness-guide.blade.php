@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Wellness Guide - Fight From Diseases | Complete Wellness Resources';
    $metaDescription = 'Comprehensive wellness guide covering physical health, mental well-being, nutrition, fitness, and lifestyle tips for optimal health and wellness.';
    $metaKeywords = 'wellness guide, health and wellness, wellness tips, holistic health, wellness resources';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Wellness Guide</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Your comprehensive guide to achieving and maintaining optimal health and wellness.
                </p>
            </div>
        </div>
    </section>

    <!-- Wellness Pillars Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 slide-up">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Pillars of Wellness</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        A holistic approach to health and well-being
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Physical Wellness -->
                    <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">💪</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Physical Wellness</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Maintain your body through regular exercise, proper nutrition, adequate sleep, and preventive healthcare.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Regular physical activity</li>
                            <li>• Balanced nutrition</li>
                            <li>• Quality sleep (7-9 hours)</li>
                            <li>• Regular health checkups</li>
                        </ul>
                    </div>

                    <!-- Mental Wellness -->
                    <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">🧠</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Mental Wellness</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Nurture your mind through stress management, mindfulness practices, and emotional balance.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Stress management techniques</li>
                            <li>• Meditation and mindfulness</li>
                            <li>• Adequate rest and relaxation</li>
                            <li>• Professional support when needed</li>
                        </ul>
                    </div>

                    <!-- Social Wellness -->
                    <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">👥</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Wellness</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Build and maintain healthy relationships with family, friends, and community.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Meaningful relationships</li>
                            <li>• Community involvement</li>
                            <li>• Effective communication</li>
                            <li>• Support networks</li>
                        </ul>
                    </div>

                    <!-- Nutritional Wellness -->
                    <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">🥗</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Nutritional Wellness</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Fuel your body with nutrient-rich foods that support optimal health and energy.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Whole, unprocessed foods</li>
                            <li>• Balanced macronutrients</li>
                            <li>• Adequate hydration</li>
                            <li>• Portion control</li>
                        </ul>
                    </div>

                    <!-- Emotional Wellness -->
                    <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">❤️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Emotional Wellness</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Understand and manage your emotions effectively for better mental health.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Emotional awareness</li>
                            <li>• Healthy coping mechanisms</li>
                            <li>• Self-care practices</li>
                            <li>• Positive thinking</li>
                        </ul>
                    </div>

                    <!-- Spiritual Wellness -->
                    <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">🕊️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Spiritual Wellness</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Find purpose and meaning in life through values, beliefs, and practices that bring peace.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Personal values and beliefs</li>
                            <li>• Meditation and reflection</li>
                            <li>• Connection with nature</li>
                            <li>• Purpose and meaning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wellness Tips Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 slide-up">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Wellness Tips</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Start Your Day Right</h3>
                        <p class="text-gray-700">Begin with a healthy breakfast, morning exercise, or meditation to set a positive tone for the day.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Stay Active</h3>
                        <p class="text-gray-700">Incorporate movement into your daily routine - take stairs, walk during breaks, or do desk exercises.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Practice Mindfulness</h3>
                        <p class="text-gray-700">Take time for mindfulness, deep breathing, or meditation to reduce stress and improve focus.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Connect with Others</h3>
                        <p class="text-gray-700">Maintain social connections through regular communication with family and friends.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white slide-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Begin Your Wellness Journey</h2>
                <p class="text-xl text-[#9fd7e4] mb-8">
                    Get personalized wellness guidance from our healthcare experts.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Get Started
                </a>
            </div>
        </div>
    </section>
@endsection

