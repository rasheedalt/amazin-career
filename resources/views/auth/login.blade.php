@extends('layouts.admin-layout')

@section('content')
<div id="login">

    <form method="POST" action="{{ route('login') }}">
        @csrf 
        <input name="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" type="text" required /> <br/>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="@error('password') is-invalid @enderror" name="password" placeholder="Password" type="password" required /><br/>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label><br>
        
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

