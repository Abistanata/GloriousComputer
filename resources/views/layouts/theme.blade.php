<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Glorious Computer')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Aktifkan dark mode berbasis class
        tailwind.config = { darkMode: 'class' }
    </script>

      <!-- ✅ Tambahkan Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        /* Animasi fade-in */
        body {
            opacity: 0;
            transition: opacity 1s ease-in;
        }
        body.fade-in {
            opacity: 1;
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    
</head>
<body class="bg-white text-gray-900 font-sans antialiased transition-colors duration-300 dark:bg-gray-900 dark:text-gray-100">

    
{{-- 🔝 Navbar --}}
<nav class="sticky top-0 z-50 bg-white/90 dark:bg-gray-800 backdrop-blur-md shadow-lg transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            {{-- 🏷 Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Glorious Computer" class="h-12 w-auto">
                </a>
            </div>

            {{-- 📌 Menu Desktop --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-200 hover:text-orange-600 dark:hover:text-orange-400 font-medium transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 dark:text-gray-200 hover:text-orange-600 dark:hover:text-orange-400 font-medium transition">About Us</a>
                <a href="{{ route('services') }}" class="text-gray-700 dark:text-gray-200 hover:text-orange-600 dark:hover:text-orange-400 font-medium transition">Services</a>

              {{-- Alpine --}}

<!-- Navbar Items dengan Alpine -->
<div 
    x-data="{ 
        open: false, 
        label: '{{ 
            Request::routeIs('items.laptop') ? 'Laptop' : 
            (Request::routeIs('items.printer') ? 'Printer' : 
            (Request::routeIs('items.komputer') ? 'Komputer' : 
            (Request::routeIs('items.lainnya') ? 'Lainnya' : 'Items'))) 
        }}', 
        active: '{{ 
            Request::routeIs('items.laptop') ? 'Laptop' : 
            (Request::routeIs('items.printer') ? 'Printer' : 
            (Request::routeIs('items.komputer') ? 'Komputer' : 
            (Request::routeIs('items.lainnya') ? 'Lainnya' : 'Items'))) 
        }}'
    }" 
    class="relative"
>
    <!-- Tombol Utama -->
    <button 
        @mouseenter="open = true" 
        @mouseleave="open = false" 
        class="hover:text-orange-600 font-medium focus:outline-none flex items-center gap-1 transition"
    >
        <span x-text="label"></span>
        <!-- Ikon Panah -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-4 w-4 mt-0.5 transform transition-transform duration-300"
             :class="{ 'rotate-180': open }"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Dropdown -->
    <div 
        x-show="open" 
        @mouseenter="open = true" 
        @mouseleave="open = false" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute bg-white dark:bg-gray-900 shadow-lg rounded-md mt-2 w-48 z-50"
    >
        <div class="border-t my-2 border-gray-300 dark:border-gray-700"></div>
        
        <!-- Laptop -->
        <a href="{{ route('items.laptop') }}" 
           class="block px-4 py-2 transition"
           :class="active === 'Laptop' 
                    ? 'bg-orange-500 text-white font-semibold' 
                    : 'hover:bg-orange-100 dark:hover:bg-gray-700'"
           @click="label = 'Laptop'; active = 'Laptop'; open = false">
           Laptop
        </a>

        <!-- Printer -->
        <a href="{{ route('items.printer') }}" 
           class="block px-4 py-2 transition"
           :class="active === 'Printer' 
                    ? 'bg-orange-500 text-white font-semibold' 
                    : 'hover:bg-orange-100 dark:hover:bg-gray-700'"
           @click="label = 'Printer'; active = 'Printer'; open = false">
           Printer
        </a>

        <!-- Komputer -->
        <a href="{{ route('items.komputer') }}" 
           class="block px-4 py-2 transition"
           :class="active === 'Komputer' 
                    ? 'bg-orange-500 text-white font-semibold' 
                    : 'hover:bg-orange-100 dark:hover:bg-gray-700'"
           @click="label = 'Komputer'; active = 'Komputer'; open = false">
           Komputer
        </a>

        <!-- Lainnya -->
        <a href="{{ route('items.lainnya') }}" 
           class="block px-4 py-2 transition"
           :class="active === 'Lainnya' 
                    ? 'bg-orange-500 text-white font-semibold' 
                    : 'hover:bg-orange-100 dark:hover:bg-gray-700'"
           @click="label = 'Lainnya'; active = 'Lainnya'; open = false">
           Lainnya
        </a>
    </div>
