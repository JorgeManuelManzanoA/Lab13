@extends('layouts.encabezado')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Crear nuevo tipo
                </div>
                <div class="card-body">
                    <form action="{{ route('tipos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nombre_tipo">Nombre del tipo</label>
                            <input type="text" class="form-control" id="nombre_tipo" name="nombre_tipo" required>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
