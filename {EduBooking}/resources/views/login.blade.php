@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('header.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>Login Page</title>
</head>

@section('content')
<body>
    <a href="{{ url('/') }}">
        <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home button as a logo image" class="home-button-img">
    </a>
    
    <h2 class="login-text" aria-label="Login text">Login</h2>

    <div class="container" aria-label="Login Form Container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="User Login Form">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-label="Email Input">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password" aria-label="Password Input">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary" aria-label="Login Button">Login</button>
                </form>
                <div class="signup-link">
                    Don't have an account yet? <a href="{{ route('register') }}" aria-label="Sign Up Link">Register !</a>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>