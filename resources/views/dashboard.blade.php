@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-pink-200 py-8 px-4">
    <div class="bg-pink-100 rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-700">Welcome, Mirfadaay {{ $username }}!</h1>
            <a href="{{ route('logout', ['username' => $username]) }}"
                class="bg-rose-400 text-white px-4 py-2 rounded-full hover:bg-rose-500 transition">Logout</a>
        </div>

        {{-- Produk Section --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($products as $index => $product)
                <div class="bg-pink-100 rounded-xl p-6 shadow-md text-center flex flex-col items-center space-y-3">
                    <img src="{{ asset($product['gambar']) }}" alt="{{ $product['nama'] }}" class="w-24 h-24 object-contain">
                    <h3 class="text-lg font-bold text-pink-700">{{ $product['nama'] }}</h3>
                    <p class="text-gray-700">Harga: {{ $product['harga'] }}</p>
                    <p class="text-gray-700">Stok: {{ $product['stok'] }}</p>
                    <button onclick="openModal({{ $index }})"
                        class="mt-2 bg-rose-500 hover:bg-rose-600 text-white px-4 py-2 rounded-full text-sm">
                        Lihat Detail
                    </button>
                </div>

                {{-- Include Modal --}}
                @include('component.modal-detail-produk', ['product' => $product, 'index' => $index])
            @endforeach
        </div>
    </div>
</div>

{{-- Modal Script --}}
<script>
    function openModal(index) {
        document.getElementById(`modal-${index}`).classList.remove('hidden');
    }

    function closeModal(index) {
        document.getElementById(`modal-${index}`).classList.add('hidden');
    }
</script>
@endsection
