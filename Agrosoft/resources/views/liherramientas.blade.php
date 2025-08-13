@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-success">Lista de Herramientas</h2>
    <a href="{{ route('herramientas.create') }}" class="btn btn-primary mb-3">Agregar Herramienta</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Fecha Registro</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Valor Unidad</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Estado</th>
                <th>Total</th>
                <th>Disponibilidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($herramientas as $herramienta)
            <tr>
                <td>{{ $herramienta->fecha_registro }}</td>
                <td>{{ $herramienta->nombre_herramienta }}</td>
                <td>{{ $herramienta->marca }}</td>
                <td>{{ $herramienta->tipo }}</td>
                <td>{{ $herramienta->valor_unidad }}</td>
                <td>{{ $herramienta->cantidad }}</td>
                <td>{{ $herramienta->proveedor }}</td>
                <td>{{ $herramienta->estado }}</td>
                <td>{{ $herramienta->total_herramientas }}</td>
                <td>{{ $herramienta->disponibilidad ? 'Disponible' : 'No Disponible' }}</td>
                <td>
                    <a href="{{ route('herramientas.edit', $herramienta->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('herramientas.destroy', $herramienta->id) }}" method="POST" style="display:inline-block;">
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
