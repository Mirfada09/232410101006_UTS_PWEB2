
@extends('layout.app')

@section('title', 'Profile')

@section('content')
<div class="min-h-screen bg-pink-100 flex items-center justify-center py-10 px-4">
    <div class="bg-pink-200 rounded-2xl p-8 w-full max-w-3xl shadow-lg flex flex-col md:flex-row items-center md:items-start justify-between gap-8">
        <div class="w-full md:w-2/3 space-y-4">
            <div>
                <label class="block text-sm font-semibold mb-1">Nama</label>
                <input type="text" readonly value="{{ $profileData['nama'] }}"
                       class="w-full bg-pink-100 border border-pink-300 rounded-full px-4 py-2 text-sm text-gray-700">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Username</label>
                <input type="text" readonly value="Blissluxe"
                       class="w-full bg-pink-100 border border-pink-300 rounded-full px-4 py-2 text-sm text-gray-700">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Password</label>
                <input type="password" readonly value="............"
                       class="w-full bg-pink-100 border border-pink-300 rounded-full px-4 py-2 text-sm text-gray-700">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Nomor Telepon</label>
                <input type="text" readonly value="{{ $profileData['telepon'] }}"
                       class="w-full bg-pink-100 border border-pink-300 rounded-full px-4 py-2 text-sm text-gray-700">
            </div>
        </div>
        <div class="flex-shrink-0">
            <img src="{{ $profileData['foto'] ?? asset('images/cushion.jpg') }}"
                 alt="Foto Profil"
                 class="rounded-full w-40 h-40 object-cover border-4 border-pink-300 shadow-md">
        </div>
    </div>
</div>
@endsection

