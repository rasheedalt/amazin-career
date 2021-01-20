@extends('layouts.admin-layout')

@section('content')
        <div id="login">
        
            @include('components.flash-message')
            <div class="row justify-content-center mt-3">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mx-3">
                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf 
                        <div class="">
                            <input class="form-control" name="email" placeholder="Email Address" class="@if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}" type="text" required /> <br/>
                            <input class="form-control" value="{{ old('password') }}" name="password" placeholder="Password" type="password" required /><br/>
                        </div>
                        <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->
                        <button class="btn btn-block py-3" type="submit"> Login  </button>
                    </form>
                    <p>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </p>
                </div>
            </div>

        </div>
@endsection