@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-success">Lista de Insumos</h2>
    <a href="{{ route('insumos.create') }}" class="btn btn-primary mb-3">Agregar Insumo</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Valor Unidad</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Proveedor</th>
                <th>Disponibilidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($insumos as $insumo)
            <tr>
                <td>{{ $insumo->fecha }}</td>
                <td>{{ $insumo->nombre }}</td>
                <td>{{ $insumo->tipo }}</td>
                <td>{{ $insumo->valor_unidad }}</td>
                <td>{{ $insumo->cantidad }}</td>
                <td>{{ $insumo->total }}</td>
                <td>{{ $insumo->proveedor }}</td>
                <td>{{ $insumo->disponibilidad ? 'Disponible' : 'No Disponible' }}</td>
                <td>
                    <a href="{{ route('insumos.edit', $insumo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('insumos.destroy', $insumo->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
