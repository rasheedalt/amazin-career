<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AmazincareersNG</title>
    <link  href="{{ asset('css/admin/main.css') }}" rel="stylesheet">
    @if(in_array(Route::currentRouteName(),['login', 'password.request']) )
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @endif

    @yield('more-styles')

</head>
<body>
    <div id ="header">
        <a href="/"> <img src="{{ asset('images/Logo.png') }}" alt=""> </a>
            <h4>ADMIN LOGIN PORTAL</h4>
    </div>

    @if(auth()->check())
        @include('components.admin-sidebar')
    @endif

    @yield('content')

</body>
</html>