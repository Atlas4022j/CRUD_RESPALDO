<div class="card mt-3">
    <div class="card-header bg-info">
        <h5 class="h5">Productos</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <label for="">Seleccione Producto</label>
                <select class="form-control" name="productos" id="productos">
                    <option value="0" disabled selected >Seleccione un producto</option>
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">
                            {{ $producto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12 col-md-2">
                <label for="">Precio</label>
                <input class="form-control" type="text" name="precio" id="precio">
            </div>
            <div class="col-sm-12 col-md-2">
                <label for="">Cantidad</label>
                <input class="form-control" type="text" name="cantidad" id="cantidad">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-primary" id="btn_agregar">
            Agregar Producto
        </button>
    </div>
</div>