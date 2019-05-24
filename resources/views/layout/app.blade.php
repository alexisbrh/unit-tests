<html>
    <head>
        <title>Tests</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
    </head>
    <body>
    <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand text-white" href="/">Accueil</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{ route('tests') }}">TP</a>
            </li>
        </ul>
    </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>