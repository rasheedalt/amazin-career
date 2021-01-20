@extends('layouts.admin-layout')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
        <div id="login">
        
            @include('components.flash-message')
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row justify-content-center mt-3">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mx-3">
                <form method="POST" action="{{ route('password.email') }}" >
                        @csrf
                            <p class="text-center" >Reset Password</p>
                        <input id="email" placeholder="Enter Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    

                
                        <button type="submit" class="btn btn-block py-3 mt-2">
                            Submit
                        </button><br>
                        <a class="pl-3" href="{{ route('login') }}"> Back to login</a>
                           
                    </form>
                    
                </div>
            </div>

            
        </div>
        </div>
        </div>
    </div>
@endsection




<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
