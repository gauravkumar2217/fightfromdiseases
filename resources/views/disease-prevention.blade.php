@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Disease Prevention - Fight From Diseases | Preventive Healthcare';
    $metaDescription = 'Learn about effective disease prevention strategies, vaccination information, and preventive healthcare measures to protect yourself and your family from common diseases.';
    $metaKeywords = 'disease prevention, preventive healthcare, vaccination, health screening, disease prevention strategies';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Disease Prevention</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Essential strategies and information to help prevent diseases and maintain optimal health.
                </p>
            </div>
        </div>
    </section>

    <!-- Prevention Strategies Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 slide-up">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Prevention Strategies</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Proactive measures to protect your health and prevent diseases
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Vaccination -->
                    <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">💉</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Vaccination</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Stay up-to-date with recommended vaccinations. Vaccines are one of the most effective ways to prevent serious diseases including influenza, COVID-19, hepatitis, and many others.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Follow recommended vaccination schedules</li>
                            <li>• Get annual flu shots</li>
                            <li>• Keep travel vaccinations current</li>
                            <li>• Consult with healthcare providers about age-appropriate vaccines</li>
                        </ul>
                    </div>

                    <!-- Hygiene Practices -->
                    <div class="bg-gradient-to-br from-[#d1f0f8] to-[#b8e3ed] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">🧼</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Hygiene Practices</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Good hygiene is fundamental to preventing the spread of infections and diseases.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Wash hands frequently with soap and water</li>
                            <li>• Use hand sanitizer when soap isn't available</li>
                            <li>• Practice proper food handling and preparation</li>
                            <li>• Maintain clean living environments</li>
                        </ul>
                    </div>

                    <!-- Regular Screenings -->
                    <div class="bg-gradient-to-br from-[#c8ecf5] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">🔍</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Regular Screenings</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Early detection through regular health screenings can prevent serious complications.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Annual physical examinations</li>
                            <li>• Blood pressure and cholesterol checks</li>
                            <li>• Cancer screenings (mammograms, colonoscopies)</li>
                            <li>• Diabetes and heart disease risk assessments</li>
                        </ul>
                    </div>

                    <!-- Healthy Lifestyle -->
                    <div class="bg-gradient-to-br from-[#e0f4f8] to-[#9fd7e4] p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                        <div class="w-14 h-14 bg-[#0a4d78] rounded-xl flex items-center justify-center mb-6">
                            <span class="text-3xl">🌱</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Healthy Lifestyle</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Adopting healthy lifestyle choices significantly reduces disease risk.
                        </p>
                        <ul class="text-gray-600 space-y-2 text-sm">
                            <li>• Maintain a balanced diet</li>
                            <li>• Exercise regularly</li>
                            <li>• Avoid smoking and limit alcohol</li>
                            <li>• Get adequate sleep and manage stress</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Common Diseases Prevention -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 slide-up">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Preventing Common Diseases</h2>
                </div>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Cardiovascular Diseases</h3>
                        <p class="text-gray-700">Maintain healthy blood pressure and cholesterol levels through diet, exercise, and regular monitoring. Avoid smoking and manage stress effectively.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Diabetes</h3>
                        <p class="text-gray-700">Maintain a healthy weight, eat a balanced diet low in processed sugars, exercise regularly, and get regular blood sugar screenings if at risk.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Infectious Diseases</h3>
                        <p class="text-gray-700">Practice good hygiene, stay up-to-date with vaccinations, avoid close contact with sick individuals, and follow public health guidelines.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Cancer</h3>
                        <p class="text-gray-700">Avoid tobacco, limit alcohol, protect skin from UV radiation, maintain healthy weight, get regular screenings, and eat a diet rich in fruits and vegetables.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white slide-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Start Your Prevention Journey</h2>
                <p class="text-xl text-[#9fd7e4] mb-8">
                    Consult with our healthcare experts to create a personalized prevention plan.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Schedule Consultation
                </a>
            </div>
        </div>
    </section>
@endsection

