<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function index()
    {
        $insumos = Insumo::all();
        return view('insumos.index', compact('insumos'));
    }

    public function create()
    {
        return view('insumos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'valor_unidad' => 'required|numeric',
            'cantidad' => 'required|string|max:255',
            'total' => 'required|numeric',
            'proveedor' => 'required|string|max:255',
            'disponibilidad' => 'required|boolean',
        ]);

        Insumo::create($request->all());
        return redirect()->route('insumos.index')->with('success', 'Insumo agregado correctamente.');
    }

    public function edit(Insumo $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    public function update(Request $request, Insumo $insumo)
    {
        $request->validate([
            'fecha' => 'required|date',
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'valor_unidad' => 'required|numeric',
            'cantidad' => 'required|string|max:255',
            'total' => 'required|numeric',
            'proveedor' => 'required|string|max:255',
            'disponibilidad' => 'required|boolean',
        ]);

        $insumo->update($request->all());
        return redirect()->route('insumos.index')->with('success', 'Insumo actualizado correctamente.');
    }

    public function destroy(Insumo $insumo)
    {
        $insumo->delete();
        return redirect()->route('insumos.index')->with('success', 'Insumo eliminado correctamente.');
    }
}
