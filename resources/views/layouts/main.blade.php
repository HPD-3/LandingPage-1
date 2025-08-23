<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hafidh.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gray-50">

    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="#" class="text-2xl font-bold text-indigo-600">Hafidh<span>.</span></a>
            <nav class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="/admin/create" class="text-gray-600 hover:text-indigo-600">Add</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Pricing</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
            </nav>
        </div>
    </header>

    <section class="bg-indigo-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome To Hafidh Pages</h1>
            <p class="text-lg md:text-xl mb-8">From Idea to Design: 50 Landing Pages.</p>
            <a href="#"
               class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
               Start Now
            </a>
        </div>
    </section>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-gray-300 mt-20">
        <div class="container mx-auto p-4 text-center">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel Landing') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>
