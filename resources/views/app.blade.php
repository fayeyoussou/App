<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav>
            <ul>
                <li>
                    <a href="{{route('homepage')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('test')}}">Test</a>
                </li>
                <li>
                    <a href="{{route('blog')}}">Blog</a>
                </li>
            </ul>
        </nav>
        <div>
            @yield('content')
        </div>
    </body>
</html>
