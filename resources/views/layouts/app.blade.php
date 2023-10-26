<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{Vite::asset('resources/img/dc-logo.png')}}" type="image/x-icon">
    <title>laravel-comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        @yield('header-content')
    </header>

    <div class="jumbotron d-flex align-items-end">
        @yield('jumbotron-content')
    </div>

    <main>
        @yield('main-content')
        @yield('merchandise')
    </main>

    <footer>
        @yield('footer-content')
    </footer>

</body>

</html>