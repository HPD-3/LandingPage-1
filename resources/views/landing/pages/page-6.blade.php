@extends('layouts.navbar')

@section('content')
    <div class="m-auto">

        <div class="container flex flex-col md:flex-row justify-between items-center">

            <!-- Bagian Teks -->
            <div class="w-full md:w-1/2 p-6 flex flex-col">
                <h1 class="text-5xl my-10 font-bold text-center md:text-left">
                    THE eWatch with the<br> newest microchip<br> technology
                </h1>
                <p class="text-lg my-2 font-light text-gray-700 text-center md:text-left mb-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iusto, laudantium eum ducimus recusandae sapiente, quibusdam
                    ut magni id consequuntur, molestiae quia harum sint fugit.
                </p>
                <div class="text-center md:text-left">
                    <a href="#"
                        class="inline-block bg-gray-800 text-white rounded-md border-2 border-solid border-gray-800 text-lg px-6 py-2 shadow-lg hover:bg-gray-900 transition">
                        Order now
                    </a>
                    <a href="#"
                        class="inline-block bg-white text-black rounded-md text-lg px-6 py-2 border-2 border-solid border-gray-800 shadow-lg hover:bg-gray-900 transition hover:text-white">
                        Explore More
                    </a>
                </div>

                <!-- List / Feature Section -->
                <div class="mt-8 space-y-6">
                    <div class="border border-gray-400 rounded-2xl p-6 flex justify-around items-center">

                        <!-- Item 1 -->
                        <div class="flex flex-col items-center text-center">
                            <span class="text-2xl">☀️</span>
                            <p class="text-sm text-gray-700">Lorem ipsum<br>dolor amet</p>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex flex-col items-center text-center">
                            <span class="text-2xl">⭐</span>
                            <p class="text-sm text-gray-700">Lorem ipsum<br>dolor amet</p>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex flex-col items-center text-center">
                            <span class="text-2xl">👁️</span>
                            <p class="text-sm text-gray-700">Lorem ipsum<br>dolor amet</p>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex flex-col items-center text-center">
                            <span class="text-2xl">🌐</span>
                            <p class="text-sm text-gray-700">Lorem ipsum<br>dolor amet</p>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Bagian Foto -->
            <div class="w-full md:w-1/2 flex justify-center p-6">
                <img src="https://i.ibb.co.com/pj2GGhvy/Screenshot-2025-09-01-183218-removebg-preview-1.png"
                    alt="Screenshot Mockup"
                    class="max-w-sm md:max-w-md drop-shadow-2xl transform hover:scale-105 transition duration-300">
            </div>
        </div>
    </div>
@endsection