@extends('layouts.navbar')

@section('content')
    <div class="m-auto">

        <div class="container flex flex-col md:flex-row justify-center items-center m-10">

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
                    <p class="m-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita praesentium quibusdam
                        facilis
                        similique eos soluta doloribus autem perferendis consequuntur corporis rerum modi, officia explicabo
                        numquam sequi beatae assumenda minima doloremque.</p>
                </div>
                <div class="w-full  m-5">
                    <span class="text-gray-600 font-medium text-2xl">02</span>
                    <p class="m-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita praesentium quibusdam
                        facilis
                        similique eos soluta doloribus autem perferendis consequuntur corporis rerum modi, officia explicabo
                        numquam sequi beatae assumenda minima doloremque.</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 relative flex justify-center -mt-0 md:-mt-[350px] ml-10 p-6">
                <div class="w-1/2 h-[500px] md:h-[250] bg-white border border-black rounded-2xl absolute -top-6 -left-6">

                </div>

                <div
                    class="w-1/3 h-[400px] md:h-[200] bg-white border border-black rounded-2xl absolute top-[150px] right--10">

                </div>
                <div class="w-1/2 h-[500px] md:h-[250] bg-black border border-black rounded-2xl absolute top-5 left-10"><img
                        src="https://cdn.pixabay.com/photo/2019/10/29/10/16/model-4586589_640.jpg" class="bg-black border border-black rounded-2xl">
                </div>
            </div>



        </div>
@endsection