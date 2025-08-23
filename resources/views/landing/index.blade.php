@extends('layouts.main')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Main Landing Page</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($pages as $page)
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 flex flex-col items-center">
                    <a href="{{ route('landing.show', $page->slug) }}" class="w-full text-center">
                        <img src="{{ asset('storage/' . $page->image_path) }}" alt="{{ $page->title }}"
                            class="rounded-md mb-4 w-full h-40 object-cover">
                        <h3 class="text-lg font-semibold text-gray-700 hover:text-indigo-600">
                            {{ $page->title }}
                        </h3>
                    </a>
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection