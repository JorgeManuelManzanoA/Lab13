@extends('layouts.encabezado')

@section('content')
<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Album example · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
          background-color: #e7e7e7;
          margin: 0;
          padding: 0;
        }

        .card-body {
          background-color: #f1f1f1;
          text-align: center;
          padding: 15px;
        }

        .slide {
          padding: 0%;
          margin: 0%;
          margin-bottom: 28px;
        }

        #carouselContainer {
          margin-top: 0;
        }

        .main-container {
          margin-top: -24px;
        }
    </style>
</head>
<body>
  <div class="main-container">
    <div id="carouselContainer">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/Imagen1.png') }}" class="d-block w-100" alt="Imagen 1" style="height: 550px;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Imagen2.png') }}" class="d-block w-100" alt="Imagen 2" style="height: 550px;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Imagen3.jpg') }}" class="d-block w-100" alt="Imagen 3" style="height: 550px;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach($tipos as $tipo)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="{{ route('productos.showByTipo', ['tipo' => $tipo->nombre_tipo]) }}">
              <img src="{{ asset('images/'.$tipo->imagen) }}" alt="{{ $tipo->nombre_tipo }}" class="img-fluid" style="height: 250px;">
            </a>
            <div class="card-body">
              <p class="card-text" style="font-size: 1.4rem;">{{ $tipo->nombre_tipo }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
@endsection



