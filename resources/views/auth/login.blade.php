@extends('layouts.app')

@section('content')
<div style="background-color: #000000;">
        <div class="container fixed-bottom" style="width: 770px;background-color: #ffffff;border-radius:10px;">
            <h1 style="padding-right: 0px;padding-left: 0px;margin-bottom: 30px;">Stephi Place Estate</h1>
            <p style="color: rgb(0,139,210);font-size: 25px;padding-left: 303px;margin-bottom: 5%;">Connexion</p>
            <div>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col md-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="font-size: 20px;">
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col md-2">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe" style="font-size: 20px;">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Se connecter') }}
                                </button>
                            </div>
                            <div class="col-md-8 offset-md-5">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-bottom: 120px;" >
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
            </form>
            </div>
        </div>
    </div>
@endsection
