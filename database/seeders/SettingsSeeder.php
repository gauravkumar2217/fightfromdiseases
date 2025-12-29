<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Contact Information
            [
                'key' => 'contact_email',
                'value' => 'contact@fightfromdiseases.com',
                'type' => 'email',
                'group' => 'contact',
                'description' => 'Primary contact email address',
            ],
            [
                'key' => 'contact_phone',
                'value' => '+91 9560847496',
                'type' => 'phone',
                'group' => 'contact',
                'description' => 'Primary contact phone number',
            ],
            [
                'key' => 'whatsapp_number',
                'value' => '919560847496',
                'type' => 'phone',
                'group' => 'contact',
                'description' => 'WhatsApp number (without + sign)',
            ],
            [
                'key' => 'address_line1',
                'value' => 'Pitampura',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Address line 1',
            ],
            [
                'key' => 'address_line2',
                'value' => 'New Delhi',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Address line 2',
            ],
            [
                'key' => 'address_country',
                'value' => 'India',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Country',
            ],
            [
                'key' => 'google_maps_embed',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14014.567890123456!2d77.1061207!3d28.7036738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03d5b0619f3f%3A0x2208402cf282fb02!2sPitampura%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1630000000000!5m2!1sen!2sin',
                'type' => 'url',
                'group' => 'contact',
                'description' => 'Google Maps embed URL',
            ],
            [
                'key' => 'google_maps_link',
                'value' => 'https://maps.app.goo.gl/L28XQ1MX1hgMrC6m8',
                'type' => 'url',
                'group' => 'contact',
                'description' => 'Google Maps link',
            ],
            
            // Social Media
            [
                'key' => 'facebook_url',
                'value' => '#',
                'type' => 'url',
                'group' => 'social',
                'description' => 'Facebook page URL',
            ],
            [
                'key' => 'twitter_url',
                'value' => '#',
                'type' => 'url',
                'group' => 'social',
                'description' => 'Twitter/X profile URL',
            ],
            [
                'key' => 'instagram_url',
                'value' => '#',
                'type' => 'url',
                'group' => 'social',
                'description' => 'Instagram profile URL',
            ],
            
            // Company Information
            [
                'key' => 'company_name',
                'value' => 'Fight From Diseases',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Company name',
            ],
            [
                'key' => 'company_description',
                'value' => 'Connecting international patients with trusted hospitals and renowned doctors in India for affordable world-class medical treatments.',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Company description',
            ],
            [
                'key' => 'serving_countries_text',
                'value' => 'Serving patients from 20+ countries',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Text about serving countries',
            ],
            
            // Banner/Hero Section
            [
                'key' => 'banner_image_url',
                'value' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=1920&q=80',
                'type' => 'url',
                'group' => 'banner',
                'description' => 'Hero section background image URL',
            ],
            [
                'key' => 'banner_badge_text',
                'value' => 'Serving patients from 20+ countries',
                'type' => 'text',
                'group' => 'banner',
                'description' => 'Badge text displayed above the main heading',
            ],
            [
                'key' => 'banner_heading',
                'value' => 'World-Class Medical Care in India',
                'type' => 'text',
                'group' => 'banner',
                'description' => 'Main heading text (use {highlight} to highlight text)',
            ],
            [
                'key' => 'banner_heading_highlight',
                'value' => 'India',
                'type' => 'text',
                'group' => 'banner',
                'description' => 'Text to highlight in the heading',
            ],
            [
                'key' => 'banner_description',
                'value' => 'Connect with trusted hospitals, renowned doctors, and affordable world-class treatments. Experience a seamless and compassionate medical journey.',
                'type' => 'textarea',
                'group' => 'banner',
                'description' => 'Hero section description/subheading',
            ],
            [
                'key' => 'banner_button1_text',
                'value' => 'Contact Us',
                'type' => 'text',
                'group' => 'banner',
                'description' => 'Primary button text',
            ],
            [
                'key' => 'banner_button2_text',
                'value' => 'View Specialities',
                'type' => 'text',
                'group' => 'banner',
                'description' => 'Secondary button text',
            ],
            [
                'key' => 'banner_button2_link',
                'value' => '#specialities',
                'type' => 'text',
                'group' => 'banner',
                'description' => 'Secondary button link (anchor or URL)',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }

        $this->command->info('Settings seeded successfully!');
    }
}
