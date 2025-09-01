<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hafidh.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased bg-gray-50">

    <!-- HEADER -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="/" class="text-2xl font-bold text-indigo-600">Hafidh<span>.</span></a>

            <button id="menu-btn" class="relative h-10 w-10 flex flex-col justify-center items-center md:hidden">
                <span class="block h-0.5 w-7 bg-gray-800 transition-all duration-300 ease-in-out"></span>
                <span class="block h-0.5 w-7 bg-gray-800 transition-all duration-300 ease-in-out mt-1.5"></span>
                <span class="block h-0.5 w-7 bg-gray-800 transition-all duration-300 ease-in-out mt-1.5"></span>
            </button>

            <nav class="hidden md:flex space-x-6 font-medium">
                <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="#features" class="text-gray-600 hover:text-indigo-600">Features</a>
                <a href="#portfolio" class="text-gray-600 hover:text-indigo-600">Portfolio</a>
                <a href="#pricing" class="text-gray-600 hover:text-indigo-600">Pricing</a>
                <a href="#contact" class="text-gray-600 hover:text-indigo-600">Contact</a>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div id="menu" class="hidden flex-col space-y-2 bg-white border-t p-4 md:hidden">
            <a href="/" class="text-gray-700 hover:text-indigo-600">Home</a>
            <a href="#features" class="text-gray-700 hover:text-indigo-600">Features</a>
            <a href="#portfolio" class="text-gray-700 hover:text-indigo-600">Portfolio</a>
            <a href="#pricing" class="text-gray-700 hover:text-indigo-600">Pricing</a>
            <a href="#contact" class="text-gray-700 hover:text-indigo-600">Contact</a>
        </div>
    </header>

    <!-- HERO -->
    <section class="relative bg-indigo-700 text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-700 opacity-90"></div>
        <div class="relative container mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Build Stunning Websites</h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Hafidh helps you create modern and powerful landing pages for portfolios, businesses, and startups.
            </p>
            <a href="#features"
                class="bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg shadow hover:bg-gray-100 transition">
                Get Started
            </a>
        </div>
    </section>

    @yield('content')

    <!-- FEATURES -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12">Our Features</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Responsive Design</h3>
                    <p class="text-gray-600">Your website will look great on any device, desktop or mobile.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">SEO Optimized</h3>
                    <p class="text-gray-600">Rank higher on search engines and get discovered easily.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Fast & Secure</h3>
                    <p class="text-gray-600">Enjoy blazing fast performance with strong security practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12">Recent Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://i.ibb.co.com/dsDP2CFR/Chat-GPT-Image-1-Sep-2025-19-36-34.png" alt="Project 1" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">E-Commerce Website</h3>
                        <p class="text-gray-600">A modern online shop with secure checkout.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://i.ibb.co.com/FkTsQ9x6/Chat-GPT-Image-1-Sep-2025-19-15-01.png" alt="Project 2" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Portfolio Design</h3>
                        <p class="text-gray-600">Clean and elegant design for creatives.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://i.ibb.co.com/FbgFYxzm/Chat-GPT-Image-1-Sep-2025-19-15-28.png" alt="Project 3" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Company Website</h3>
                        <p class="text-gray-600">Professional landing page for business growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12">Pricing Plans</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-2">Basic</h3>
                    <p class="text-gray-600 mb-4">For personal use</p>
                    <p class="text-4xl font-bold mb-6">$19</p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>✔ 1 Landing Page</li>
                        <li>✔ Responsive Design</li>
                        <li>✔ SEO Setup</li>
                    </ul>
                    <a href="#" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700">Choose</a>
                </div>
                <div class="bg-indigo-600 text-white p-8 rounded-xl shadow hover:shadow-lg transition transform scale-105">
                    <h3 class="text-xl font-bold mb-2">Pro</h3>
                    <p class="mb-4">For small businesses</p>
                    <p class="text-4xl font-bold mb-6">$49</p>
                    <ul class="space-y-2 mb-6">
                        <li>✔ 5 Pages Website</li>
                        <li>✔ Advanced SEO</li>
                        <li>✔ Free 1 Month Support</li>
                    </ul>
                    <a href="#" class="bg-white text-indigo-600 px-6 py-2 rounded-lg hover:bg-gray-200">Choose</a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-2">Enterprise</h3>
                    <p class="text-gray-600 mb-4">For companies</p>
                    <p class="text-4xl font-bold mb-6">$99</p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>✔ Unlimited Pages</li>
                        <li>✔ Premium SEO</li>
                        <li>✔ 24/7 Support</li>
                    </ul>
                    <a href="#" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700">Choose</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-indigo-700 text-white text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Build Your Website?</h2>
        <p class="text-lg mb-8">Let’s bring your ideas to life with a stunning online presence.</p>
        <a href="#contact" class="bg-white text-indigo-700 px-8 py-3 rounded-lg shadow hover:bg-gray-100">Contact Us</a>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="bg-gray-900 text-gray-300 py-10">
        <div class="container mx-auto grid md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h3 class="text-xl font-bold mb-4">Hafidh.</h3>
                <p>Building modern websites for businesses and individuals.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="#features" class="hover:text-white">Features</a></li>
                    <li><a href="#portfolio" class="hover:text-white">Portfolio</a></li>
                    <li><a href="#pricing" class="hover:text-white">Pricing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Contact</h4>
                <p>Email: contact@hafidh.com</p>
                <p>Phone: +62 812 3456 7890</p>
            </div>
        </div>
        <div class="text-center mt-10 text-gray-500 text-sm">
            &copy; {{ date('Y') }} Hafidh. All rights reserved.
        </div>
    </footer>

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
</body>
</html>
