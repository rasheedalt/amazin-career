<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/ico" sizes="16x16" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AmazincareersNG</title>
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/main/main.css') }}" rel="stylesheet">

</head>
<body>
    
    <navbar id ="container">
        <div id ="header">
               <a href="/" class="navbar-brand"> <img src="{{ asset('/images/Logo.png') }}" alt="Amazin Careers"> </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse" id="navbarNav" >

                   <ul class="navbar-nav">
                       <li class="nav-item"><a href="/">Home</a></li>
                       <li class="nav-item"><a href="{{ route('about.page') }}">About</a></li>
                       <li class="nav-item"><a href="{{ route('services.page') }}">Services</a></li>
                       <li class="nav-item"><a href="/">Job Vacancies</a></li>
                       <li class="nav-item"><a href="{{ route('job.post') }}">Post Jobs</a></li>
                       <li class="nav-item"><a href="{{ route('scholarships.list') }}">Scholarships</a></li>
                       <li class="nav-item"><a href="{{ route('contact.page') }}">Contact</a></li>
                       <li class="nav-item"><a href="{{ route('posts') }}">Blog</a></li>
                   </ul>
               </div>

        </div>
    </navbar>
    
    @include('components.search-bar')

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2 m-0">
                @include('components.left-sidebar')
            </div>
            <div class="col-md-8 col-sm-12 m-0">
                <div id="maincontent">
                    @include('components.flash-message')
                    @yield('main')
                    
                </div>
            </div>
            <div class="col-md-2 m-0">
                @include('components.right-sidebar')
            </div>
        </div>
    </section>

</body>
</html>