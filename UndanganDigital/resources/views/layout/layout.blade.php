<!DOCTYPE html

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/resources/css/app.css">
</head>

<body>
    <style ></style>


    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>
<footer>
    @yield('footer')
</footer>

</html>