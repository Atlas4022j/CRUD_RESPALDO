@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card shadow-sm">
              <div class="card-header bg-dark text-white">
                <h3 class="mb-0">Editar un Producto</h3>
              </div>
              <div class="card-body">
                <form action="{{ asset('/productos/'.$producto->id) }}" method="POST">
                  @method('PUT')
                  @csrf
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input value="{{ $producto->nombre }}" class="form-control" type="text" name="nombre" id="nombre" required>
                  </div>
                  <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>
                    <input value="{{ $producto->codigo }}" class="form-control" type="text" name="codigo" id="codigo" required>
                  </div>
                  <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <div class="input-group">
                      <span class="input-group-text">S/.</span>
                      <input value="{{ $producto->precio }}" class="form-control" type="number" step="0.10" name="precio" id="precio" required>
                    </div>
                  </div>
                  <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" type="submit">
                      Guardar Cambios
                    </button>
                    <a class="btn btn-outline-secondary mt-3" href="{{ asset('../productos') }}">Volver</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
@endsection

