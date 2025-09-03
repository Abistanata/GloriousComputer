<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
    <div class="grid md:grid-cols-3 gap-6">
        <a href="#" class="p-6 border rounded-2xl shadow hover:shadow-lg">Produk</a>
        <a href="#" class="p-6 border rounded-2xl shadow hover:shadow-lg">Kategori</a>
        <a href="#" class="p-6 border rounded-2xl shadow hover:shadow-lg">Testimoni</a>
        <a href="#" class="p-6 border rounded-2xl shadow hover:shadow-lg">Banner/Home UI</a>
        <a href="#" class="p-6 border rounded-2xl shadow hover:shadow-lg">Pengaturan Toko</a>
        <a href="#" class="p-6 border rounded-2xl shadow hover:shadow-lg">Pengguna (opsional)</a>
    </div>
</div>
@endsection
