<!doctype html>
<html lang="en">
    <head>
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- asset returns the path of a static file that can be in another domain -->
    </head>
    <body>
        <div class="container">
            <h1>{{ $title }}</h1>
            {{ $slot }}
        </div>
    </body>
</html>