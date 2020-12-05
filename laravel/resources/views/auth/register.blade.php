@extends('layouts.app')

@section('content')

<div class="bodycenter">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <fieldset>
            <h3>Register</h3>
                <h5 class="toplabel"><label>Name:</label></h5>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <h5 class="toplabel"><label>Email:</label></h5>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <h5 class="toplabel"><label>Password:</label></h5>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

   

                <h5 class="toplabel"><label>Comfirm your password:</label></h5>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                
                
                <h5 class="toplabel"><label>Is admin ? (1 or null)</label></h5>
                <input type="boolean" class="form-control" name="is_admin">
                
                <div class="inputres">
                    <button type="submit" class="butdetail2" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </fieldset>
    </form>
</div>
@endsection