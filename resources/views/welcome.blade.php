<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AmazincareersNG</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/bootstrap.css">

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
               <a href="index.html"> <img src="images/Logo.png" alt=""> </a>
                <ol>
                    <li class="">Home</li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Services.html">Services</a></li>
                    <li><a href="JobVancancies.html">Job Vacancies</a></li>
                    <li><a href="PostJob.html">Post Jobs</a></li>
                    <li><a href="Scholarship.html">Scholarships</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                    <li><a href="Blog.html">Blog</a></li>
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
                    
                    <h3>JOB VACANCIES</h3>
                    <div class="post">
                        @php
                            $jobs = App\Models\Job::paginate(10);
                        @endphp

                        @foreach($jobs as $job)
                           <h4>{{ $job->title }}</h4>
                           <date> Date: {{$job->created_at}} </date>
                           <p>{{ $job->description }}<a href="JobView.html">read more</a> </p>
                           <hr>
                        @endforeach


                    </div>

                    <div class="nextBTN">

                        {{ $jobs->links() }}

                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3">
                @include('components.right-sidebar')
            </div>
        </div>
    </section>

</body>
</html>