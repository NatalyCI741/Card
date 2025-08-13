<?php

namespace App\Http\Controllers;

use App\Models\Cultivos; // Asegúrate de que el nombre del modelo esté en mayúscula
use Illuminate\Http\Request;

class CultivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Cultivos::all();
        return view('lista', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formcultivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cultivo = new Cultivos();
        $cultivo->fecha = $request->post('fecha');
        $cultivo->nombre = $request->post('nombre');
        $cultivo->tipo = $request->post('tipo');
        $cultivo->area = $request->post('area');
        $cultivo->presupuesto = $request->post('presupuesto');
        $cultivo->save();

        return redirect()->route('cultivos.index')->with("success", "Registro Exitoso");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cultivo = Cultivos::findOrFail($id); // Cambié esto para usar findOrFail
        return view('formcultivo', compact('cultivo')); // Asegúrate de que tu vista puede manejar este objeto
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cultivo = Cultivos::findOrFail($id); // Cambié 'find0rfail' por 'findOrFail'
        $cultivo->fecha = $request->input('fecha');
        $cultivo->nombre = $request->input('nombre');
        $cultivo->tipo = $request->input('tipo');
        $cultivo->area = $request->input('area');
        $cultivo->presupuesto = $request->input('presupuesto');
        $cultivo->save();

        return redirect()->route('cultivos.index')->with("success", "Registro Actualizado Exitosamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultivo = Cultivos::findOrFail($id);
        $cultivo->delete();

        return redirect()->route('cultivos.index')->with("success", "Registro Eliminado Exitosamente");
    }
}
