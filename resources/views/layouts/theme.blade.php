<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Glorious Computer')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Aktifkan dark mode berbasis class
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>
<body class="bg-white text-gray-900 font-sans antialiased transition-colors duration-300 dark:bg-gray-900 dark:text-gray-100">

    {{-- Toggle Dark Mode --}}
    <button id="darkModeToggle"
        class="fixed top-5 right-5 z-50 bg-orange-600 hover:bg-orange-700 text-white px-3 py-2 rounded-full shadow-lg transition flex items-center gap-2">
        <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v1m0 16v1m8.485-8.485h1M3.515 12.515h1M16.95 7.05l.707.707M6.343 17.657l.707.707M16.95 16.95l.707-.707M6.343 6.343l.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/>
        </svg>
        <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20.354 15.354A9 9 0 018.646 3.646 7.5 7.5 0 1012 21a9 9 0 008.354-5.646z"/>
        </svg>
        <span id="toggleText" class="text-sm font-semibold">Dark</span>
    </button>

    {{-- Konten Halaman --}}
    <main class="pt-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    {{-- Footer Elegan --}}
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
                © 2025 Glorious Computer. All rights reserved.
            </div>
        </div>
    </footer>

    {{-- Script Toggle Dark Mode --}}
    <script>
        const toggleBtn = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const toggleText = document.getElementById('toggleText');
        const html = document.documentElement;

        // Set initial state from localStorage
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
