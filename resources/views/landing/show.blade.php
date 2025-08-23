@extends('layouts.app')


@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
        <!-- Title -->
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 text-center">
            {{ $page->title }}
        </h1>

        <!-- Image -->
        @if($page->image_path)
            <div class="mb-6 flex justify-center">
                <img src="{{ asset('storage/' . $page->image_path) }}" alt="{{ $page->title }}"
                    class="rounded-lg shadow-md max-w-full h-auto">
            </div>
        @endif

        <!-- Short Description -->
        @if($page->description)
            <p class="text-gray-700  text-lg font-bold mb-7 text-center">
                {{ $page->description }}
            </p>
        @endif
        <div class="flex justify-center">
        <a href="{{ route('landing.page', ['url_path' => $page->url_path]) }}"
            class="text-white text-lg mb-6  text-center bg-green-500 p-2 rounded-md">
            See Page!
        </a>
    </div>

    <!-- Full Content -->
    <div class="prose prose-indigo max-w-none text-gray-800">
        {!! nl2br(e($page->content)) !!}
    </div>
    </div>
@endsection