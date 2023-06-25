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
                    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <label for="nombre" class="col-form-label text-md-end">{{ __('Nombre') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <label for="tipo" class="col-form-label text-md-end">{{ __('Tipo') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo') }}" required>
                                @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <label for="precio" class="col-form-label text-md-end">{{ __('Precio') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" step="0.01" value="{{ old('precio') }}" required>
                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <label for="descripcion" class="col-form-label text-md-end">{{ __('Descripción') }}</label>
                            </div>
                            <div class="col-md-6">
                                <textarea id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required>{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 icon-label">
                                <label for="imagen" class="col-form-label text-md-end">{{ __('Imagen') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" required>
                                @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-blue bton">
                                    {{ __('Guardar') }}
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
