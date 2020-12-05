@extends('layouts.app')

@section('content')


<div class="bodycenter">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <fieldset>
            <h3>Reset</h3>

            <p class="toplabel"><label>E-Mail Address</label></p>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="inputres">
                <button type="submit" class="butdetail2" class="btn btn-primary" >
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </fieldset>
    </form>
</div>
@endsection