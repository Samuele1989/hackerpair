<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to HackerPair</title>
    {!! HTML::style('css/app.css') !!}
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark border-bottom border-warning">
        <div class="container">
            <a class="navbar-brand" href="/">HACKERPAIR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav" style="margin-right: auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events.index') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('locations.index') }}">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('languages.index') }}>Languages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('maps.index') }}>Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('about.book') }}>The Book</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="font-weight-bolder text-warning">
                @yield('content')
            </h1>
            <h2 class="text-white font-weight-bold d-none d-md-block">
                @yield('subtitle')
            </h2>
        </div>
    </div>

    <div>

    <div class="container">           
        @yield('mainContent')
    </div>
</body>

</html>