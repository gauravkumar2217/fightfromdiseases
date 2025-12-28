@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Contact Us - Fight From Diseases | Get in Touch';
    $metaDescription = 'Contact Fight From Diseases for health inquiries, support, or to learn more about our disease prevention programs. We\'re here to help you on your health journey.';
    $metaKeywords = 'contact fight from diseases, health support, medical inquiries, health consultation, disease prevention help';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#9fd7e4] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#b8e3ed] rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Get in Touch</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Have questions? We're here to help. Reach out to us and let's start your health journey together.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="slide-left">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                        <p class="text-gray-600 mb-8">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                        
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="mb-6 p-4 bg-[#fee2e2] border border-[#f87171] text-[#991b1b] rounded-lg">
                                <ul class="list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" id="contact-form">
                            @csrf
                            
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                    placeholder="John Doe">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                    placeholder="john@example.com">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300"
                                    placeholder="+91 9560847496">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject *</label>
                                <select id="subject" name="subject" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0a4d78] focus:border-transparent transition-all duration-300">
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="health">Health Question</option>
                                    <option value="support">Support Request</option>
                                    <option value="partnership">Partnership Opportunity</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                                <textarea id="message" name="message" rows="6" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-300 resize-none"
                                    placeholder="Tell us how we can help you..."></textarea>
                            </div>
                            
                            <button type="submit" 
                                class="w-full px-8 py-4 bg-[#0a4d78] text-white rounded-lg font-semibold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="slide-right">
                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-xl h-full">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Contact Information</h2>
                            
                            <div class="space-y-6 mb-8">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-[#e0f4f8] rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-[#0a4d78]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                        <a href="mailto:contact@fightfromdiseases.com" class="text-gray-600 hover:text-[#0a4d78] transition-colors">
                                            contact@fightfromdiseases.com
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-[#e0f4f8] rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-[#0a4d78]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Phone</h3>
                                        <a href="tel:+919560847496" class="text-gray-600 hover:text-[#0a4d78] transition-colors">
                                            +91 9560847496
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-[#e0f4f8] rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-[#0a4d78]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Address</h3>
                                        <p class="text-gray-600">
                                            Pitampura, New Delhi<br>
                                            India<br>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="border-t border-gray-200 pt-6">
                                <h3 class="font-semibold text-gray-900 mb-4">Business Hours</h3>
                                <div class="space-y-2 text-gray-600">
                                    <div class="flex justify-between">
                                        <span>Monday - Friday</span>
                                        <span>9:00 AM - 6:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Saturday</span>
                                        <span>10:00 AM - 4:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Sunday</span>
                                        <span>Closed</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">Find Us</h2>
                <div class="rounded-2xl overflow-hidden shadow-xl h-96">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14014.567890123456!2d77.1061207!3d28.7036738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03d5b0619f3f%3A0x2208402cf282fb02!2sPitampura%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1630000000000!5m2!1sen!2sin" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full">
                    </iframe>
                </div>
                <div class="mt-6 text-center">
                    <a href="https://maps.app.goo.gl/L28XQ1MX1hgMrC6m8" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="inline-flex items-center text-[#0a4d78] hover:text-[#0a5a8a] transition-colors font-semibold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Open in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

