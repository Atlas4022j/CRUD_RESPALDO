@extends('layouts.main')
@section('section_title', 'Inicio del Sistema')
@section('content')
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Lista de Clientes</h1>
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>DNI</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Dirección</th>
                                    <th>Edad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->dni }}</td>
                                    <td>{{ $cliente->nombres }}</td>
                                    <td>{{ $cliente->apellido }}</td>
                                    <td>{{ $cliente->direccion }}</td>
                                    <td>{{ $cliente->edad }}</td>
                                    <td>
                                        <a href="{{ asset('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="bi bi-pencil"></i> Editar
                                        </a>
                                        <button href="" class="btn btn-sm btn-outline-danger" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete-{{ $cliente->id }}">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    @include('clientes.modal') 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-end mt-3">
                            <a class="btn btn-primary" href={{ asset('clientes/create') }}>AGREGAR CLIENTES</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection