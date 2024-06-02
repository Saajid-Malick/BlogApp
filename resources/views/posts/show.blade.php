@extends('layout')

@section('content')
    <style>
        .post-box {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            background-color: #f9f9f9;
        }
        .post-box h1 {
            color: #008080; /* Green color for the heading */
        }
        .styled-button {
            background-color: #008080;
            border: none;
            border-radius: 4px;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 5px; /* Add some space between buttons */
        }
        .button-container {
            display: flex;
            align-items: center;
        }
    </style>

    <div class="post-box">
        <h1>{{ $post->title }}</h1>
        <p id="post-excerpt">
            @php
                $words = explode(' ', $post->body);
                $excerpt = implode(' ', array_slice($words, 0, 100));
            @endphp
            {{ $excerpt }}{{ count($words) > 100 ? '...' : '' }}
        </p>
        <p id="post-full" style="display: none;">
            {{ $post->body }}
        </p>
        <div class="button-container">
            
            <a href="{{ route('chirps.index') }}" class="styled-button">{{ __('Comment') }}</a>
            <button id="read-more" onclick="showFullPost()" style="background-color: transparent; color: black; border: none; margin-left: auto;">Read More</button>
        </div>
    </div>

    <script>
        function showFullPost() {
            document.getElementById('post-excerpt').style.display = 'none';
            document.getElementById('post-full').style.display = 'block';
            document.getElementById('read-more').style.display = 'none';
        }
    </script>
@endsection
