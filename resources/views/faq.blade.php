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
                    <!-- FAQ Item 1 -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">What is medical tourism?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Medical tourism involves traveling to another country to receive medical treatment. India has become a popular destination for medical tourism due to its world-class healthcare facilities, experienced doctors, and significantly lower treatment costs compared to many Western countries.
                        </p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Why choose India for medical treatment?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            India offers excellent healthcare services at a fraction of the cost in Western countries. Our partner hospitals are equipped with state-of-the-art technology, internationally trained doctors, and provide world-class medical care. Additionally, India's rich culture and hospitality make the recovery process more pleasant.
                        </p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">What treatments are available?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            We offer a wide range of medical treatments including cardiac surgery, orthopedics, oncology, neurology, organ transplants, urology, and minimally invasive procedures. Our partner hospitals specialize in various medical fields to meet diverse healthcare needs.
                        </p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">How do I get started?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Getting started is easy! Simply fill out our contact form or reach out to us directly. Our team will review your medical requirements, connect you with appropriate specialists, provide treatment cost estimates, and assist with travel arrangements and visa processing.
                        </p>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">What about language barriers?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Most of our partner hospitals have multilingual staff and interpreters available. English is widely spoken in Indian hospitals, and we provide translation services to ensure clear communication between patients and medical professionals throughout the treatment process.
                        </p>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">What are the visa requirements?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            India offers a Medical Visa (M-Visa) for patients seeking medical treatment. We provide assistance with visa applications and can help you obtain the necessary documentation, including medical reports and hospital appointment letters required for the visa process.
                        </p>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">How much can I save on treatment costs?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Treatment costs in India are typically 60-80% lower than in Western countries, depending on the procedure. This includes not just the medical procedure but also accommodation, food, and local transportation, making it a cost-effective option for quality healthcare.
                        </p>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="bg-gradient-to-r from-[#d1f0f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">What about post-treatment care?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Our partner hospitals provide comprehensive post-treatment care and follow-up services. We also offer telemedicine consultations for follow-up care after you return home, ensuring continuity of care and peace of mind.
                        </p>
                    </div>

                    <!-- FAQ Item 9 -->
                    <div class="bg-gradient-to-r from-[#c8ecf5] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Are the hospitals accredited?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, all our partner hospitals are accredited by recognized international bodies such as JCI (Joint Commission International) and NABH (National Accreditation Board for Hospitals). They maintain the highest standards of medical care and patient safety.
                        </p>
                    </div>

                    <!-- FAQ Item 10 -->
                    <div class="bg-gradient-to-r from-[#e0f4f8] to-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 slide-up">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">What support do you provide during the treatment?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            We provide end-to-end support including airport transfers, hospital coordination, accommodation assistance, local transportation, interpreter services, and 24/7 support throughout your stay in India. Our team ensures a smooth and comfortable experience.
                        </p>
                    </div>
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

