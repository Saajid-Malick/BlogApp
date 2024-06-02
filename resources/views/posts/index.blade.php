@extends('layout')

@section('content')
    <h1 class="text-2xl font-semibold text-teal-600 text-center mt-6">Blog Posts</h1>
    
    <div class="bg-white border border-gray-300 rounded-lg p-6 shadow max-w-lg mx-auto mt-6">
        <h2 class="text-xl font-semibold text-teal-600 text-center mb-4">Create a New Post</h2>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-teal-600 mb-2">Title</label>
                <input type="text" id="title" name="title" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-teal-500">
            </div>
            <div class="mb-4">
                <label for="body" class="block text-teal-600 mb-2">Body</label>
                <textarea id="body" name="body" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-teal-500 h-24 resize-vertical"></textarea>
            </div>
            <button type="submit" class="w-full p-2 bg-teal-600 text-white rounded hover:bg-teal-700 transition">Create</button>
        </form>
    </div>

    <div class="max-w-2xl mx-auto mt-6 p-6">
        @foreach ($posts as $post)
            <div class="bg-gray-100 border border-gray-300 rounded-lg p-6 mb-4">
                <h2 class="text-xl font-semibold text-gray-800">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-teal-600 hover:underline">{{ $post->title }}</a>
                </h2>
                <p class="text-gray-700 mt-2">{{ $post->body }}</p>
                <div class="mt-4">
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-teal-600 hover:underline mr-4">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-teal-600 text-white p-2 rounded hover:bg-teal-700 transition">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

<style>
    body {
        background-color: #008080;
        font-family: 'Arial', sans-serif;
    }
</style>
