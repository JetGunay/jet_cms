@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="centered login">
                <article class="tile is-child box">

                    <div class="logo">
                        <p>{{ __('Log In')}} with</p>
                    </div>

                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- Google Login --}}
                            <a href="{{ url('redirect/google') }}" class="btn btn-1 btn-1c">
                                <span>
                                    <img src="{{ asset('images/icon-google.png') }}"> Google
                                </span>
                            </a>

                            {{-- Login --}}
                            {{-- Email input --}}
                            <div class="field">
                                <span class="input input--chisato">
                                    <input class="input__field input__field--chisato input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" value="{{ old('email') }}" required>
                                    <label class="input__label input__label--chisato" for="input-13">
                                        <span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
                                    </label>
                                </span>
                            </div>
                            {{-- Password input --}}
                            <div class="field">
                                <span class="input input--chisato">
                                    <input class="input__field input__field--chisato input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" required>
                                    <label class="input__label input__label--chisato" for="input-13">
                                        <span class="input__label-content input__label-content--chisato" data-content="Password">Password</span>
                                    </label>
                                </span>
                            </div>
                            {{-- Remember --}}
                            <div class="remember">
                                <input type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>{{ __('Remember Me') }}</span>
                            </div>
                            {{-- Login button --}}
                            <div>
                                <button class="btn btn-1 btn-1c login" type="submit">
                                    <span>
                                        {{ __('Login') }}
                                    </span>
                                </button>
                            </div>
                            {{-- Forgot Password --}}
                            <div class="forgot">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        <span>{{ __('Forgot Your Password') }}?</span>
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
                        </div>
                    </form>
                </div>
            </div> --}}
