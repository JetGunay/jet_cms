@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

        <div class="tile is-ancestor">
            <div class="tile is-parent is-8">
                <article class="tile is-child box">
                    <p class="title">{{ __('Log In')}}</p>
                    {{-- <p class="subtitle">With some content</p> --}}
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="field">
                                {{-- <label class="label">{{ __('Email') }}</label> --}}
                                <div class="control has-icons-left has-icons-right">
                                <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                {{-- <label class="label">{{ __('Password') }}</label> --}}
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <label class="checkbox">
                                    <input type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="button is-custom">
                                    {{ __('Login') }}
                                </button>

                                <a href="{{ url('redirect/google') }}" class="button is-link">Google</a>

                                @if (Route::has('password.request'))
                                    <a class="button is-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                        
                    </div>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">Side column</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </article>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
