@extends('layouts.app')

@section('content')
<h1>{{ $page->title }}</h1>
<img src="{{ asset('storage/' . $page->image_path) }}" width="400">
<p>{{ $page->description }}</p>
<div>{!! nl2br(e($page->content)) !!}</div>
@endsection
