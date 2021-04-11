<nav style="background-color: #F2EDED;     min-height: 20vh;" class="navbar navbar-expand-lg navbar-light" >
    <a class="navbar-brand" href="/"><img class="" style="height: 100px;" src="{{ asset('/images/AmzinCareerBannerPNG.png') }}" alt="Amazin Careers"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a href="/" class="navbar-brand"> <img src="{{ asset('/images/Logo.png') }}" alt="Amazin Careers"> </a> -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-md-1"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="{{ route('about.page') }}">About</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="{{ route('services.page') }}">Services</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="/">Jobs</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="{{ route('job.post') }}">Post Jobs</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="{{ route('scholarships.list') }}">Scholarships</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="{{ route('contact.page') }}">Contact</a></li>
            <li class="nav-item mr-md-1"><a class="nav-link" href="{{ route('posts') }}">Blog</a></li>
        </ul>
    </div>
</nav>
