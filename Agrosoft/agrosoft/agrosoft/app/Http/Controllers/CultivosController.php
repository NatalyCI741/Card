<?php

namespace App\Http\Controllers;

use App\Models\Cultivos;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function show(Cultivos $cultivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cultivos $cultivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cultivos $cultivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cultivos $cultivos)
    {
        //
    }
}
