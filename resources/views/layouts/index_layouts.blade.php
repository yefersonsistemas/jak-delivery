<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="{{asset('css/trap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
    </head>
    <body>
        <div id="home-app">
            <header>
                @yield('header')  
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                @yield('footer')
            </footer>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="{{asset('js/trap.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
