<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AmazincareersNG</title>
    <link  href="{{ asset('css/main/main.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <style>
        /* .home {
            color: white;
            height: 20px;
            Background-color: #072638;
            border-radius: 5px;
            padding-top: 8px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 8px;
            opacity: 60%;
        } */
    </style>

</head>
<body>
    
    <navbar id ="container">
        <div id ="header">
               <a href="/"> <img src="{{ asset('/images/Logo.png') }}" alt=""> </a>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('about.page') }}">About</a></li>
                    <li><a href="{{ route('services.page') }}">Services</a></li>
                    <li><a href="/">Job Vacancies</a></li>
                    <li><a href="{{ route('job.post') }}">Post Jobs</a></li>
                    <li><a href="{{ route('scholarships.list') }}">Scholarships</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact</a></li>
                    <li><a href="{{ route('posts') }}">Blog</a></li>
                </ol>

        </div>
    </navbar>
    
    @include('components.search-bar')

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2 mx-0">
                @include('components.left-sidebar')
            </div>
            <div class="col-md-8">
                <div id="maincontent">
                    @include('components.flash-message')
                    @yield('main')
                    
                </div>
            </div>
            <div class="col-md-2 mx-0">
                @include('components.right-sidebar')
            </div>
        </div>
    </section>

</body>
</html>