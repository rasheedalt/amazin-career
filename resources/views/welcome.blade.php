<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/Logo.png" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Amazin Careers NG</title>
    <meta name="desc" content="Nigerian Jobs">
    <link  href="/css/main/main.css" rel="stylesheet">
    <link  href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="/js/jquery-2.2.4.min.js.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</head>
<body>
    
    <navbar id ="container" >
        <div id ="header">
        <a href="/" class="navbar-brand"> <img src="{{ asset('/images/Logo.png') }}" alt="Amazin Careers"> </a>
              
            <ol >
                <li class="nav-item"><a href="/">Home</a></li>
                <li class="nav-item"><a href="{{ route('about.page') }}">About</a></li>
                <li class="nav-item"><a href="{{ route('services.page') }}">Services</a></li>
                <li class="nav-item"><a href="/">Job Vacancies</a></li>
                <li class="nav-item"><a href="{{ route('job.post') }}">Post Jobs</a></li>
                <li class="nav-item"><a href="{{ route('scholarships.list') }}">Scholarships</a></li>
                <li class="nav-item"><a href="{{ route('contact.page') }}">Contact</a></li>
                <li class="nav-item"><a href="{{ route('posts') }}">Blog</a></li>
            </ol>

        </div>
    </navbar>
    
    @include('components.search-bar')

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 mx-0">
                @include('components.right-sidebar')
                @include('components.left-sidebar')
            </div>
            <div class="col-lg-10 col-md-9" id="mid-content">
                <div id="maincontent">
                    @include('components.flash-message')

                    <h3>JOB VACANCIES</h3>
                    <div class="post">
                        @include('components.jobs-list', [
                        'jobs' => $jobs
                        ])
                    </div>

                </div>
            </div>
            <!-- <div class="col-md-2 mx-0">
               
            </div> -->
        </div>
    </section>

    @include('components.footer')
</body>
</html>