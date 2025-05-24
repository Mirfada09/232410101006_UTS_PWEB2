
@extends('layout.guest')

@section('title', 'Login Page')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-pink-200">
    <div class="bg-pink-100 p-8 sm:p-10 rounded-xl shadow-md w-full max-w-md">
        <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
            @csrf
            <div>
                <label for="username" class="block text-gray-700 mb-1">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:ring focus:border-pink-400 bg-white" />
            </div>
            <div>
                <label for="password" class="block text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:ring focus:border-pink-400 bg-white" />
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-rose-500 text-white font-semibold px-6 py-2 rounded-md hover:bg-rose-600 transition">
                    Login
                </button>
            </div>
        </form>

        @if($errors->any())
            <p class="text-red-600 text-sm mt-4 text-center">{{ $errors->first() }}</p>
        @endif
    </div>
</div>
@endsection

