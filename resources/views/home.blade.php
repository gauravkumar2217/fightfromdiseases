@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Fight From Diseases - Medical Tourism in India | World-Class Healthcare';
    $metaDescription = 'Connect with trusted hospitals and renowned doctors in India for affordable world-class medical treatments. Serving patients from 20+ countries with compassionate care.';
    $metaKeywords = 'medical tourism India, healthcare India, affordable medical treatment, international patients, medical travel, hospital India';
@endphp

    <!-- Hero Section - Medical Tourism Visual -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ $getSetting('banner_image_url', 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=1920&q=80') }}" 
                 alt="Medical Tourism in India" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a4d78]/90 to-[#0a4d78]/70"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-5xl mx-auto text-center text-white">
                <div class="fade-in">
                    @if($getSetting('banner_badge_text'))
                    <div class="inline-block px-4 py-2 bg-[#9fd7e4]/20 backdrop-blur-sm rounded-full mb-6 border border-[#9fd7e4]/30">
                        <span class="text-[#9fd7e4] font-semibold">{{ $getSetting('banner_badge_text', 'Serving patients from 20+ countries') }}</span>
                    </div>
                    @endif
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        @php
                            $heading = $getSetting('banner_heading', 'World-Class Medical Care in India');
                            $highlight = $getSetting('banner_heading_highlight', 'India');
                        @endphp
                        @if($highlight && strpos($heading, $highlight) !== false)
                            @php
                                $headingParts = explode($highlight, $heading, 2);
                            @endphp
                            {!! $headingParts[0] !!}<span class="text-[#9fd7e4]">{{ $highlight }}</span>{!! $headingParts[1] ?? '' !!}
                        @else
                            {{ $heading }}
                        @endif
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto leading-relaxed text-gray-100">
                        {{ $getSetting('banner_description', 'Connect with trusted hospitals, renowned doctors, and affordable world-class treatments. Experience a seamless and compassionate medical journey.') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button data-open-modal="contactModal" class="px-8 py-4 bg-[#0a4d78] text-white rounded-lg font-semibold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                            {{ $getSetting('banner_button1_text', 'Contact Us') }}
                        </button>
                        <a href="{{ $getSetting('banner_button2_link', '#specialities') }}" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-lg font-semibold text-lg border-2 border-white/30 hover:bg-white/20 transition-all duration-300 shadow-lg hover:shadow-xl">
                            {{ $getSetting('banner_button2_text', 'View Specialities') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    <!-- Partner Hospitals Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Partner Hospitals</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Trusted multi-speciality and super-speciality hospitals across India
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                @for($i = 1; $i <= 8; $i++)
                <div class="bg-gradient-to-br from-[#e0f4f8] to-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 slide-up flex items-center justify-center h-32">
                    <img src="https://via.placeholder.com/200x100/0a4d78/ffffff?text=Hospital+{{ $i }}" 
                         alt="Partner Hospital {{ $i }}" 
                         class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Specialities Section -->
    <section id="specialities" class="py-20 bg-gradient-to-br from-[#9fd7e4]/10 to-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Medical Specialities</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Comprehensive healthcare services across multiple specialities
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @php
                    $specialities = [
                        ['name' => 'Orthopaedics & Joint Replacement', 'icon' => '🦴'],
                        ['name' => 'Cardiology & Cardiac Surgery', 'icon' => '❤️'],
                        ['name' => 'Oncology (Cancer Care)', 'icon' => '🎗️'],
                        ['name' => 'Neurology & Spine Surgery', 'icon' => '🧠'],
                        ['name' => 'Organ Transplants', 'icon' => '🫀'],
                        ['name' => 'Urology & Laparoscopic Surgery', 'icon' => '🔬'],
                        ['name' => 'Robotic & Minimally Invasive Procedures', 'icon' => '🤖'],
                    ];
                @endphp

                @foreach($specialities as $speciality)
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up border-l-4 border-[#0a4d78]">
                    <div class="text-5xl mb-4">{{ $speciality['icon'] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $speciality['name'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        World-class treatment with advanced technology and experienced medical professionals.
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Photo Gallery Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Photo Gallery</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Explore our world-class facilities and patient care environments
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-7xl mx-auto">
                @php
                    $galleryImages = [
                        ['url' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&q=80', 'title' => 'Hospital Infrastructure'],
                        ['url' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=800&q=80', 'title' => 'Medical Professionals'],
                        ['url' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=80', 'title' => 'International Patients'],
                        ['url' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=800&q=80', 'title' => 'Treatment Environment'],
                        ['url' => 'https://images.unsplash.com/photo-1512678080530-9690e14a5b25?w=800&q=80', 'title' => 'Recovery Care'],
                        ['url' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800&q=80', 'title' => 'Modern Equipment'],
                        ['url' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&q=80', 'title' => 'Patient Care'],
                        ['url' => 'https://images.unsplash.com/photo-1576678927484-cc907957088c?w=800&q=80', 'title' => 'Medical Team'],
                    ];
                @endphp

                @foreach($galleryImages as $image)
                <a href="{{ $image['url'] }}" 
                   data-lightbox="gallery" 
                   data-title="{{ $image['title'] }}"
                   class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 slide-up">
                    <img src="{{ $image['url'] }}" 
                         alt="{{ $image['title'] }}" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a4d78]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <p class="text-white p-4 font-semibold">{{ $image['title'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-[#0a4d78] to-[#0a5a8a] text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">20+</div>
                    <div class="text-xl text-[#9fd7e4]">Countries Served</div>
                </div>
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">1000+</div>
                    <div class="text-xl text-[#9fd7e4]">Patients Treated</div>
                </div>
                <div class="fade-in">
                    <div class="text-5xl md:text-6xl font-bold mb-2">50+</div>
                    <div class="text-xl text-[#9fd7e4]">Partner Hospitals</div>
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
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Start Your Medical Journey?</h2>
                <p class="text-xl text-[#9fd7e4] mb-8 max-w-2xl mx-auto">
                    Get in touch with us today and let us help you find the best medical treatment in India.
                </p>
                <button data-open-modal class="inline-block px-10 py-4 bg-white text-[#0a4d78] rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Contact Us Now
                </button>
            </div>
        </div>
    </section>
@endsection
