<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is medical tourism?',
                'answer' => 'Medical tourism involves traveling to another country to receive medical treatment. India has become a popular destination for medical tourism due to its world-class healthcare facilities, experienced doctors, and significantly lower treatment costs compared to many Western countries.',
                'display_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Why choose India for medical treatment?',
                'answer' => 'India offers excellent healthcare services at a fraction of the cost in Western countries. Our partner hospitals are equipped with state-of-the-art technology, internationally trained doctors, and provide world-class medical care. Additionally, India\'s rich culture and hospitality make the recovery process more pleasant.',
                'display_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'What treatments are available?',
                'answer' => 'We offer a wide range of medical treatments including cardiac surgery, orthopedics, oncology, neurology, organ transplants, urology, and minimally invasive procedures. Our partner hospitals specialize in various medical fields to meet diverse healthcare needs.',
                'display_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'How do I get started?',
                'answer' => 'Getting started is easy! Simply fill out our contact form or reach out to us directly. Our team will review your medical requirements, connect you with appropriate specialists, provide treatment cost estimates, and assist with travel arrangements and visa processing.',
                'display_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'What about language barriers?',
                'answer' => 'Most of our partner hospitals have multilingual staff and interpreters available. English is widely spoken in Indian hospitals, and we provide translation services to ensure clear communication between patients and medical professionals throughout the treatment process.',
                'display_order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'What are the visa requirements?',
                'answer' => 'India offers a Medical Visa (M-Visa) for patients seeking medical treatment. We provide assistance with visa applications and can help you obtain the necessary documentation, including medical reports and hospital appointment letters required for the visa process.',
                'display_order' => 6,
                'is_active' => true,
            ],
            [
                'question' => 'How much can I save on treatment costs?',
                'answer' => 'Treatment costs in India are typically 60-80% lower than in Western countries, depending on the procedure. This includes not just the medical procedure but also accommodation, food, and local transportation, making it a cost-effective option for quality healthcare.',
                'display_order' => 7,
                'is_active' => true,
            ],
            [
                'question' => 'What about post-treatment care?',
                'answer' => 'Our partner hospitals provide comprehensive post-treatment care and follow-up services. We also offer telemedicine consultations for follow-up care after you return home, ensuring continuity of care and peace of mind.',
                'display_order' => 8,
                'is_active' => true,
            ],
            [
                'question' => 'Are the hospitals accredited?',
                'answer' => 'Yes, all our partner hospitals are accredited by recognized international bodies such as JCI (Joint Commission International) and NABH (National Accreditation Board for Hospitals). They maintain the highest standards of medical care and patient safety.',
                'display_order' => 9,
                'is_active' => true,
            ],
            [
                'question' => 'What support do you provide during the treatment?',
                'answer' => 'We provide end-to-end support including airport transfers, hospital coordination, accommodation assistance, local transportation, interpreter services, and 24/7 support throughout your stay in India. Our team ensures a smooth and comfortable experience.',
                'display_order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
