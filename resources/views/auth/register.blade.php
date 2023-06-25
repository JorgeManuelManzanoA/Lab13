@extends('layouts.encabezado')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body {
            background-color: #e7e7e7;
        }

        .f {
            margin-top: 2%;
        }

        .card-body {
            background-color: #f1f1f1;
        }

        .card-header {
            background-color: #f12d49;
            color: #fff;
            text-align: center;
            font-size: 20px;
            padding: 10px;
        }

        .bton {
            text-align: center;
            margin: auto;
            padding: 0.5rem;
            padding-left: 0.8rem;
            padding-right: 0.8rem;
            display: block;
            font-size: 16px;
        }

        .icon-label {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icon-label img {
            width: 10%;
            height: auto;
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-row .col-md-6 {
            flex-basis: 50%;
        }
    </style>
</head>
<div class="container f">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-blue">{{ __('Registro') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <img src="{{ asset('images/nombre_usuario.png') }}">
                                <label for="name" class="col-form-label text-md-end">{{ __('Nombre') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <img src="{{ asset('images/correo.png') }}">
                                <label for="email" class="col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <img src="{{ asset('images/contraseña.png') }}">
                                <label for="password" class="col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <img src="{{ asset('images/contraseña.png') }}">
                                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-blue bton">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


