@extends('layouts.app')

@section('content')
<div style="background-color: #000000;">
        <div class="container fixed-bottom" style="width: 770px;background-color: #ffffff;border-radius:1%1%0%0%;">
            <h1 style="padding-right: 0px;padding-left: 0px;margin-bottom: 30px;">Stephi Place Estate</h1>
            <p style="color: rgb(0,139,210);font-size: 25px;padding-left: 303px;margin-bottom: 5%;">Inscription</p>
            <div>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="row form-group" style="margin-bottom: 10px;">
                    <div class="col-md-6">
                        <input id="firstname" type="text" placeholder="Prénom" class="form-control @error('name') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="given-name" autofocus>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="Nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="family-name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="birth" type="date" placeholder="Date de naissance" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}" required autocomplete="bday">
                        @error('birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <select id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="sex">
                        <option selected disabled>--Sexe--</option>
                        <option value="male">Homme</option>
                        <option value="female">Femme</option>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
                    </div>
                </div>    
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="tel" type="tel" placeholder="Téléphone" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                            @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" placeholder="Confirmation mot de passe" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-5">
                        <button type="submit" class="btn btn-primary" style="background-color: rgb(0,154,223);margin-bottom: 75px;margin-top: 75px;">
                            {{ __('Inscription') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
