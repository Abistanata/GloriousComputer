{{-- resources/views/welcome.blade.php --}}
@extends('layouts.theme')

@section('content')
    {{-- Hero Section --}}
    <section class="relative w-full h-screen flex items-center justify-center text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner.jpg') }}" 
                 alt="Banner Glorious Computer"
                 class="w-full h-full object-cover brightness-75 scale-110 animate-zoomSlow">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
        </div>

        <div class="relative z-10 text-center px-6 animate-fadeIn">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 drop-shadow-xl">
                Glorious Computer
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto text-gray-200">
                Solusi Komputer Terbaik untuk Bisnis & Personal
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('items/produk') }}" 
                   class="px-8 py-3 bg-orange-600 hover:bg-orange-700 rounded-full text-white font-semibold shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">
                     Lihat Produk
                </a>
                <a href="{{ url('kontak') }}" 
                   class="px-8 py-3 bg-white hover:bg-gray-200 rounded-full text-gray-800 font-semibold shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">
                    📞 Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    {{-- Tentang Kami --}}
    <section id="about" class="py-20 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6 animate-fadeIn">Tentang Kami</h2>
            <p class="text-gray-700 max-w-3xl mx-auto mb-12 animate-fadeIn delay-200">
                Glorious Computer berkomitmen memberikan solusi IT terpercaya untuk individu maupun bisnis.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach ([['10+','Tahun Pengalaman'],['500+','Klien Puas'],['1000+','Produk Terjual'],['24/7','Support Aktif']] as $i => $stat)
                <div class="animate-fadeInUp delay-{{ $i * 200 }}">
                    <h3 class="text-5xl font-extrabold text-orange-600">{{ $stat[0] }}</h3>
                    <p class="text-gray-600">{{ $stat[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section id="services" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-12 animate-fadeIn">Layanan Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach (['Service Hardware', 'Software & Installasi', 'Konsultasi IT'] as $i => $service)
                <div class="p-8 border rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 hover:bg-orange-50 animate-fadeInUp delay-{{ $i * 200 }}">
                    <h3 class="text-2xl font-bold mb-4">{{ $service }}</h3>
                    <p class="text-gray-600">Kami memberikan layanan {{ strtolower($service) }} dengan kualitas terbaik.</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Produk --}}
    <section id="produk" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-12 text-center animate-fadeIn">Produk Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach (range(1,6) as $i)
                <div class="bg-white border rounded-2xl shadow-md hover:shadow-xl transition p-4 animate-fadeInUp delay-{{ $i * 150 }}">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/produk'.$i.'.jpg') }}" 
                             class="w-full h-48 object-cover transform hover:scale-110 transition duration-500" 
                             alt="Produk {{ $i }}">
                    </div>
                    <h3 class="text-xl font-bold">Produk {{ $i }}</h3>
                    <p class="text-gray-600 mb-4">Deskripsi singkat produk {{ $i }}.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-orange-600 font-bold">Rp{{ number_format(100000 * $i,0,',','.') }}</span>
                        <a href="#" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">Beli</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section id="testimoni" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-12 animate-fadeIn">Apa Kata Mereka</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach (['Andi', 'Budi', 'Citra'] as $i => $customer)
                <div class="p-6 bg-gray-50 border rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-2 animate-fadeInUp delay-{{ $i * 200 }}">
                    <p class="italic text-gray-600 mb-4">
                        "Pelayanan {{ $customer }} sangat memuaskan, produk berkualitas tinggi."
                    </p>
                    <h3 class="font-bold text-orange-600">— {{ $customer }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Kontak --}}
    <section id="kontak" class="py-20 bg-gradient-to-br from-gray-100 via-white to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-center relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-6 animate-fadeIn">Hubungi Kami</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-8 animate-fadeIn delay-200">Kami siap membantu kebutuhan Anda.</p>

            {{-- Tombol WhatsApp --}}
            <a href="https://wa.me/6281234567890" target="_blank" 
               class="inline-block px-8 py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 animate-bounce">
                💬 Chat via WhatsApp
            </a>

            {{-- Info Kontak --}}
            <div class="space-y-4 text-gray-700 dark:text-gray-300 text-lg mb-10 mt-10 animate-fadeInUp delay-300">
                <p>📍 Glorious Computer, No 4 (Depan BRI, Jl. Argandaru, Dusun 5, Bukateja, Purbalingga, Jawa Tengah 53382</p>
                <p>📞 0821-3380-3940</p>
                <p>✉️ gloriouscomputer@email.com</p>
            </div>

            {{-- Form Kontak --}}
            <form action="#" method="POST" 
                  class="grid grid-cols-1 gap-6 max-w-2xl mx-auto text-left animate-fadeInUp delay-500">
                <input type="text" placeholder="Nama" 
                       class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-orange-500 transition">
                <input type="email" placeholder="Email" 
                       class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-orange-500 transition">
                <textarea placeholder="Pesan" rows="4" 
                          class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-orange-500 transition"></textarea>
                <button class="w-full px-6 py-3 bg-orange-600 text-white rounded-lg shadow-md hover:bg-orange-700 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    Kirim
                </button>
            </form>

            {{-- Map --}}
            <div class="mt-10 animate-fadeInUp delay-700">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0596510563556!2d109.4235094749978!3d-7.006158792999033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e656ff33b6e6d8b%3A0x6fa8848c2db925cd!2sNo%204%2C%20Jl.%20Argandaru%2C%20Dusun%205%2C%20Bukateja%2C%20Kabupaten%20Purbalingga%2C%20Jawa%20Tengah%2053382!5e0!3m2!1sid!2sid!4v1693380000000!5m2!1sid!2sid" 
                    class="w-full h-72 rounded-2xl border-0 shadow-md"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection

{{-- Tambahan animasi custom --}}
<style>
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fadeInUp { animation: fadeInUp 1s ease forwards; }
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
.animate-fadeIn { animation: fadeIn 1.2s ease forwards; }
@keyframes zoomSlow {
  from { transform: scale(1.1); }
  to { transform: scale(1); }
}
.animate-zoomSlow { animation: zoomSlow 10s ease-in-out forwards; }
</style>
