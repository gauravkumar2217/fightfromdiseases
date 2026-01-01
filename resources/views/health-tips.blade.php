@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Health Tips - Fight From Diseases | Wellness & Prevention Advice';
    $metaDescription = 'Discover practical health tips, wellness advice, and preventive measures to maintain good health and prevent diseases. Expert guidance for a healthier lifestyle.';
    $metaKeywords = 'health tips, wellness advice, preventive health, healthy lifestyle, disease prevention tips';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Health Tips</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Practical advice and tips to help you maintain optimal health and wellness.
                </p>
            </div>
        </div>
    </section>

    <!-- Health Tips Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="space-y-8">
                    <!-- Tip 1 -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-8 rounded-2xl shadow-lg slide-up">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center">
                                <span class="text-3xl">💧</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Stay Hydrated</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Drink at least 8 glasses of water daily. Proper hydration helps maintain body temperature, supports digestion, and keeps your skin healthy. Carry a water bottle with you and set reminders to drink water throughout the day.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 2 -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-8 rounded-2xl shadow-lg slide-up">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center">
                                <span class="text-3xl">🥗</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Eat a Balanced Diet</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Include plenty of fruits, vegetables, whole grains, and lean proteins in your diet. Limit processed foods, sugar, and excessive salt. A balanced diet provides essential nutrients that support your immune system and overall health.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 3 -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-8 rounded-2xl shadow-lg slide-up">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center">
                                <span class="text-3xl">🏃</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Exercise Regularly</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Aim for at least 30 minutes of moderate exercise most days of the week. Walking, swimming, cycling, or yoga can improve cardiovascular health, strengthen muscles, and boost mental well-being.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 4 -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-8 rounded-2xl shadow-lg slide-up">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center">
                                <span class="text-3xl">😴</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Get Adequate Sleep</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Aim for 7-9 hours of quality sleep each night. Good sleep is essential for physical recovery, mental clarity, and immune function. Establish a regular sleep schedule and create a relaxing bedtime routine.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 5 -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-8 rounded-2xl shadow-lg slide-up">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center">
                                <span class="text-3xl">🧘</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Manage Stress</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Practice stress-reduction techniques like meditation, deep breathing, or mindfulness. Chronic stress can weaken your immune system and contribute to various health problems. Find activities that help you relax and unwind.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 6 -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-8 rounded-2xl shadow-lg slide-up">
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#0a4d78] rounded-xl flex items-center justify-center">
                                <span class="text-3xl">🩺</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Regular Health Checkups</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Schedule regular medical checkups and screenings. Early detection of health issues can lead to more effective treatment. Don't skip preventive care appointments, even when you feel healthy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white slide-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Have Health Questions?</h2>
                <p class="text-xl text-[#9fd7e4] mb-8">
                    Our medical experts are here to provide personalized health guidance.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Get Expert Advice
                </a>
            </div>
        </div>
    </section>
@endsection

