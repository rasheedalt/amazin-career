<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/ico" sizes="16x16" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Amazin Careers NG')</title>
    <meta name="desc" content="@yield('desc','Nigerian Jobs')">
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/main/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>

</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-light bg-light" >
    <a class="navbar-brand" href="/"><img src="{{ asset('/images/Logo.png') }}"  height="150px" width="150px" alt="Amazin Careers"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <!-- <div id ="header"> -->
        <!-- <a href="/" class="navbar-brand"> <img src="{{ asset('/images/Logo.png') }}" alt="Amazin Careers"> </a> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about.page') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services.page') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Job Vacancies</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('job.post') }}">Post Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('scholarships.list') }}">Scholarships</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact.page') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('posts') }}">Blog</a></li>
            </ul>

        </div>
    </nav>
    
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
            <!-- <div class="col-md-2 m-0">
            </div> -->
        </div>
    </section>

    @include('components.footer')

</body>
</html>