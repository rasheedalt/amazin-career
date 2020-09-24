<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AmazincareersNG</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

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
               <a href="/"> <img src="{{ asset('images/Logo.png') }}" alt=""> </a>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('about.page') }}">About</a></li>
                    <li><a href="{{ route('services.page') }}">Services</a></li>
                    <li><a href="/">Job Vacancies</a></li>
                    <li><a href="{{ route('services.page') }}">Post Jobs</a></li>
                    <li><a href="{{ route('services.page') }}">Scholarships</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact</a></li>
                    <li><a href="{{ route('services.page') }}">Blog</a></li>
                </ol>

        </div>
    </navbar>
    <section class="my-5 container">
        <div class="searchEng">
            <input placeholder="Prefered Jobs and Companies" type="text">
            <input placeholder="Prefered Location" type="text">
            <button><a href="#">Search </a></button>
        </div>

        <div class="searchEngMobile">
            <input placeholder="Search for job vancancies" type="text"/>
            <a href = "#" ><button>Search</button></a>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('components.left-sidebar')
            </div>
            <div class="col-lg-6 container">
                <div id="maincontent">
                    
                   @yield('main')
                    
                </div>
            </div>
            <div class="col-lg-3">
                @include('components.right-sidebar')
            </div>
        </div>
    </section>

</body>
</html>