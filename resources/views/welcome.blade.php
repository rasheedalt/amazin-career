<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AmazincareersNG</title>
    <link  href="/css/main/main.css" rel="stylesheet">
    <link  href="/css/bootstrap.css" rel="stylesheet">

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
                    <li><a href="{{ route('job.post') }}">Post Jobs</a></li>
                    <li><a href="{{ route('scholarships.list') }}">Scholarships</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact</a></li>
                    <li><a href="{{ route('services.page') }}">Blog</a></li>
                </ol>

        </div>
    </navbar>
    <section class="my-5 container">
        <form action="{{ route('job.search') }}" method="post">
            @csrf
            <div class="searchEng">
                <div class="row">
                    <div class="col">
                        <input class="form-control" name="job" placeholder="Prefered Jobs and Companies" type="text">
                    </div>
                    <div class="col">
                        <input class="form-control" name="state" placeholder="Prefered Location" type="text">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <button type="submit">Searchs</button>
                    </div>
                </div>
            </div>

            <div class="searchEngMobile">
                <input placeholder="Search for job vancancies" type="text"/>
                <a href = "#" ><button >Searchsd</button></a>
            </div>
        </form>
    </section>

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2 mx-0">
                @include('components.left-sidebar')
            </div>
            <div class="col-md-8">
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

</body>
</html>