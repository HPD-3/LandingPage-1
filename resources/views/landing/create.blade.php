@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Create Landing Page</h1>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('landing.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" placeholder="Title" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Url Path</label>
                <input type="text" name="url_path" placeholder="/page-1" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Short Description</label>
                <textarea name="description" placeholder="Short description"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Full Content</label>
                <textarea name="content" placeholder="Full content"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 h-32"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Image</label>
                <input type="file" name="image" accept="image/*" required class="w-full text-gray-700">
            </div>

            <div>
                <button type="submit"
                    class="bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
                    Create
                </button>
            </div>
        </form>
    </div>
@endsection