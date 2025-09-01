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


            <button id="menu-btn" class="relative h-10 w-10 flex flex-col justify-center items-center md:hidden">
                <span class="block h-0.5 w-7 bg-gray-800 transition-all duration-300 ease-in-out origin-center"></span>
                <span class="block h-0.5 w-7 bg-gray-800 transition-all duration-300 ease-in-out mt-1.5"></span>
                <span class="block h-0.5 w-7 bg-gray-800 transition-all duration-300 ease-in-out mt-1.5"></span>
            </button>


            <nav class="hidden md:flex space-x-4">
                <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="/admin/create" class="text-gray-600 hover:text-indigo-600">Add</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Pricing</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
            </nav>
        </div>


        <div id="menu" class="hidden flex-col space-y-2 bg-white border-t p-4 md:hidden">
            <a href="/" class="text-gray-700 hover:text-indigo-600 m-1">Home</a>
            <a href="/admin/create" class="text-gray-700 hover:text-indigo-600 m-1">Add</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600 m-1">Pricing</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600 m-1">Contact</a>
        </div>
    </header>



    <div>
        @yield('content')
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const btn = document.getElementById("menu-btn");
            const menu = document.getElementById("menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");

                const spans = btn.querySelectorAll("span");

                if (btn.classList.contains("open")) {
                    btn.classList.remove("open");
                    spans[0].classList.remove("rotate-45", "translate-y-2");
                    spans[1].classList.remove("opacity-0");
                    spans[2].classList.remove("-rotate-45", "-translate-y-2");
                } else {
                    btn.classList.add("open");
                    spans[0].classList.add("rotate-45", "translate-y-2");
                    spans[1].classList.add("opacity-0");
                    spans[2].classList.add("-rotate-45", "-translate-y-2");
                }
            });
        });
    </script>
    @extends('layouts.content')
</body>

</html>