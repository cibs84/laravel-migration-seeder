<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('homepage') }}">Homepage</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('main_content')
    </main>
</body>
</html>