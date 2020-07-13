@extends('layouts.authApp')

@section('content')
<div class="card">
    <div class="header">
        <p class="lead">{{ __('Login') }}</p>
    </div>
    <div class="body">
        <form class="form-auth-small" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="User Name" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="control-label sr-only">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group clearfix">
                <label class="fancy-checkbox element-left" for="remember">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>{{ __('Remember Me') }}</span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
            <div class="bottom">
                @if (Route::has('password.request'))
                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
