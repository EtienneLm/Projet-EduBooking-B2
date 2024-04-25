<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Make sure you have app.css in your public/css directory -->
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <div class="app">

        <main>
            @yield('content')
        </main>

    </div>
</body>
</html>
