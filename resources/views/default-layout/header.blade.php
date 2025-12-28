<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm transition-all duration-300" id="main-header">
    <nav class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Fight From Diseases Logo" class="h-10 w-auto transition-transform duration-300 group-hover:scale-110">
                    <span class="text-xl font-bold text-gray-900 hidden sm:block">Fight From Diseases</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-[#0a4d78] text-white rounded-lg font-semibold hover:bg-[#0a5a8a] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4 pt-2">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}" class="nav-link-mobile {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link-mobile {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('contact') }}" class="nav-link-mobile {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="{{ route('contact') }}" class="px-6 py-3 bg-[#0a4d78] text-white rounded-lg font-semibold text-center hover:bg-[#0a5a8a] transition-all duration-300">
                    Get Started
                </a>
            </div>
        </div>
    </nav>
</header>

