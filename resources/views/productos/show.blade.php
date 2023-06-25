@extends('layouts.encabezado')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body {
            background-color: #e7e7e7;
        }

        .card-body {
            background-color: #f1f1f1;
        }

        .card-title {
            font-size: 2rem;
            text-align: center;
        }

        .card-text {
            font-size: 1.2rem;
        }

        .card-img {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }



        .card-cont-img {
            padding: 1.6rem;
            padding-top: 1.1rem;
            padding-left: 0rem;
        }

        .card-cont {
            padding: 1.6rem;
            padding-top: 1.1rem;
            padding-right: 0rem;
        }





        .card-img img {
            max-width: 100%;
            max-height: auto;
            object-fit: contain;
        }

        .card-text {
            font-size: 1.2rem;
        }

        .card-title {
            font-size: 1.6rem;
            padding: 0rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .bton {
            background-color: #f1f1f1;
            color: #636363;
            font-size: 1.2rem;
            padding: 0.5rem 1rem;
            border: 1.5px solid #636363;
            border-radius: 0.25rem;
            text-decoration: none;
            margin-right: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s ease, color 0.2s ease;
        }




        .bton:hover {
            background-color: #636363;
            color: #fff;
        }

        .message-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            display: none;
        }

        .message {
            background-color: #f1f1f1;
            color: #636363;
            font-size: 1.2rem;
            padding: auto;
            padding-top: 28px;
            padding-bottom: 28px;
            padding-left: 8px;
            padding-right: 8px;
            border: 1.5px solid #636363;
            border-radius: 0.25rem;
            text-align: center;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .message button {
            margin: auto;
        }

        .close-btn {
            position: absolute;
            top: -6px;
            font-size: 1.5rem;
            padding-bottom: 3px;
            padding-top: 3px;
            color: #636363;
            cursor: pointer;
            background: transparent;
            border: none;
        }

        .card-cont {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 65%;
        }

    </style>
</head>
<div class="row mb-2">
    <div class="card-cont mx-auto">
        <div class="row g-0 border card-body rounded overflow-hidden flex-md-row mb-5 shadow-sm h-md-600 position-relative">
            <strong class="d-inline-block mb-2 text-dark card-title">{{ $producto->nombre }}</strong>
            <div class="col-md-8 card-cont d-flex flex-column position-static">
                <p class="card-text">Sobre el producto:</p>
                <p class="card-text">{{ $producto->descripcion }}</p>
                <p class="card-text">Precio: S/.{{ $producto->precio }}</p>
                <p class="card-text">Fecha de entrega: {{ \Carbon\Carbon::now()->addDays(30)->format('Y-m-d') }}</p>
                <div class="card-text d-flex align-items-center mt-auto">
                    <label for="cantidad" class="me-2">Cantidad:</label>
                    <input type="number" id="cantidad" class="form-control" style="width: 110px; margin-right: 20px; font-size: 1.3rem;" min="1" value="1">
                    <button class="bton buy-btn">Comprar ahora</button>
                </div>
            </div>
            <div class="col-md-4 d-none card-cont-img d-lg-block">
                <div class="card-img">
                    <img src="{{ asset('images/'.$producto->imagen) }}" alt="{{ $producto->nombre }}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="message-container" id="message-container">
    <div class="message">
        <button id="close-btn" class="close-btn">&times;</button>
        <p id="message-text"></p>
        <div id="button-container"></div>
    </div>
</div>
<script>
    const buyBtn = document.querySelector('.buy-btn');
    const messageContainer = document.querySelector('#message-container');
    const messageText = document.querySelector('#message-text');
    const buttonContainer = document.querySelector('#button-container');
    const closeBtn = document.querySelector('#close-btn');

    if (buyBtn) {
        buyBtn.addEventListener('click', showLoginMessage);
    }
    closeBtn.addEventListener('click', hideMessage);

    function showLoginMessage() {
        const isLoggedIn = {!! json_encode(Auth::check()) !!};

        if (isLoggedIn) {
            showMessage('Compra realizada');
        } else {
            showMessage('Primero necesitas iniciar sesión');
            const loginBtn = document.createElement('a');
            loginBtn.classList.add('bton');
            loginBtn.textContent = 'Iniciar sesión';
            loginBtn.href = '/login';
            const registerBtn = document.createElement('a');
            registerBtn.classList.add('bton');
            registerBtn.textContent = 'Registrarse';
            registerBtn.href = '/register';
            buttonContainer.appendChild(loginBtn);
            buttonContainer.appendChild(registerBtn);
        }
    }

    function showMessage(text) {
        messageText.textContent = text;
        messageContainer.style.display = 'flex';
    }

    function hideMessage() {
        messageText.textContent = '';
        buttonContainer.innerHTML = '';
        messageContainer.style.display = 'none';
    }
</script>
@endsection



