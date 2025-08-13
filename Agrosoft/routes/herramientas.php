@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Herramienta</h1>

    <div class="card mt-4">
        <div class="card-header">
            <h2>{{ $herramienta->nombre_herramienta }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Fecha de Registro:</strong> {{ $herramienta->fecha_registro }}</p>
            <p><strong>Marca:</strong> {{ $herramienta->marca }}</p>
            <p><strong>Tipo:</strong> {{ $herramienta->tipo }}</p>
            <p><strong>Valor por Unidad:</strong> ${{ number_format($herramienta->valor_unidad, 2) }}</p>
            <p><strong>Cantidad:</strong> {{ $herramienta->cantidad }}</p>
            <p><strong>Proveedor:</strong> {{ $herramienta->proveedor }}</p>
            <p><strong>Estado:</strong> {{ $herramienta->estado }}</p>
            <p><strong>Total Herramientas:</strong> ${{ number_format($herramienta->total_herramientas, 2) }}</p>
            <p><strong>Disponibilidad:</strong> {{ $herramienta->disponibilidad ? 'Disponible' : 'No Disponible' }}</p>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('herramientas.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('herramientas.edit', $herramienta->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('herramientas.destroy', $herramienta->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta herramienta?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
