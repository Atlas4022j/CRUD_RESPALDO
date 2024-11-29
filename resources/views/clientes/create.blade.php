@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Ingrese datos del cliente</h1>
                        <form action="{{ asset('/clientes') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Ingrese DNI</label>
                                <input class="form-control" type="text" name="dni">
                                <br>
                                <label for="">Ingrese Nombres</label>
                                <input class="form-control" type="text" name="nombres">
                                <br>
                                <label for="">Ingrese Apellido</label>
                                <input class="form-control" type="text" name="apellido">
                                <br>
                                <label for="">Ingrese Direccion</label>
                                <input class="form-control" type="text" name="direccion">
                                <br>
                                <label for="">Ingrese Edad</label>
                                <input class="form-control" type="number" name="edad">
                                <br>
                                <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                                <a class="btn btn-outline-secondary mt-3" href="{{ asset('../clientes') }}">VOLVER</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
