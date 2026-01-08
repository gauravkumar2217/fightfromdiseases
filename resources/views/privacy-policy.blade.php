@extends('default-layout.app')

@section('content')
@php
    $metaTitle = 'Privacy Policy - Fight From Diseases | Your Privacy Matters';
    $metaDescription = 'Read our privacy policy to understand how we collect, use, and protect your personal information when you use our medical tourism services.';
    $metaKeywords = 'privacy policy, data protection, personal information, medical tourism privacy';
@endphp

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#9fd7e4] via-white to-[#e0f4f8] overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">Privacy Policy</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Your privacy is important to us. This policy explains how we collect, use, and protect your information.
                </p>
                <p class="text-sm text-gray-500 mt-4">
                    Last Updated: {{ $getContent('privacy-policy', 'last_updated', date('F d, Y')) }}
                </p>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto prose prose-lg max-w-none">
                <div class="space-y-8">
                    <!-- Introduction -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Introduction</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'introduction', '<p>Fight From Diseases ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and use our services.</p>') !!}
                        </div>
                    </div>

                    <!-- Information We Collect -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Information We Collect</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'information_collected', '<p>We may collect information about you in a variety of ways. The information we may collect includes:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Personal identification information (name, email address, phone number, etc.)</li>
                                <li>Medical information you provide when seeking medical tourism services</li>
                                <li>Payment information for processing transactions</li>
                                <li>Usage data and analytics information</li>
                                <li>Cookies and tracking technologies</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- How We Use Your Information -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">How We Use Your Information</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'how_we_use', '<p>We use the information we collect to:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Provide, maintain, and improve our services</li>
                                <li>Process your medical tourism requests and connect you with healthcare providers</li>
                                <li>Send you updates, newsletters, and promotional materials</li>
                                <li>Respond to your inquiries and provide customer support</li>
                                <li>Monitor and analyze usage patterns and trends</li>
                                <li>Detect, prevent, and address technical issues</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- Information Sharing -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Information Sharing and Disclosure</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'information_sharing', '<p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>With healthcare providers and hospitals to facilitate your medical treatment</li>
                                <li>With service providers who assist us in operating our website and conducting our business</li>
                                <li>When required by law or to protect our rights and safety</li>
                                <li>In connection with a business transfer or merger</li>
                                <li>With your explicit consent</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- Data Security -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Data Security</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'data_security', '<p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet or electronic storage is 100% secure.</p>') !!}
                        </div>
                    </div>

                    <!-- Your Rights -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Your Rights</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'your_rights', '<p>You have the right to:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Access and receive a copy of your personal information</li>
                                <li>Rectify inaccurate or incomplete information</li>
                                <li>Request deletion of your personal information</li>
                                <li>Object to processing of your personal information</li>
                                <li>Request restriction of processing</li>
                                <li>Data portability</li>
                                <li>Withdraw consent at any time</li>
                            </ul>') !!}
                        </div>
                    </div>

                    <!-- Cookies -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Cookies and Tracking Technologies</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'cookies', '<p>We use cookies and similar tracking technologies to track activity on our website and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>') !!}
                        </div>
                    </div>

                    <!-- Third-Party Links -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Third-Party Links</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'third_party_links', '<p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>') !!}
                        </div>
                    </div>

                    <!-- Changes to Policy -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Changes to This Privacy Policy</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'changes_to_policy', '<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this Privacy Policy periodically for any changes.</p>') !!}
                        </div>
                    </div>

                    <!-- Contact Us -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md slide-up">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Contact Us</h2>
                        <div class="text-gray-700 leading-relaxed">
                            {!! $getContent('privacy-policy', 'contact_us', '<p>If you have any questions about this Privacy Policy, please contact us:</p>
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Questions About Our Privacy Policy?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    If you have any questions or concerns about our privacy practices, please don't hesitate to contact us.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-[#0a4d78] text-white rounded-lg font-bold text-lg hover:bg-[#0a5a8a] transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection

