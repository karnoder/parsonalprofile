@extends('layouts.appauth')

@section('auth_content')
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Login</h1>
        <p class="account-subtitle">Access to our dashboard</p>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="current-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
        <!-- /Form -->

        <div class="text-center forgotpass">
            <a href="forgot-password.php">Forgot Password?</a>
        </div>
        <div class="login-or">
            <span class="or-line"></span>
            <span class="span-or">or</span>
        </div>

        <!-- Social Login -->
        <div class="social-login">
            <span>Login with</span>
            <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="google">
                <i class="fab fa-google"></i>
            </a>
        </div>
        <!-- /Social Login -->

        <div class="text-center dont-have">
            Don’t have an account?
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>

@endsection
