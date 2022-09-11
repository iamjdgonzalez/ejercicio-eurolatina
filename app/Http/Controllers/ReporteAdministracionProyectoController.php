<?php

namespace App\Http\Controllers;

use App\Models\Cooperante;
use App\Models\ReproteAdministracionProyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReporteAdministracionProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperantes = Cooperante::all();
        return view('reporte_administracion_proyecto.index', ['cooperantes'=>$cooperantes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        log::debug($id);
        $info = DB::table('administrar_proyecto')
            ->select(
                'proyecto.id',
                        'proyecto.nombre',
                        'administrar_proyecto.fecha_asignacion',
                        'administrar_proyecto.monto'
                )
            ->leftJoin('cooperante', 'administrar_proyecto.cooperante_id', 'cooperante.id')
            ->leftJoin('proyecto', 'administrar_proyecto.proyecto_id', 'proyecto.id')
            ->where('cooperante.id', '=', $id)
            ->get();
        log::debug($info);
        return response()->json($info);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReproteAdministracionProyecto  $reproteAdministracionProyecto
     * @return \Illuminate\Http\Response
     */
    public function show(ReproteAdministracionProyecto $reproteAdministracionProyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReproteAdministracionProyecto  $reproteAdministracionProyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(ReproteAdministracionProyecto $reproteAdministracionProyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReproteAdministracionProyecto  $reproteAdministracionProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReproteAdministracionProyecto $reproteAdministracionProyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReproteAdministracionProyecto  $reproteAdministracionProyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReproteAdministracionProyecto $reproteAdministracionProyecto)
    {
        //
    }
}
