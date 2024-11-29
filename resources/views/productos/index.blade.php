@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Lista de Productos</h1>
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Codigo</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ $producto->id }}</td>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->codigo }}</td>
                                            <td>{{ number_format($producto->precio, 2) }}</td>
                                            <td>
                                                <a href="{{ asset('/productos/'.$producto->id.'/edit') }}" class="btn btn-sm btn-outline-primary me-2">
                                                    <i class="bi bi-pencil"></i> Editar
                                                </a>
                                                 <!-- Button trigger modal -->

                                                    <button href="" class="btn btn-sm btn-outline-danger" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modal-delete-{{ $producto->id }}">
                                                        <i class="bi bi-trash"></i> Eliminar
                                                    </button>
                                                @include('productos.modal') 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <div class="text-end mt-3">
                            <a class="btn btn-primary" href="{{ asset('/productos/create') }}">Registrar Nuevo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
</body>
@endsection