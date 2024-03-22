<!doctype html>
<html lang="en">
    <head>
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- asset returns the path of a static file that can be in another domain -->
    </head>
    <body>
        <nav class="navbar navbar-expang-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('vacations.index') }}">Holiday Plans</a>
                @auth
                <a href="{{ route('logout') }}">Logout</a>
                @endauth
            </div>
        </nav>
        <div class="container">
            <h1>{{ $title }}</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ $slot }}
        </div>
    </body>
</html>