</div>



            {{-- 🌙 Toggle Dark Mode --}}
            <button id="darkModeToggle"
                class="ml-4 flex items-center gap-2 px-3 py-2 rounded-full bg-orange-600 hover:bg-orange-700 text-white shadow-md transition">
                {{-- Icon Sun --}}
                <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m8.485-8.485h1M3.515 12.515h1M16.95 7.05l.707.707M6.343 17.657l.707.707M16.95 16.95l.707-.707M6.343 6.343l.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                </svg>
                {{-- Icon Moon --}}
                <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 7.5 7.5 0 1012 21a9 9 0 008.354-5.646z" />
                </svg>
                <span id="toggleText" class="text-sm font-semibold">Dark</span>
            </button>

        </div>
    </div>

    
</nav>


                <!-- Mobile button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-800 dark:text-gray-200 focus:outline-none">☰</button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 shadow-md">
            <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">Home</a>
            <a href="{{ route('about') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">About Us</a>
            <a href="{{ route('services') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">Services</a>
            <div class="border-t my-2 border-gray-300 dark:border-gray-700"></div>
            <a href="{{ route('items.laptop') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">Laptop</a>
            <a href="{{ route('items.printer') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">Printer</a>
            <a href="{{ route('items.komputer') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">Komputer</a>
            <a href="{{ route('items.lainnya') }}" class="block px-4 py-2 hover:bg-orange-100 dark:hover:bg-gray-700">Lainnya</a>
        </div>
    </nav>

    {{-- 📌 Konten --}}
    <main class="">
        <div>
            @yield('content')
        </div>
    </main>

    {{-- ⚡ Footer --}}
    <footer class="mt-16 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-3 text-orange-600 dark:text-orange-400">Glorious Computer</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Solusi perangkat komputer, printer, dan aksesoris terbaik dengan harga terjangkau.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-3 text-orange-600 dark:text-orange-400">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#produk" class="hover:text-orange-500">Produk</a></li>
                        <li><a href="#layanan" class="hover:text-orange-500">Layanan</a></li>
                        <li><a href="#kontak" class="hover:text-orange-500">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-3 text-orange-600 dark:text-orange-400">Hubungi Kami</h3>
                    <p class="text-gray-600 dark:text-gray-400">Jl. Contoh No.123, Kota</p>
                    <p class="text-gray-600 dark:text-gray-400">Telp: 0812-3456-7890</p>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-500 dark:text-gray-400 text-sm border-t border-gray-300 dark:border-gray-700 pt-4">
                © {{ date('Y') }} Glorious Computer. All rights reserved.
            </div>
        </div>
    </footer>

   

    {{-- JS --}}
    <script>
        // Mobile Menu
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });

        // Fade-in effect
        window.addEventListener("load", function() {
            document.body.classList.add("fade-in");
        });

        // Dark Mode Toggle
        const toggleBtn = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const toggleText = document.getElementById('toggleText');
        const html = document.documentElement;

        if(localStorage.theme === 'dark' || 
           (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            sunIcon.classList.remove('hidden');
            toggleText.textContent = "Light";
        } else {
            moonIcon.classList.remove('hidden');
        }

        toggleBtn.addEventListener('click', () => {
            html.classList.toggle('dark');
            if(html.classList.contains('dark')) {
                localStorage.theme = 'dark';
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
                toggleText.textContent = "Light";
            } else {
                localStorage.theme = 'light';
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
                toggleText.textContent = "Dark";
            }
        });
    </script>
</body>
</html>