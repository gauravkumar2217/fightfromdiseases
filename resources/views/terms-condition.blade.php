@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Terms & Conditions - Fight From Diseases | Terms of Service';
    $metaDescription = 'Read our terms and conditions to understand the rules and regulations for using our medical tourism services and website.';
    $metaKeywords = 'terms and conditions, terms of service, medical tourism terms, service agreement';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Terms & Conditions</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Please read these terms and conditions carefully before using our services.
                </p>
                <p class="text-sm text-gray-500 mt-4">
                    Last Updated: {{ $getContent('terms-condition', 'last_updated', date('F d, Y')) }}
                </p>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto prose prose-lg max-w-none">
                <div class="space-y-8">
                    <!-- Introduction -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Introduction</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'introduction', '<p>Welcome to Fight From Diseases. These Terms and Conditions ("Terms") govern your access to and use of our website and medical tourism services. By accessing or using our services, you agree to be bound by these Terms.</p>') !!}
                        </div>
                    </div>

                    <!-- Acceptance of Terms -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Acceptance of Terms</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'acceptance', '<p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>') !!}
                        </div>
                    </div>

                    <!-- Services Description -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Services Description</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'services_description', '<p>Fight From Diseases provides medical tourism facilitation services, connecting international patients with healthcare providers in India. Our services include:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Medical consultation coordination</li>
                                <li>Hospital and doctor referrals</li>
                                <li>Treatment planning assistance</li>
                                <li>Travel and accommodation support</li>
                                <li>Post-treatment follow-up coordination</li>
                            </ul>
                            <p class="mt-4">We act as a facilitator and do not provide medical diagnosis or treatment directly.</p>') !!}
                        </div>
                    </div>

                    <!-- User Responsibilities -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">User Responsibilities</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'user_responsibilities', '<p>You agree to:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Provide accurate and complete information</li>
                                <li>Use our services only for lawful purposes</li>
                                <li>Not interfere with or disrupt the services</li>
                                <li>Not attempt to gain unauthorized access to any part of the website</li>
                                <li>Comply with all applicable laws and regulations</li>
                                <li>Respect the intellectual property rights of others</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- Medical Disclaimer -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Medical Disclaimer</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'medical_disclaimer', '<p><strong>IMPORTANT:</strong> Fight From Diseases is a medical tourism facilitator and does not provide medical advice, diagnosis, or treatment. All medical decisions should be made in consultation with qualified healthcare professionals.</p>
                            <p class="mt-4">We are not responsible for:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Medical outcomes or treatment results</li>
                                <li>Decisions made by healthcare providers</li>
                                <li>Complications or adverse effects of medical procedures</li>
                                <li>Quality of medical services provided by third-party healthcare providers</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- Payment Terms -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Payment Terms</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'payment_terms', '<p>Payment terms include:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>All fees and charges will be clearly communicated before service provision</li>
                                <li>Payment may be required in advance for certain services</li>
                                <li>Refund policies vary by service and will be disclosed at the time of booking</li>
                                <li>We accept various payment methods as specified during the booking process</li>
                                <li>All prices are subject to change without prior notice</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- Limitation of Liability -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Limitation of Liability</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'limitation_liability', '<p>To the maximum extent permitted by law, Fight From Diseases shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses resulting from your use of our services.</p>') !!}
                        </div>
                    </div>

                    <!-- Intellectual Property -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Intellectual Property</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'intellectual_property', '<p>All content on this website, including text, graphics, logos, images, and software, is the property of Fight From Diseases or its content suppliers and is protected by copyright and other intellectual property laws. You may not reproduce, distribute, or create derivative works from any content without our express written permission.</p>') !!}
                        </div>
                    </div>

                    <!-- Termination -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Termination</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'termination', '<p>We reserve the right to terminate or suspend your access to our services immediately, without prior notice or liability, for any reason, including if you breach these Terms. Upon termination, your right to use the services will immediately cease.</p>') !!}
                        </div>
                    </div>

                    <!-- Governing Law -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Governing Law</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'governing_law', '<p>These Terms shall be governed by and construed in accordance with the laws of India, without regard to its conflict of law provisions. Any disputes arising from these Terms shall be subject to the exclusive jurisdiction of the courts in New Delhi, India.</p>') !!}
                        </div>
                    </div>

                    <!-- Changes to Terms -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Changes to Terms</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'changes_to_terms', '<p>We reserve the right to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>') !!}
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Contact Information</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('terms-condition', 'contact_information', '<p>If you have any questions about these Terms, please contact us:</p>
                            <ul class="list-none space-y-2">
                                <li><strong>Email:</strong> {{ $getSetting("contact_email", "contact@fightfromdiseases.com") }}</li>
                                <li><strong>Phone:</strong> {{ $getSetting("contact_phone", "+91 9560847496") }}</li>
                                <li><strong>Address:</strong> {{ $getSetting("address_line1", "Pitampura") }}, {{ $getSetting("address_line2", "New Delhi") }}, {{ $getSetting("address_country", "India") }}</li>
                            </ul>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Questions About Our Terms?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    If you have any questions about these Terms and Conditions, please feel free to contact us.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-[#0a4d78] text-white rounded-lg font-bold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection

