@extends('layouts.app_login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card border-dark mb-12">
                <h3 style="text-align: center; margin: 5%"><strong>DataMapp</strong></h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="input-group mb-3 col-12 col-sm-12 col-md-12 col-lg-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" autocomplete="email" aria-describedby="button-addon2" autofocus>
                                <div class="input-group-append">
                                    <span class="btn btn-outline-secondary"  id="button-addon2"><span class="oi" data-glyph="person"></span></span>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="input-group mb-3 col-12 col-sm-12 col-md-12 col-lg-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" autocomplete="current-password">
                                <div class="input-group-append">
                                    <span class="btn btn-outline-secondary"  id="button-addon2"><span class="oi" data-glyph="ellipses"></span></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Login') }}
                                    </button>
                            </div>
                        </div>
{{--
                        <hr>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn-outline-dark btn-block">
                                        {{ __('Google') }}
                                    </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Facebook') }}
                                    </button>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembre Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-outline-secondary btn-block" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <a class="btn btn-outline-secondary btn-block" href="{{ route('register') }}">
                                    {{ __('Registrar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
