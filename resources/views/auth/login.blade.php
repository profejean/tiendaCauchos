@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align: center;"> <h2><strong>{{ __('Panel Administrativo') }}</strong></h2></div>
    <div class="row justify-content-center" style="background: #968F8F;">
        <div class="col-md-8">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: #FFFFFF">
                                        <h4>{{ __('Recuérdame') }}</h4>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                <button type="submit" class="btn btn-danger">
                                    <h5>{{ __('Iniciar sección') }}</h5>
                                </button>
                            </div>
                        </div>

                </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                @if (Route::has('password.request'))
                    <a class="btn btn-danger" href="{{ route('password.request') }}">
                        {{ __('Olvidastes tu contraseña?') }}
                    </a>
                @endif
        </div>
    </div>
                    </form>

</div>
@endsection
