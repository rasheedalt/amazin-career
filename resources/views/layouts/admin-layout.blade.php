<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/Logo.png" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AmazincareersNG</title>
    <link  href="{{ asset('css/admin/main.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>

    @yield('more-styles')

</head>
<body>
    <div id ="header">
        <a href="/"> <img src="{{ asset('images/Logo.png') }}" alt=""> </a>
            <h4>ADMIN LOGIN PORTAL</h4>
    </div>

    <div class="row">
        @if(auth()->check())
                <div class="col-md-2 col-sm-3" style="height: 100vh !important; background-color: #E3E3E3"  >
                    @include('components.admin-sidebar')
                </div>
        @endif
        <div class="col-6">
            <div @if(!auth()->check()) style="min-height: 75vh;" @endif>
                @yield('content')
            </div>
        </div>
    </div>


    <footer class="bg-light text-center">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © Copyright {{ date('Y') }}
            <a class="text-dark" href="/">Amazin Careers</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>
</html>