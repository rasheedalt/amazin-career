<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/Logo.png" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AmazincareersNG</title>
    <link  href="/css/main/main.css" rel="stylesheet">
    <link  href="/css/bootstrap.css" rel="stylesheet">

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
            <div class="col-md-2 mx-0">
                @include('components.left-sidebar')
            </div>
            <div class="col-md-8" id="mid-content">
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
            <div class="col-md-2 mx-0">
                @include('components.right-sidebar')
            </div>
        </div>
    </section>

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