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
    <link  href="/css/modal.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="/js/bootstrap.min.js"></script>

</head>
<body>

    @include('components.navbar')
    <!-- <navbar id ="container" >
        <div id ="header">
        <a href="/" class="navbar-brand"> <img src="{{ asset('/images/AmzinCareerBannerPNG.png') }}" alt="Amazin Careers"> </a>
              
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
    </navbar> -->
    
    @include('components.search-bar')

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-3 col-md-4 mx-0">
                @include('components.right-sidebar')
                @include('components.left-sidebar')
            </div>
            <div class="col-xl-10 col-lg-9 col-md-8" id="mid-content">
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
        </div>
    </section>

    <!-- Subscribe Modal -->
    <div id="subscribeModal" class="modal">
        <div class="modal-dialog modal-newsletter">
            <div class="modal-content">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="modal-header">
                        <div class="icon-box">						
                            <i class="fa fa-envelope-open-o"></i>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
                    </div>
                    <div class="modal-body text-center">
                        <h4>Subscribe to our job alerts</h4>	
                        <p>Join our subscribers list to get the latest jobs, updates and special offers delivered directly in your inbox.</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </span>
                        </div>
                    </div>
                </form>			
            </div>
        </div>
    </div>

    @include('components.footer')

    <script>
        $( document ).ready(function() {
            setTimeout(() => {
                $('#subscribeModal').show()
            }, 3000);

            $("#subscribeModal .close").click(function(){
                $("#subscribeModal").hide() })
        });
    </script>
</body>
</html>