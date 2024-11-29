@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card shadow-sm">
              <div class="card-header bg-dark text-white">
                <h3 class="mb-0">Edita un CLiente</h3>
              </div>
              <div class="card-body">
                <form action='{{ asset("/clientes/$cliente->id") }}' method="POST">
                  @method('PUT')
                  @csrf
                  <div class="mb-3">
                    <label for="" class="form-label">DNI</label>
                    <input value="{{ $cliente->dni }}" class="form-control" type="text" name="dni"  required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input value="{{ $cliente->nombres }}" class="form-control" type="text" name="nombres"  required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Apellido</label>
                    <input value="{{ $cliente->apellido }}" class="form-control" type="text" name="apellido"  required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input value="{{ $cliente->direccion }}" class="form-control" type="text" name="direccion"  required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Edad</label>
                    <input value="{{ $cliente->edad }}" class="form-control" type="number" name="edad"  required>
                  </div>
                  
                  <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" type="submit">
                      Guardar Cambios
                    </button>
                    <a class="btn btn-outline-secondary mt-3" href="{{ asset('../clientes') }}">Volver</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
@endsection