@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Registrar Nuevo Producto</h1>
                        <form action="{{ asset('/productos') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="">Nombre</label>
                                <input  class="form-control" type="text" name="nombre">
                                <label for="">Codigo</label>
                                <input  class="form-control" type="text" name="codigo">
                                <label for="">Precio</label>
                                <input  class="form-control" type="text" name="precio">
                                    <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                                    <a class="btn btn-outline-secondary mt-3" href="{{ asset('../productos') }}">Volver</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection