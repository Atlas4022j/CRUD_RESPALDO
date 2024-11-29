@extends('layouts.main')
@section('section_title', 'Registra Venta')
@section('content')
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Registrar Nueva Venta</h1>
                        <form action="{{ asset('/ventas') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                @include('ventas.partials.datos')
                                @include('ventas.partials.selectproductos')
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        <h5 class="h5">Detalle de Venta</h5>
                                    </div>
                                    <div class="card-body">
                                       <table class="table">
                                            <thead>
                                                <th>Cant.</th>
                                                <th>Descripcion</th>
                                                <th>P. Unitario</th>
                                                <th>Sub Total</th>
                                                <th></th>
                                            </thead>
                                            <tbody id="table_body">
                    
                                            </tbody>
                                       </table>
                                    </div>
                                    <div class="card-footer bg-secondary text-white text-right">
                                        <h5 class="h5">TOTAL: S/<span id="txt_total"> 00.00</span></h5>
                                    </div>
                                </div>
                                    <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                                    <a class="btn btn-outline-secondary mt-3" href="{{ asset('../ventas') }}">Volver</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let total_venta = 0;
        let productos = @json($productos);
        let selectProductos = document.getElementById('productos');
        /* evento que se dispara cuando se cambia el valor del select */
        selectProductos.addEventListener('change',function(){
            let precio = 0;
            productos.forEach(producto => {
                if(producto.id == this.value){
                    precio = producto.precio;
                }
            });
            let inputPrecio = document.getElementById('precio');
            let inputCantidad = document.getElementById('cantidad');
            inputPrecio.value = precio;
            inputCantidad.value = 1;
        });
        let btnAgregar = document.getElementById('btn_agregar');
        btnAgregar.addEventListener('click',function(){
            if(selectProductos.value == 0){
                alert('Seleccione un producto');
            }else{
                /* obteniendo datos */
                let cantidad = document.getElementById('cantidad').value;
                let precio = document.getElementById('precio').value;
                let descripcion = selectProductos.options[selectProductos.selectedIndex].text;
                let subtotal = cantidad * precio;
                /* agergar datos a la tabla detalle */
                let tableBody = document.getElementById('table_body');
                let fila = document.createElement('tr');
                let col_cantidad = document.createElement('td');
                let col_descripcion = document.createElement('td');
                let col_punitario = document.createElement('td');
                let col_subtotal = document.createElement('td');
                col_cantidad.innerHTML = cantidad;
                col_descripcion.innerHTML = descripcion;
                col_punitario.innerHTML = precio;
                col_subtotal.innerHTML = subtotal;
                fila.appendChild(col_cantidad);
                fila.appendChild(col_descripcion);
                fila.appendChild(col_punitario);
                fila.appendChild(col_subtotal);
                tableBody.appendChild(fila);
                total_venta = total_venta + subtotal;
            }
            document.getElementById('txt_total').innerHTML = total_venta;
        });
        //console.log(productos);
    });
    
</script>