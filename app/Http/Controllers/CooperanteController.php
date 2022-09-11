<?php

namespace App\Http\Controllers;

use App\Models\Cooperante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CooperanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperantes = Cooperante::all(); //latest()->paginate(15);

        return view('cooperante.index', compact('cooperantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cooperante.create');
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
            'email' => 'required',
            'direccion' => 'required'
        ]);

        Cooperante::create($request->all());

        return redirect()->route('cooperante.index')
            ->with('success', 'cooperante agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cooperante  $cooperante
     * @return \Illuminate\Http\Response
     */
    /*public function show(Cooperante $cooperante)
    {
        return view('cooperante.show', compact('cooperante'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperante  $cooperante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //log::debug($id);
        $cooperante = Cooperante::where("id",$id)->get();

        //log::debug($cooperante);

        return view('cooperante.edit', ['cooperante'=>$cooperante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooperante  $cooperante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //log::debug($id);
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'direccion' => 'required'
        ]);
        Cooperante::where("id",$id)->update(['nombre'=>$request->nombre,
                                             'email'=>$request->email,
                                             'direccion'=>$request->direccion]);

        return redirect()->route('cooperante.index')
            ->with('success', 'cooperante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cooperante  $cooperante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        log::debug($id);
        Cooperante::where("id",$id)->delete();

        return redirect()->route('cooperante.index')
            ->with('success', 'cooperante borrado correctamente');
    }
}
