@extends('layouts.navbar')

@section('content')
    <div class="bg-white w-full m-0">

        <div class="flex flex-col justify-center">

            <div class="header w-full text-start">
                <h1 class="text-5xl font-extrabold m-5 p-10">Projects and <br> Practice</h1>
            </div>

            <div class="container mx-auto px-6 py-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="bg-transparent  rounded-lg shadow hover:shadow-lg transition text-start">
                        <h2 class="text-xl font-semibold mb-2 text-gray-600">01</h2>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, explicabo.
                        </p>
                        <img src="https://cdn.pixabay.com/photo/2022/02/04/07/16/bus-6992176_640.jpg"
                            class="w-full h-50">
                    </div>

                    <div class="bg-transparent  rounded-lg shadow hover:shadow-lg transition text-start">
                        <h2 class="text-xl font-semibold mb-2 text-gray-600">02</h2>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, explicabo.
                        </p>
                        <img src="https://cdn.pixabay.com/photo/2019/05/20/00/15/human-4215636_640.jpg"
                            class="w-full h-50">
                    </div>
                    <div class="bg-transparent  rounded-lg shadow hover:shadow-lg transition text-start">
                        <h2 class="text-xl font-semibold mb-2 text-gray-600">03</h2>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, explicabo.
                        </p>
                        <img src="https://cdn.pixabay.com/photo/2019/05/19/09/35/human-4213597_640.jpg"
                            class="w-full h-50">
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection