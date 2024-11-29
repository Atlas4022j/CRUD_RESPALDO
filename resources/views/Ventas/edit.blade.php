@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card shadow-sm">
              <div class="card-header bg-dark text-white">
                <h3 class="mb-0">Editar Venta</h3>
              </div>
                <div class="card-body">
                    <form action="{{ asset("/ventas/$venta->id") }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="">Seleccione Cliente</label>
                                <select name="cliente_id" class="form-control">
                                    @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}"
                                        @if($cliente->id == $venta->cliente_id) selected @endif>
                                        {{ $cliente->nombres }} {{ $cliente->apellido }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Numero</label>
                                <input type="numero" value="{{ $venta->numero }}" class="form-control" name="numero">
                            </div>
                            <div class="mb-3">
                                <label for="">Fecha</label>
                                <input type="date" value="{{ $venta->fecha }}" name="fecha" class="form-control">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" type="submit">
                                  Guardar Cambios
                                </button>
                                <a class="btn btn-outline-secondary mt-3" href="{{ asset('../ventas') }}">Volver</a>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
</body>
@endsection