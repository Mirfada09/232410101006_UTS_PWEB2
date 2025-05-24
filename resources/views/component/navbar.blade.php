<nav class="bg-pink-300 px-6 py-4 flex justify-between items-center text-white font-semibold">
    <!-- Kiri: Navigasi -->
    <div class="flex space-x-8 text-lg">
        <a href="{{ route('dashboard', ['username' => $username]) }}"
           class="{{ request()->routeIs('dashboard') ? 'text-white border-b-2 border-pink-600' : 'text-white hover:text-pink-100' }}">
            Dashboard
        </a>
        <a href="{{ route('product', ['username' => $username]) }}"
           class="{{ request()->routeIs('product') ? 'text-pink-600 font-bold border-b-2 border-pink-600' : 'text-white hover:text-pink-100' }}">
            Product
        </a>
        <a href="{{ route('profile', ['username' => $username]) }}"
           class="{{ request()->routeIs('profile') ? 'text-pink-600 font-bold border-b-2 border-pink-600' : 'text-white hover:text-pink-100' }}">
            Profile
        </a>
    </div>

    <!-- Kanan: Tombol Logout -->
    <div>
        <a href="{{ route('logout', ['username' => $username]) }}"
           class="bg-pink-500 text-white font-bold px-4 py-2 rounded-full hover:bg-pink-600 transition">
            Logout
        </a>
    </div>
</nav>
