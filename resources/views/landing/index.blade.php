@extends('layouts.app')

@section('content')
    <h1>Main Landing Page</h1>

    <div style="display:flex; flex-wrap:wrap; gap:20px;">
        @foreach($pages as $page)
            <div style="width:200px; text-align:center;">
                <a href="{{ route('landing.show', $page->slug) }}">
                    <img src="{{ asset('storage/' . $page->image_path) }}" width="200" height="150">
                    <h3>{{ $page->title }}</h3>
                </a>
            </div>
        @endforeach
    </div>
@endsection
