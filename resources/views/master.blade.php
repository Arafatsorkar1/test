<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css" />

    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>

        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('home')}}" class="nav-link">All Blog</a></li>
            <li><a href="{{route('blog')}}" class="nav-link">Blog Add</a></li>
            <li><a href="{{route('blog.manage')}}" class="nav-link">Manage Blog</a></li>
        </ul>
    </div>
</nav>

<script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
@yield('body')
</body>
</html>
