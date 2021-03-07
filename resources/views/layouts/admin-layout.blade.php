<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/Logo.png" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AmazincareersNG</title>
    <link  href="{{ asset('css/admin/main.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @yield('more-styles')

</head>
<body>
    <div id ="header">
        <a href="/"> <img src="{{ asset('images/Logo.png') }}" alt="amazin careers ng logo"> </a>
            <h4>AMAZIN CAREERS ADMIN</h4>
    </div>

    @if(auth()->check())
    <button class="navbar-toggler" style="color:#fff; font-size:28px;" type="button" data-toggle="collapse" data-target="#side" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
    </button>
        <div class="row @if(!auth()->check()) justify-content-center @endif">
            <div id="side" class="col-md-2 col-sm-3" style="min-height: 100vh !important; background-color: #E3E3E3"  >
                @include('components.admin-sidebar')
            </div>

            <div id="main-content" class="col-md-10 col-sm-9 mx-3 mx-md-0">
                @include('components.flash-message')
                <div >
                    @yield('content')
                </div>
            </div>
        </div>
    @else
        <div id="main-content">
            <div style="min-height: 75vh;">
                @yield('content')
            </div>
        </div>
    @endif


    <footer class="bg-light text-center">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © Copyright {{ date('Y') }}
            <a class="text-dark" href="/">Amazin Careers</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script>
        $('.navbar-toggler').click(function(){
            $('#side').toggle()
        })
    </script>
    @yield('more-scripts')

</body>
</html>