@extends('layouts.admin-layout')

@section('content')
        <div id="login">
        
            @include('components.flash-message')

            <form method="POST" action="{{ route('login') }}">
                @csrf 
                <input name="email" placeholder="Email Address" class="@if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}" type="text" required /> <br/>

                <input class="" value="{{ old('password') }}" name="password" placeholder="Password" type="password" required /><br/>

                <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->
                <button type="submit"> Login  </button>
            </form>
            <p>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </p>

        </div>

@endsection

