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

    <!-- Contact Modal -->
    @include('components.contact-modal')

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/919560847496" 
       target="_blank" 
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:bg-[#20BA5A] transition-all duration-300 transform hover:scale-110 hover:shadow-3xl group"
       aria-label="Contact us on WhatsApp">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        <span class="absolute right-full mr-3 top-1/2 transform -translate-y-1/2 bg-gray-900 text-white text-sm px-3 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            Chat with us on WhatsApp
        </span>
    </a>

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

        // Contact Modal Functionality
        const contactModal = document.getElementById('contactModal');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const closeModal = document.getElementById('closeModal');
        const cancelModal = document.getElementById('cancelModal');
        const modalContent = document.querySelector('.modal-content');

        function openContactModal() {
            if (contactModal) {
                contactModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                setTimeout(() => {
                    contactModal.classList.add('opacity-100');
                    modalContent?.classList.add('scale-100');
                }, 10);
            }
        }

        function closeContactModal() {
            if (contactModal) {
                contactModal.classList.remove('opacity-100');
                modalContent?.classList.remove('scale-100');
                setTimeout(() => {
                    contactModal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }
        }

        // Open modal on button click
        document.querySelectorAll('[data-open-modal]').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                openContactModal();
            });
        });

        // Close modal events
        if (closeModal) closeModal.addEventListener('click', closeContactModal);
        if (cancelModal) cancelModal.addEventListener('click', closeContactModal);
        if (modalBackdrop) modalBackdrop.addEventListener('click', closeContactModal);

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !contactModal?.classList.contains('hidden')) {
                closeContactModal();
            }
        });
    </script>

    <!-- Lightbox2 Library for Photo Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'fadeDuration': 300,
            'imageFadeDuration': 300
        });
    </script>
    
    @stack('scripts')
</body>
</html>

