<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body class="bg-pink-100 min-h-screen flex flex-col text-black">

    @include('component.navbar')

    <main class="flex-grow px-4 sm:px-8 py-6">
        @yield('content')
    </main>
    @include('component.footer')

</body>
</html>
