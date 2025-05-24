<!-- Modal Popup -->
<div id="modal-{{ $index }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 w-80 relative">
        <h2 class="text-xl font-bold text-rose-600 mb-2">{{ $product['nama'] }}</h2>
        <img src="{{ asset($product['gambar']) }}" alt="{{ $product['nama'] }}" class="w-32 h-32 mx-auto object-contain mb-4">
        <p><strong>Kategori:</strong> {{ $product['kategori'] }}</p>
        <p><strong>Harga:</strong> {{ $product['harga'] }}</p>
        <p><strong>Stok:</strong> {{ $product['stok'] }}</p>
        <p class="text-gray-600 text-sm mt-2">{{ $product['deskripsi'] }}</p>

        <div class="flex justify-between">
            <button onclick="closeModal({{ $index }})"
                class="mt-6 bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">
                Tutup
            </button>
            <button class="mt-6 bg-rose-600 hover:bg-gray-400 text-white px-4 py-2 rounded">
                Edit
            </button>
        </div>
    </div>
</div>
