<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreeSip - @yield('title')</title>
    <link rel="icon" type="image/svg+xml"
        href="https://owala.myshopify.com/cdn/shop/files/owala-favicon-512x512.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <style>
        * {
            scroll-behavior: smooth;
            scrollbar-width: none;
        }

        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.hidden-nav {
            transform: translateY(-100%);
        }

        .burger-line {
            transition: all 0.2s ease;
        }

        .burger-active .line1 {
            transform: rotate(45deg) translate(7.5px, 7.5px);
        }

        .burger-active .line2 {
            opacity: 0;
        }

        .burger-active .line3 {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #000000;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .active-link::after {
            width: 100%;
        }
    </style>
</head>

<body class="antialiased bg-gray-50 flex flex-col">
    <header class="navbar fixed top-0 left-0 right-0 z-50 w-full transition-all duration-300 flex justify-center">
        <nav class="max-w-4xl w-11/12 px-4 sm:px-6 lg:px-8 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg my-5">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="font-bold text-xl text-black">FreeSip</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}"
                            class="nav-link {{ request()->routeIs('home') ? 'active-link text-gray-900' : 'text-gray-500 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 text-sm font-medium">
                            Home
                        </a>
                        <a href="{{ route('about') }}"
                            class="nav-link {{ request()->routeIs('about') ? 'active-link text-gray-900' : 'text-gray-500 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 text-sm font-medium">
                            About Us
                        </a>
                        <a href="{{ route('collection') }}"
                            class="nav-link {{ request()->routeIs('collection') ? 'active-link text-gray-900' : 'text-gray-500 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 text-sm font-medium">
                            Collection
                        </a>
                    </div>
                </div>

                <div class="flex items-center">
                    <button type="button" id="mobile-menu-btn"
                        class="sm:hidden inline-flex items-center justify-center p-3 rounded-md">
                        <div class="h-5 w-6 flex flex-col justify-between">
                            <span class="burger-line line1 block h-0.5 w-6 bg-gray-600"></span>
                            <span class="burger-line line2 block h-0.5 w-6 bg-gray-600"></span>
                            <span class="burger-line line3 block h-0.5 w-6 bg-gray-600"></span>
                        </div>
                    </button>
                </div>
            </div>

            <div class="sm:hidden hidden transition-all duration-300 max-h-0 overflow-hidden" id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'bg-gray-100 text-black' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} block pl-3 pr-4 py-2 text-base font-medium rounded-md transition duration-150 ease-in-out">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'bg-gray-100 text-black' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} block pl-3 pr-4 py-2 text-base font-medium rounded-md transition duration-150 ease-in-out">
                        About Us
                    </a>
                    <a href="{{ route('collection') }}"
                        class="{{ request()->routeIs('collection') ? 'bg-gray-100 text-black' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} block pl-3 pr-4 py-2 text-base font-medium rounded-md transition duration-150 ease-in-out">
                        Collection
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>
    @yield('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/SplitText.min.js"></script>
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', function() {
            this.classList.toggle('burger-active');

            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.maxHeight = '0';
                setTimeout(() => {
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                }, 10);
            } else {
                mobileMenu.style.maxHeight = '0';
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        });

        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        const scrollThreshold = 50;

        window.addEventListener('scroll', function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (Math.abs(lastScrollTop - currentScroll) <= 10) return;

            if (currentScroll > scrollThreshold) {
                if (currentScroll > lastScrollTop) {
                    navbar.classList.add('hidden-nav');
                } else {
                    navbar.classList.remove('hidden-nav');
                }
            }

            lastScrollTop = currentScroll;
        }, false);
    </script>
</body>

</html>
