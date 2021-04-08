<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/ico" sizes="16x16" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Amazin Careers NG')</title>
    <meta name="desc" content="@yield('desc','Nigerian Jobs')">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/main/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <style>
        body{
          font-family: 'Roboto', Roboto, Geneva, Verdana, sans-serif !important;
        }
    </style>

</head>
<body>
    @include('components.navbar')
    @include('components.search-bar')

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 m-0">
                @include('components.right-sidebar')
                @include('components.left-sidebar')
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12 m-0" id="mid-content">
                <div id="maincontent">
                    @include('components.flash-message')
                    @yield('main')

                </div>
            </div>

        </div>
    </section>

    @include('components.footer')

</body>
</html>
