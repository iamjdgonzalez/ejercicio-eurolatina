<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();

        return view('proyecto.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tecnologias' => 'required'
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyecto.index')
            ->with('success', 'proyecto agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    /*
    public function show(Proyecto $proyecto)
    {
        //
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //log::debug($id);
        $proyecto = Proyecto::where("id",$id)->get();

        //log::debug($proyecto);

        return view('proyecto.edit', ['proyecto'=>$proyecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //log::debug($id);
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tecnologias' => 'required'
        ]);
        Proyecto::where("id",$id)->update(['nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'tecnologias'=>$request->tecnologias]);

        return redirect()->route('proyecto.index')
            ->with('success', 'proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        log::debug($id);
        Proyecto::where("id",$id)->delete();

        return redirect()->route('proyecto.index')
            ->with('success', 'proyecto borrado correctamente');
    }
}
