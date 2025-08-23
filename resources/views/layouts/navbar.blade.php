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
            <a href="/" class="text-2xl font-bold text-indigo-600">Hafidh<span>.</span></a>
            <nav class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="/admin/create" class="text-gray-600 hover:text-indigo-600">Add</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Pricing</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
            </nav>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

</body>
</html>
