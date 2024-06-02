<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BLOG MANIA</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                padding: 0;
                background: url('{{ asset('img/wallpaperflare.com_wallpaper.jpg') }}') no-repeat center center fixed;
                background-size: cover;
                font-family: 'Figtree', sans-serif;
                height: 100vh;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                padding-right: 5%;
                background-color: rgba(0, 0, 0, 0.5); /* Darkens the background image */
            }

            .content {
                text-align: right;
                color:  #002244; /* Dark gray text */
            }

            h1 {
                margin-bottom: 1rem;
            }

            nav a {
                margin: 0 0.5rem;
                text-decoration: none;
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: 600;
                color: #333333; /* Dark gray text */
                background-color: transparent;
                border: 2px solid  #008080;
                border-radius: 5px;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            nav a:hover {
                background-color:  #008080;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <h1 class="text-5xl font-bold">BLOG MANIA</h1>
            <h2 class="text-5xl font-bold">Discover the Future of Technology</h2>
            <p class="text-4xl font-bold">Stay ahead of the curve with the latest trends, insights, and innovations <br>
                in the  tech world. From in-depth reviews to industry news, our blog <br>
                provides the knowledge you need to navigate the fast-paced world of <br>
                technology.</p>

            <form>
                @if (Route::has('login'))
                    <nav class="flex justify-center mb-4">
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </form>
        </div>
    </body>
</html>
