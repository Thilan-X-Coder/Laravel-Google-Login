@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="text-center mt-3 button-container">
                                <a href =  '{{route("auth.google")}}' >
                                    <img src="{{ asset('img/google.png') }}" alt="Google Sign-In" class="google-icon">
                                <p class="bold-text">Sign in with Google</p>
                                </a>
                                
                            </div>
                    <style>
                       .card-body {
                            text-align: center; /* Centers inline elements within the card body */
                        }

                    .button-container {
                            display: inline-flex; /* Aligns children elements in a row */
                            align-items: center; /* Vertically centers items */
                            border: 2px solid #000; /* Black border */
                            border-radius: 8px; /* Rounded corners */
                            padding: 5px 10px; /* Space between border and content */
                            background-color: #fff; /* Background color inside the border */
                            cursor: pointer; /* Pointer cursor to indicate it is clickable */
                            text-decoration: none; /* Removes underline from text */
                            transition: background-color 0.3s, border-color 0.3s; /* Smooth transition for hover effects */
                            font-size: 16px; /* Adjust font size */
                            max-width: 250px; /* Maximum width of the button, adjust as needed */
                            width: 100%; /* Ensure the button does not exceed the container width */
                            box-sizing: border-box; /* Includes padding and border in the element's total width and height */
                            margin: 0 auto; /* Center the button horizontally */
                        }

                        .button-container:hover {
                            background-color: #f0f0f0; /* Background color on hover */
                            border-color: #333; /* Darker border color on hover */
                        }

                        .google-icon {
                            width: 30px; /* Adjust width as needed */
                            height: auto; /* Maintain aspect ratio */
                            margin-right: 10px; /* Space between image and text */
                        }

                        .bold-text {
                            font-weight: bold;
                            margin: 0; /* Remove default margin */
                        }

                    </style>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
