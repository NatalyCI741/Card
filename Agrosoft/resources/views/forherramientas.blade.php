@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-success">Agregar Herramienta</h2>
    <form action="{{ route('herramientas.store') }}" method="POST">
        @csrf
        <!-- Campos del formulario -->
    </form>
        <div class="form-group">
            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
        </div>
        <div class="form-group">
            <label for="nombre_herramienta">Nombre:</label>
            <input type="text" class="form-control" id="nombre_herramienta" name="nombre_herramienta" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="form-group">
            <label for="valor_unidad">Valor por Unidad:</label>
            <input type="number" step="0.01" class="form-control" id="valor_unidad" name="valor_unidad" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="proveedor">Proveedor:</label>
            <input type="text" class="form-control" id="proveedor" name="proveedor" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>
        <div class="form-group">
            <label for="total_herramientas">Total:</label>
            <input type="number" step="0.01" class="form-control" id="total_herramientas" name="total_herramientas" required>
        </div>
        <div class="form-group">
            <label for="disponibilidad">Disponibilidad:</label>
            <select class="form-control" id="disponibilidad" name="disponibilidad" required>
                <option value="1">Disponible</option>
                <option value="0">No Disponible</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
