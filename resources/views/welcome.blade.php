<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/Logo.png" >
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Amazin Careers NG</title>
    <meta name="desc" content="@yield('desc','Nigerian Jobs')">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/main/main.css') }}" rel="stylesheet">
    <!-- <link  href="{{ asset('css/main/modal.css') }}" rel="stylesheet"> -->
    <style>
    .modal-newsletter {
        color: #999;
        font-size: 15px;
    }
    .modal-newsletter .modal-content {
        padding: 40px;
        border-radius: 0;
        border: 1px solid black;
    }
    .modal-newsletter .modal-header {
        border-bottom: none;
        position: relative;
        text-align: center;
        border-radius: 5px 5px 0 0;
    }
    .modal-newsletter h4 {
        color: #000;
        text-align: center;
        font-size: 30px;
        margin: 0 0 25px;
        font-weight: bold;
        text-transform: capitalize;
    }
    .modal-newsletter .close {
        /* background: #c0c3c8; */
        position: absolute;
        top: -15px;
        right: -15px;
        color: #fff;
        text-shadow: none;
        opacity: 0.5;
        width: 22px;
        height: 22px;
        border-radius: 20px;
        font-size: 16px;
    }
    .modal-newsletter .close span {
        position: relative;
        color: black;
        top: -1px;
    }
    .modal-newsletter .close:hover {
        opacity: 0.8;
    }
    .modal-newsletter .icon-box {
        color: #072638;
        display: inline-block;
        z-index: 9;
        text-align: center;
        position: relative;
        margin-bottom: 10px;
    }
    .modal-newsletter .icon-box i {
        font-size: 110px;
    }
    .modal-newsletter .form-control, .modal-newsletter .btn {
        min-height: 46px;
        border-radius: 3px;
    }
    .modal-newsletter .form-control {
        box-shadow: none;
        border-color: #dbdbdb;
    }
    .modal-newsletter .form-control:focus {
        border-color: #7265ea;
        box-shadow: 0 0 8px rgba(114, 101, 234, 0.5);
    }
    .modal-newsletter .btn {
        color: #fff;
        border-radius: 4px;
        background: #072638;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        padding: 6px 20px;
        /* min-width: 150px; */
        border: none;
    }
    .modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
        background: #072638;
        outline: none;
    }
    .modal-newsletter .input-group {
        margin: 30px 0 15px;
    }
    .hint-text {
        margin: 100px auto;
        text-align: center;
    }
    </style>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

</head>
<body>

    @include('components.navbar')

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
                <form action="{{ route('email.subscribe') }}" method="post">
                  @csrf
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
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
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
