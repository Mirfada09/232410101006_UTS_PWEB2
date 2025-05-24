<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-100 min-h-screen flex flex-col text-black font-sans">
    <main class="flex-grow px-4 sm:px-8 py-6">
        @yield('content')
    </main>
</body>
</html>
