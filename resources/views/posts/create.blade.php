@extends('layout')

@section('content')

     <h1>adadadad</h1>
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>Body</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
