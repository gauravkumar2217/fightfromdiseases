@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'FAQ - Fight From Diseases | Frequently Asked Questions';
    $metaDescription = 'Find answers to frequently asked questions about medical tourism in India, treatments, hospitals, travel, and our services.';
    $metaKeywords = 'FAQ, frequently asked questions, medical tourism FAQ, healthcare questions, India medical tourism';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Find answers to common questions about medical tourism and our services.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    @forelse($faqs as $index => $faq)
                    <div class="bg-gradient-to-r {{ $index % 3 == 0 ? 'from-[#e0f4f8]' : ($index % 3 == 1 ? 'from-[#d1f0f8]' : 'from-[#c8ecf5]') }} to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $faq->question }}</h3>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $faq->answer }}
                        </p>
                    </div>
                    @empty
                    <div class="text-center py-12">
                        <p class="text-gray-500">No FAQs available at the moment. Please check back later.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Still Have Questions?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Our team is here to help. Contact us for personalized assistance and answers to your specific questions.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-[#0a4d78] text-white rounded-lg font-bold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection

