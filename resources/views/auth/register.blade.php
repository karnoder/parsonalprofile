@extends('layouts.appauth')

@section('auth_content')
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Register</h1>
        <p class="account-subtitle">Access to our dashboard</p>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" name="phone" @error('phone') is-invalid @enderror value="" type="text" autocomplete="Phone" placeholder="Phone">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="New-Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm-Password" autocomplete="new-password">
            </div>
            <div class="form-group mb-0">
                <button class="btn btn-primary btn-block" type="submit">Register</button>
            </div>
        </form>
        <!-- /Form -->

        <div class="login-or">
            <span class="or-line"></span>
            <span class="span-or">or</span>
        </div>

        <!-- Social Login -->
        <div class="social-login">
            <span>Register with</span>
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i
                    class="fab fa-google"></i></a>
        </div>
        <!-- /Social Login -->

        <div class="text-center dont-have">Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</div>
@endsection
