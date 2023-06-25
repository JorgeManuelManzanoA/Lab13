@foreach($productos as $producto)
    <div>
        <h2>{{ $producto->nombre }}</h2>
        <p>Tipo: {{ $producto->tipo }}</p>
        <p>Precio: {{ $producto->precio }}</p>
        <p>Descripción: {{ $producto->descripcion }}</p>
        @if($producto->imagen)
            <img src="{{ asset('images/' . $producto->imagen) }}" alt="Imagen del producto">
        @endif
    </div>
@endforeach

