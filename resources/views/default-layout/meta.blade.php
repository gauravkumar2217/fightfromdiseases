@php
    $title = $title ?? 'Fight From Diseases - Your Health, Your Priority';
    $description = $description ?? 'Join us in the fight against diseases. Get health tips, awareness, and resources to protect yourself and your loved ones.';
    $keywords = $keywords ?? 'health, disease prevention, wellness, medical awareness, health tips';
@endphp

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Primary Meta Tags -->
<title>{{ isset($title) ? $title : 'Fight From Diseases - Your Health, Your Priority' }}</title>
<meta name="title" content="{{ isset($title) ? $title : 'Fight From Diseases - Your Health, Your Priority' }}">
<meta name="description" content="{{ isset($description) ? $description : 'Join us in the fight against diseases. Get health tips, awareness, and resources to protect yourself and your loved ones.' }}">
<meta name="keywords" content="{{ isset($keywords) ? $keywords : 'health, disease prevention, wellness, medical awareness, health tips' }}">
<meta name="author" content="Fight From Diseases">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ isset($title) ? $title : 'Fight From Diseases - Your Health, Your Priority' }}">
<meta property="og:description" content="{{ isset($description) ? $description : 'Join us in the fight against diseases. Get health tips, awareness, and resources to protect yourself and your loved ones.' }}">
<meta property="og:image" content="{{ asset('assets/images/poster.jpeg') }}">
<meta property="og:site_name" content="Fight From Diseases">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ isset($title) ? $title : 'Fight From Diseases - Your Health, Your Priority' }}">
<meta property="twitter:description" content="{{ isset($description) ? $description : 'Join us in the fight against diseases. Get health tips, awareness, and resources to protect yourself and your loved ones.' }}">
<meta property="twitter:image" content="{{ asset('assets/images/poster.jpeg') }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}">

<!-- Preconnect for Performance -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Styles -->
@vite(['resources/css/app.css'])
<style>
    :root {
        --primary-color: #0a4d78;
        --secondary-color: #9fd7e4;
        --accent-color: #0a4d78;
        --text-dark: #1b1b18;
        --text-light: #706f6c;
        --bg-light: #FDFDFC;
        --bg-white: #ffffff;
    }
</style>

