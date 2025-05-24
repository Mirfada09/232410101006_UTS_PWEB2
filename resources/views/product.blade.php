
@extends('layout.app')

@section('title', 'Pengelolaan Produk')

@section('content')
<div class="min-h-screen bg-pink-100 flex items-center justify-center py-10 px-4">
    <div class="bg-pink-200 rounded-2xl p-8 w-full max-w-4xl">
        <h1 class="text-center text-3xl font-extrabold mb-6 text-pink-800">Tambah Produk Baru</h1>
        <form action="{{ route('product.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="username" value="{{ $username }}">

            {{-- Link Gambar --}}
            <input type="text" name="gambar" placeholder="Link Gambar Produk"
                   class="w-full p-2 rounded bg-white text-sm" required>

            @if (isset($gambar))
                <div class="my-4 text-center">
                    <img src="{{ $gambar }}" alt="Preview Gambar" class="max-w-full h-auto rounded-lg mx-auto">
                </div>
            @endif

            {{-- Nama dan Kategori --}}
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="nama" placeholder="Nama Produk" class="w-full p-2 rounded bg-white text-sm" required>
                <input type="text" name="kategori" placeholder="Kategori (contoh: Face)" class="w-full p-2 rounded bg-white text-sm" required>
            </div>

            {{-- Stok dan Harga --}}
            <div class="grid grid-cols-2 gap-4">
                <input type="number" name="stok" placeholder="Stok" class="p-2 rounded bg-white text-sm" required>
                <input type="number" name="harga" step="0.01" placeholder="Harga" class="p-2 rounded bg-white text-sm" required>
            </div>

            {{-- Deskripsi --}}
            <textarea name="deskripsi" placeholder="Deskripsi Produk"
                      class="w-full p-2 rounded bg-white text-sm" rows="4" required></textarea>

            {{-- Tombol Simpan --}}
            <div class="text-center">
                <button type="submit"
                        class="bg-pink-400 text-white font-bold px-6 py-2 rounded hover:bg-pink-500 transition">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

