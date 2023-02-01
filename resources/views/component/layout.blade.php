<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
</head>

<body>
    <div class="container-layout">
        <nav class="nav">
            <ul>
                <li><a class="daftar" href="/daftar">Daftar</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')

    <a href="/data">data</a>

</body>

</html>
