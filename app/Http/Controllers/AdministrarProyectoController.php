<?php

namespace App\Http\Controllers;

use App\Models\AdministrarProyecto;
use App\Models\Cooperante;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdministrarProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$adminproyectos = AdministrarProyecto::latest()->paginate(25);

        $cooperantes = Cooperante::all();
        $proyectos = Proyecto::all();

        return view('administrar_proyecto.index', ['cooperantes'=>$cooperantes, 'proyectos'=> $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        log::debug($request);
        $request->validate([
            'cooperante_id' => 'required',
            'proyecto_id' => 'required',
            'fecha_asignacion' => 'required',
            'monto' => 'required'
        ]);

        AdministrarProyecto::create($request->all());

        return redirect()->route('administrar_proyecto')
            ->with('success', 'administracion agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdministrarProyecto  $administrarProyecto
     * @return \Illuminate\Http\Response
     */
    public function show(AdministrarProyecto $administrarProyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdministrarProyecto  $administrarProyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministrarProyecto $administrarProyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdministrarProyecto  $administrarProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdministrarProyecto $administrarProyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdministrarProyecto  $administrarProyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdministrarProyecto $administrarProyecto)
    {
        //
    }
}
