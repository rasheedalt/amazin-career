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
            <!-- <div class="col-md-2 mx-0">
               
            </div> -->
        </div>
    </section>

    <!-- Subscribe Modal -->
    <!-- <div class="modal" id="subscribeModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="row d-flex justify-content-center align-items-center rows" >
                <div class="col-md-6">
                    <div class="card">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="text-center"> <img src="https://i.imgur.com/Dh7U4bp.png" width="200"> <span class="d-block mt-3">Subscribe to our newsletter in order not to miss new arrivals <br> promotions and discounts of our store</span>
                            <div class="mx-5">
                                <div class="input-group mb-3 mt-4"> <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2"> <button class="btn btn-success border-rad" type="button" id="button-addon2">Subscribe</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> -->
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
    <!-- <div class="modal" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-smll" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h2 class="modal-title" id="myModalLabel">Subscribe to our Newsletter.</h2>
                    <p>We promise we will not spam you.</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="#">
                            <div class="form-group col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control input-lg"  placeholder="Your email here">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Subscribe">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        $( document ).ready(function() {
            setTimeout(() => {
                $('#subscribeModal').show()
            }, 3000);

            $("#subscribeModal .close").click(function(){
                $("#subscribeModal").hide() })
        });
    </script>

    @include('components.footer')
</body>
</html>