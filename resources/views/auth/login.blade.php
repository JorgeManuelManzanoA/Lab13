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
            margin-top: 3%;
        }

        .card-body {
            background-color: #f1f1f1;
        }

        .bg-blue {
            background-color: #f12d49;
            color: #fff;
            text-align: center;
            font-size: 20px;
            padding: 10px;
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
        
        .bton {
            background-color: #f12d49;
            font-size: 16px;
            padding: 0.5rem;
            padding-left: 0.8rem;
            padding-right: 0.8rem;
            border: none;
            border-radius: 0.25rem;
            text-decoration: none;
            margin-right: 1rem;
            cursor: pointer;
            display: block;
            margin: auto;
        }
        
        .bton:hover {
            background-color: #e82944;
        }
    </style>
</head>
<div class="container f">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-blue">{{ __('Inicio de sesión') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6 icon-label">
                                <img src="{{ asset('images/correo.png') }}" alt="Correo">
                                <label for="email" class="col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 icon-label">
                                <img src="{{ asset('images/contraseña.png') }}" alt="Contraseña">
                                <label for="password" class="col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="nav-item">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-blue bton">
                                    {{ __('Iniciar sesión') }}
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


