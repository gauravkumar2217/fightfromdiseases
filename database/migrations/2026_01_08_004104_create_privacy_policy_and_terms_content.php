<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Content;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $contents = [
            // Privacy Policy Content
            [
                'page_slug' => 'privacy-policy',
                'key' => 'last_updated',
                'value' => date('F d, Y'),
                'type' => 'text',
                'group' => 'general',
                'description' => 'Last updated date',
                'display_order' => 0,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'introduction',
                'value' => '<p>Fight From Diseases ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and use our services.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Introduction section',
                'display_order' => 1,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'information_collected',
                'value' => '<p>We may collect information about you in a variety of ways. The information we may collect includes:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Personal identification information (name, email address, phone number, etc.)</li>
                    <li>Medical information you provide when seeking medical tourism services</li>
                    <li>Payment information for processing transactions</li>
                    <li>Usage data and analytics information</li>
                    <li>Cookies and tracking technologies</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Information we collect section',
                'display_order' => 2,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'how_we_use',
                'value' => '<p>We use the information we collect to:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Provide, maintain, and improve our services</li>
                    <li>Process your medical tourism requests and connect you with healthcare providers</li>
                    <li>Send you updates, newsletters, and promotional materials</li>
                    <li>Respond to your inquiries and provide customer support</li>
                    <li>Monitor and analyze usage patterns and trends</li>
                    <li>Detect, prevent, and address technical issues</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'How we use information section',
                'display_order' => 3,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'information_sharing',
                'value' => '<p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>With healthcare providers and hospitals to facilitate your medical treatment</li>
                    <li>With service providers who assist us in operating our website and conducting our business</li>
                    <li>When required by law or to protect our rights and safety</li>
                    <li>In connection with a business transfer or merger</li>
                    <li>With your explicit consent</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Information sharing section',
                'display_order' => 4,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'data_security',
                'value' => '<p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet or electronic storage is 100% secure.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Data security section',
                'display_order' => 5,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'your_rights',
                'value' => '<p>You have the right to:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Access and receive a copy of your personal information</li>
                    <li>Rectify inaccurate or incomplete information</li>
                    <li>Request deletion of your personal information</li>
                    <li>Object to processing of your personal information</li>
                    <li>Request restriction of processing</li>
                    <li>Data portability</li>
                    <li>Withdraw consent at any time</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Your rights section',
                'display_order' => 6,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'cookies',
                'value' => '<p>We use cookies and similar tracking technologies to track activity on our website and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Cookies section',
                'display_order' => 7,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'third_party_links',
                'value' => '<p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Third-party links section',
                'display_order' => 8,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'changes_to_policy',
                'value' => '<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this Privacy Policy periodically for any changes.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Changes to policy section',
                'display_order' => 9,
            ],
            [
                'page_slug' => 'privacy-policy',
                'key' => 'contact_us',
                'value' => '<p>If you have any questions about this Privacy Policy, please contact us:</p>
                <ul class="list-none space-y-2">
                    <li><strong>Email:</strong> contact@fightfromdiseases.com</li>
                    <li><strong>Phone:</strong> +91 9560847496</li>
                    <li><strong>Address:</strong> Pitampura, New Delhi, India</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Contact us section',
                'display_order' => 10,
            ],

            // Terms & Conditions Content
            [
                'page_slug' => 'terms-condition',
                'key' => 'last_updated',
                'value' => date('F d, Y'),
                'type' => 'text',
                'group' => 'general',
                'description' => 'Last updated date',
                'display_order' => 0,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'introduction',
                'value' => '<p>Welcome to Fight From Diseases. These Terms and Conditions ("Terms") govern your access to and use of our website and medical tourism services. By accessing or using our services, you agree to be bound by these Terms.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Introduction section',
                'display_order' => 1,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'acceptance',
                'value' => '<p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Acceptance of terms section',
                'display_order' => 2,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'services_description',
                'value' => '<p>Fight From Diseases provides medical tourism facilitation services, connecting international patients with healthcare providers in India. Our services include:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Medical consultation coordination</li>
                    <li>Hospital and doctor referrals</li>
                    <li>Treatment planning assistance</li>
                    <li>Travel and accommodation support</li>
                    <li>Post-treatment follow-up coordination</li>
                </ul>
                <p class="mt-4">We act as a facilitator and do not provide medical diagnosis or treatment directly.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Services description section',
                'display_order' => 3,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'user_responsibilities',
                'value' => '<p>You agree to:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Provide accurate and complete information</li>
                    <li>Use our services only for lawful purposes</li>
                    <li>Not interfere with or disrupt the services</li>
                    <li>Not attempt to gain unauthorized access to any part of the website</li>
                    <li>Comply with all applicable laws and regulations</li>
                    <li>Respect the intellectual property rights of others</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'User responsibilities section',
                'display_order' => 4,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'medical_disclaimer',
                'value' => '<p><strong>IMPORTANT:</strong> Fight From Diseases is a medical tourism facilitator and does not provide medical advice, diagnosis, or treatment. All medical decisions should be made in consultation with qualified healthcare professionals.</p>
                <p class="mt-4">We are not responsible for:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Medical outcomes or treatment results</li>
                    <li>Decisions made by healthcare providers</li>
                    <li>Complications or adverse effects of medical procedures</li>
                    <li>Quality of medical services provided by third-party healthcare providers</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Medical disclaimer section',
                'display_order' => 5,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'payment_terms',
                'value' => '<p>Payment terms include:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>All fees and charges will be clearly communicated before service provision</li>
                    <li>Payment may be required in advance for certain services</li>
                    <li>Refund policies vary by service and will be disclosed at the time of booking</li>
                    <li>We accept various payment methods as specified during the booking process</li>
                    <li>All prices are subject to change without prior notice</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Payment terms section',
                'display_order' => 6,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'limitation_liability',
                'value' => '<p>To the maximum extent permitted by law, Fight From Diseases shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses resulting from your use of our services.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Limitation of liability section',
                'display_order' => 7,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'intellectual_property',
                'value' => '<p>All content on this website, including text, graphics, logos, images, and software, is the property of Fight From Diseases or its content suppliers and is protected by copyright and other intellectual property laws. You may not reproduce, distribute, or create derivative works from any content without our express written permission.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Intellectual property section',
                'display_order' => 8,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'termination',
                'value' => '<p>We reserve the right to terminate or suspend your access to our services immediately, without prior notice or liability, for any reason, including if you breach these Terms. Upon termination, your right to use the services will immediately cease.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Termination section',
                'display_order' => 9,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'governing_law',
                'value' => '<p>These Terms shall be governed by and construed in accordance with the laws of India, without regard to its conflict of law provisions. Any disputes arising from these Terms shall be subject to the exclusive jurisdiction of the courts in New Delhi, India.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Governing law section',
                'display_order' => 10,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'changes_to_terms',
                'value' => '<p>We reserve the right to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Changes to terms section',
                'display_order' => 11,
            ],
            [
                'page_slug' => 'terms-condition',
                'key' => 'contact_information',
                'value' => '<p>If you have any questions about these Terms, please contact us:</p>
                <ul class="list-none space-y-2">
                    <li><strong>Email:</strong> contact@fightfromdiseases.com</li>
                    <li><strong>Phone:</strong> +91 9560847496</li>
                    <li><strong>Address:</strong> Pitampura, New Delhi, India</li>
                </ul>',
                'type' => 'html',
                'group' => 'content',
                'description' => 'Contact information section',
                'display_order' => 12,
            ],
        ];

        foreach ($contents as $content) {
            Content::updateOrCreate(
                [
                    'page_slug' => $content['page_slug'],
                    'key' => $content['key'],
                ],
                $content
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Content::where('page_slug', 'privacy-policy')->delete();
        Content::where('page_slug', 'terms-condition')->delete();
    }
};
