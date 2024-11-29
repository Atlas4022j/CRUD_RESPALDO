<label for="">Seleccione Cliente</label>
<select name="cliente_id" class="form-control">
    @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id }}">
            {{ $cliente->nombres }}  {{ $cliente->apellido }}
        </option>
    @endforeach
</select>
<label for="">Numero</label>
<input type="numero" class="form-control" name="numero">
<label for="">Fecha</label>
<input type="date" name="fecha" class="form-control">