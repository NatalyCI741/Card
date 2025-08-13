<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    public function index()
    {
        $herramientas = Herramienta::all();
        return view('herramientas.index', compact('herramientas'));
    }

    public function create()
    {
        return view('herramientas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_registro' => 'required|date',
            'nombre_herramienta' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'valor_unidad' => 'required|numeric',
            'cantidad' => 'required|integer',
            'proveedor' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'total_herramientas' => 'required|numeric',
            'disponibilidad' => 'required|boolean',
        ]);

        Herramienta::create($validated);
        return redirect()->route('herramientas.index')->with('success', 'Herramienta creada correctamente.');
    }

    public function show($id)
    {
        $herramienta = Herramienta::findOrFail($id);
        return view('herramientas.show', compact('herramienta'));
    }

    public function edit($id)
    {
        $herramienta = Herramienta::findOrFail($id);
        return view('herramientas.edit', compact('herramienta'));
    }

    public function update(Request $request, $id)
    {
        $herramienta = Herramienta::findOrFail($id);
        $validated = $request->validate([
            'fecha_registro' => 'required|date',
            'nombre_herramienta' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'valor_unidad' => 'required|numeric',
            'cantidad' => 'required|integer',
            'proveedor' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'total_herramientas' => 'required|numeric',
            'disponibilidad' => 'required|boolean',
        ]);

        $herramienta->update($validated);
        return redirect()->route('herramientas.index')->with('success', 'Herramienta actualizada correctamente.');
    }

    public function destroy($id)
    {
        $herramienta = Herramienta::findOrFail($id);
        $herramienta->delete();
        return redirect()->route('herramientas.index')->with('success', 'Herramienta eliminada correctamente.');
    }
}
