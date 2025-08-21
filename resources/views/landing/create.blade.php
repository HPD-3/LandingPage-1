@extends('layouts.app')

@section('content')
<h1>Create Landing Page</h1>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('landing.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br><br>
    <textarea name="description" placeholder="Short description"></textarea><br><br>
    <textarea name="content" placeholder="Full content"></textarea><br><br>
    <input type="file" name="image" accept="image/*" required><br><br>
    <button type="submit">Create</button>
</form>
@endsection
