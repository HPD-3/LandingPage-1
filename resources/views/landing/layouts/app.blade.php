<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel Landing') }}</title>

    <!-- Tailwind (optional) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased">

    <div class="container mx-auto p-4">
        @yield('content')  {{-- ✅ Konten halaman akan dimasukkan di sini --}}
    </div>

</body>
</html>
