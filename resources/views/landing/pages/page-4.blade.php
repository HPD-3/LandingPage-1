@extends('layouts.navbar')

@section('content')
    <div class="bg-white w-full h-full m-auto">
        <div class="container flex flex-col md:flex-row justify-center items-center">

            <div class="w-full md:w-1/2 p-6 flex-start">
                <img src="https://cdn.pixabay.com/photo/2022/08/22/11/04/skate-7403432_1280.jpg" alt="skateboard"
                    class="w-full rounded-md">
            </div>

            <div class="w-full md:w-1/2 p-6 flex flex-col">
                <h1 class="text-3xl my-10 font-bold text-center md:text-left">
                    Discover the beauty<br> around the world
                </h1>
                <p class="text-1xl my-2 font-light text-gray-700 text-center md:text-left m-6 mb-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iusto, laudantium eum ducimus recusandae sapiente, quibusdam
                    ut magni id consequuntur, molestiae quia harum sint fugit.
                </p>
                <div class="text-center md:text-left">
                    <a href="#" class="inline-block bg-gray-800 text-white rounded-md text-lg px-6 py-2">
                        Explore
                    </a>
                </div>

                <div class="w-full  m-5">
                    <span class="text-gray-600 font-medium text-2xl">01</span>
                    <p class="m-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita praesentium quibusdam facilis
                        similique eos soluta doloribus autem perferendis consequuntur corporis rerum modi, officia explicabo
                        numquam sequi beatae assumenda minima doloremque.</p>
                </div>
                <div class="w-full  m-5">
                    <span class="text-gray-600 font-medium text-2xl">02</span>
                    <p class="m-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita praesentium quibusdam facilis
                        similique eos soluta doloribus autem perferendis consequuntur corporis rerum modi, officia explicabo
                        numquam sequi beatae assumenda minima doloremque.</p>
                </div>
            </div>

        </div>
    </div>
@endsection