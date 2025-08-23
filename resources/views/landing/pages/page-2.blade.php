@extends('layouts.navbar')
@section('content')
    <div class="bg-white">
        <div class="container mx-auto flex justify-center flex-col mt-10 ">
            <div class="header flex flex-col md:flex-row m-10" >
                <div class="w-full md:w-1/2">
                    <h1 class="text-5xl font-bold p-3">Just That Simple</h1>
                </div>
                <div class="flex flex-col w-full md:w-1/2">
                    <p class="text-lg my-2 font-light text-gray-700 text-center mb-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, laudantium eum ducimus recusandae sapiente, quibusdam ut magni id consequuntur, molestiae quia harum sint fugit. Fuga adipisci maiores numquam architecto explicabo?
                    </p>
                    <div class="text-left ml-1">
                        <a href="#" class="inline-block bg-gray-800 text-white rounded-md text-lg px-6 py-2">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full shadow">
                <img src="https://cdn.pixabay.com/photo/2019/08/11/14/51/sky-sports-4399129_640.jpg" class="w-full h-auto shadow">
            </div>
        </div>
    </div>
@endsection
