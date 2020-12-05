@extends('layouts.app')

@section('content')

<div class="bodycenter">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
            <fieldset>
                <h3>Login</h3>
                
                <h5><label>email:</label></h5>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                
                <h5 class="toplabel"><label>Password:</label></h5>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="row">
                    <div class="col-md-6" class="tabcatalogue">
                        <h6>Remember Me</h6>
                    </div>
                    <div class="col-md-4" class="tabcatalogue">
                        <input class="tokenrem" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                </div>
                <button type="submit" class="butdetail2" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </fieldset>
        </form>
    </div>

    @endsection