@extends('layouts.admin-layout')

@section('content')
        <div id="login">
        
            <div class="">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <span style="color:red">{{ $error }}</span><br>
                    @endforeach     
                @endif
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf 
                <input name="email" placeholder="Email Address" class="@if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}" type="text" required /> <br/>

                <input class="@error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="Password" type="password" required /><br/>

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

