@extends('layouts.navbar')

@section('content')
<div class="bg-white">

    <div class="flex justify-center flex-col">
        <h1 class="text-3xl my-10 font-bold text-center ">Discover the beauty<br> around the world</h1>
        <p class="text-1xl my-2 font-light text-gray-700 text-center m-10 mb-10">Lorem ipsum dolor sit amet consectetur
            adipisicing
            elit. Iusto, laudantium eum ducimus recusandae sapiente, quibusdam ut magni id consequuntur, molestiae quia
            harum sint fugit. Fuga adipisci maiores numquam architecto explicabo?</p>
        <div class="text-center">
            <a href="#" class="inline-block bg-gray-800 text-white rounded-md text-lg px-6 py-2">
                Explore
            </a>
        </div>

        <div class="container mx-auto py-16 px-6 grid gap-10 md:grid-cols-4">
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2025/08/11/10/07/milky-way-9767930_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2025/03/13/10/50/fall-9467534_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2025/08/08/00/34/building-9761776_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2025/07/28/17/07/reindeer-9740970_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2025/07/14/16/59/kananaskis-9714444_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2022/04/06/03/11/ant-7114721_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg">
                <img src="https://cdn.pixabay.com/photo/2022/12/11/11/43/building-7648743_640.jpg" class="rounded-2xl w-full aspect-square object-cover ">
            </div>
            <div class="bg-transparent shadow-lg ">
                <img src="https://cdn.pixabay.com/photo/2022/11/17/09/49/fog-7597710_640.jpg" class="rounded-2xl w-full aspect-square object-cover  ">
            </div>
        </div>
    </div>

</div>

@endsection