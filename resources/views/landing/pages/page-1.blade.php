@extends('layouts.navbar')

@section('content')
<div class="bg-white py-12 m-5">
    <div class="container mx-auto flex flex-col md:flex-row gap-8">
        
        <!-- LEFT SIDE (Text) -->
        <div class="md:w-1/3 flex flex-col justify-center">
            <h1 class="text-3xl font-bold mb-6">
                Discover the beauty<br> around the world
            </h1>
            <p class="text-gray-700 font-light mb-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Iusto, laudantium eum ducimus recusandae sapiente, quibusdam 
                ut magni id consequuntur, molestiae quia harum sint fugit.
            </p>
            <a href="#" class="inline-block bg-gray-800 text-white rounded-md text-lg px-6 py-2">
                Get started
            </a>
        </div>

        <div class="md:w-2/3 grid grid-cols-2 gap-6">
            

            <img src="https://cdn.pixabay.com/photo/2025/08/11/10/07/milky-way-9767930_640.jpg" 
                 class="rounded-xl w-full h-60 object-cover col-span-1">
            
            <img src="https://cdn.pixabay.com/photo/2025/08/08/00/34/building-9761776_640.jpg" 
                 class="rounded-xl w-full h-60 object-cover col-span-1">
            

            <div class="grid grid-cols-3 gap-6 col-span-2">
                <div>
                    <span class="block text-sm text-gray-400 mb-2 font-bold">01</span>
                    <img src="https://cdn.pixabay.com/photo/2025/07/28/17/07/reindeer-9740970_640.jpg" 
                         class="rounded-xl w-full h-40 object-cover">
                </div>
                <div>
                    <span class="block text-sm text-gray-400 mb-2 font-bold">02</span>
                    <img src="https://cdn.pixabay.com/photo/2025/07/14/16/59/kananaskis-9714444_640.jpg" 
                         class="rounded-xl w-full h-40 object-cover">
                </div>
                <div>
                    <span class="block text-sm text-gray-400 mb-2 font-bold">03</span>
                    <img src="https://cdn.pixabay.com/photo/2022/11/17/09/49/fog-7597710_640.jpg" 
                         class="rounded-xl w-full h-40 object-cover">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
