@extends('layout.layouts')

@section('content')

    <form method="POST" action="{{ route('admin.login') }}" class="form-login">
        @csrf
        <h1 class="title">{{ __('Login') }}</h1>
        <div class="control-group">
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                required autocomplete="name" autofocus >
            <label for="name" id="user">{{ __('Username') }}</label>
            <div class="bar"></div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <i id="pass-i" class="fas fa-exclamation-triangle"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <p>username: admin</p>

        <div class="control-group">
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required
                autocomplete="current-password">
            <label for="password" id="pass">{{ __('Password') }}</label>
            <div class="bar"></div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <i id="pass-i" class="fas fa-exclamation-triangle"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <p>password : admin@123</p>
        <button class="btn-login">{{ __('Login') }}</button>
        <input class="checkbox" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
        @if (Route::has('password.request'))
            <a class="forgor-password" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>

@endsection
