@extends('layouts.app')

@section('title', 'Glorious Computer - Home')

@section('content')
  {{-- Hero Section --}}
<section class="relative w-full h-screen flex items-center justify-center text-white overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/banner.jpg') }}" 
             alt="Banner Glorious Computer"
             class="w-full h-full object-cover brightness-75 contrast-125 scale-105 animate-pulse-slow">
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center px-6">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 drop-shadow-lg">
            Glorious Computer
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto text-gray-200">
            Solusi Komputer Terbaik untuk Bisnis & Personal
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#produk" 
               class="px-8 py-3 bg-orange-600 hover:bg-orange-700 rounded-full text-white font-semibold shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                🚀 Lihat Produk
            </a>
            <a href="#kontak" 
               class="px-8 py-3 bg-white hover:bg-gray-200 rounded-full text-gray-800 font-semibold shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                📞 Hubungi Kami
            </a>
        </div>
    </div>
</section>

{{-- Tentang Kami --}}
<section id="tentang" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6 text-gray-800 dark:text-gray-100">Tentang Kami</h2>
        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed max-w-3xl mx-auto">
            Glorious Computer adalah penyedia solusi komputer yang menghadirkan laptop, PC rakitan, printer, 
            hingga layanan service IT dengan kualitas terbaik. Kami siap mendukung kebutuhan personal maupun bisnis Anda.
        </p>
    </div>
</section>

{{-- Layanan Kami --}}
<section id="layanan" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-14 text-gray-800 dark:text-gray-100">Layanan Kami</h2>
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-3">💻 Laptop & PC Rakitan</h3>
                <p class="text-gray-600 dark:text-gray-300">Berbagai pilihan laptop & PC sesuai kebutuhan Anda.</p>
            </div>
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-3">🖨️ Printer & Periferal</h3>
                <p class="text-gray-600 dark:text-gray-300">Printer, scanner, dan aksesoris lengkap.</p>
            </div>
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-3">🛠️ Service & Perbaikan</h3>
                <p class="text-gray-600 dark:text-gray-300">Teknisi berpengalaman siap membantu perbaikan.</p>
            </div>
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-3">🌐 Software & Networking</h3>
                <p class="text-gray-600 dark:text-gray-300">Instalasi software & jaringan untuk bisnis Anda.</p>
            </div>
        </div>
    </div>
</section>

{{-- Produk Unggulan --}}
<section id="produk" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-14 text-gray-800 dark:text-gray-100">Produk Unggulan</h2>
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-3">Laptop Gaming X1</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Performa tinggi untuk gaming & kerja.</p>
                <span class="text-2xl text-orange-600 font-bold">Rp 12.000.000</span>
            </div>
            <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-3">Printer All-in-One</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Cetak, scan, copy dengan mudah.</p>
                <span class="text-2xl text-orange-600 font-bold">Rp 2.500.000</span>
            </div>
            <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-3">PC Rakitan Office</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Hemat daya, cocok untuk kantor.</p>
                <span class="text-2xl text-orange-600 font-bold">Rp 5.500.000</span>
            </div>
        </div>
    </div>
</section>

{{-- Testimoni --}}
<section id="testimoni" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-14 text-gray-800 dark:text-gray-100">Apa Kata Pelanggan?</h2>
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <p class="italic text-gray-600 dark:text-gray-300 mb-4">"Pelayanan cepat & produk berkualitas!"</p>
                <span class="font-semibold text-orange-600">– Andi</span>
            </div>
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <p class="italic text-gray-600 dark:text-gray-300 mb-4">"Teknisi sangat membantu perbaikan laptop saya."</p>
                <span class="font-semibold text-orange-600">– Sinta</span>
            </div>
            <div class="p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <p class="italic text-gray-600 dark:text-gray-300 mb-4">"Harga terjangkau, recommended banget."</p>
                <span class="font-semibold text-orange-600">– Rudi</span>
            </div>
        </div>
    </div>
</section>

{{-- Kontak & Lokasi --}}
<section id="kontak" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6 text-gray-800 dark:text-gray-100">Hubungi Kami</h2>
        <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">Kami siap membantu kebutuhan komputer Anda.</p>
        <div class="space-y-4 text-gray-700 dark:text-gray-300 text-lg">
            <p>📍 Jl. Contoh No.123, Yogyakarta</p>
            <p>📞 0812-3456-7890</p>
            <p>✉️ gloriouscomputer@email.com</p>
        </div>
        <div class="mt-10">
            <iframe src="https://www.google.com/maps/embed?pb=..." 
                    class="w-full h-72 rounded-2xl border-0 shadow-md"></iframe>
        </div>
    </div>
</section>
@endsection
