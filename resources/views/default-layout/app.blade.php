<!DOCTYPE html>
<html lang="en">
<head>
    @include('default-layout.meta')
</head>
<body class="font-sans antialiased bg-gray-50">
    @include('default-layout.header')
    
    <main class="pt-20">
        @yield('content')
    </main>
    
    @include('default-layout.footer')

    <!-- Custom JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Header Scroll Effect
        let lastScroll = 0;
        const header = document.getElementById('main-header');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
            
            lastScroll = currentScroll;
        });

        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.fade-in, .slide-up, .slide-left, .slide-right').forEach(el => {
            observer.observe(el);
        });
    </script>
    
    @stack('scripts')
</body>
</html>

