<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Coleccion;
use App\Models\Producto;

class ColeccionesController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $req){
        $colecciones = Coleccion::all();
        $data = [];
        $data['colecciones'] = $colecciones;      
        return view('colecciones.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $req){
        return view('colecciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req){
        $coleccionInput = $req->input('coleccion');
        $coleccion = Coleccion::create($coleccionInput);
        return redirect()->route('colecciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $coleccion=Coleccion::findOrFail($id);
        return view('colecciones.show', compact('coleccion'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id){
        $coleccion = Coleccion::findOrFail($id);
        return view('colecciones.edit', compact('coleccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req, $id){
        $req->validate([
            'nombre'=>'requerido',
            'descripcion'=>'requerido',
        ]);

        Coleccion::findOrFail($id)->update($req->all());
        return redirect()->route('colecciones.index')->with('Función realizada', 'Se actualizo la información');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coleccion $coleccion
     * @return \Illuminate\Http\Response
     */

    public function destroy(Coleccion $coleccione){
        $coleccione->delete();
        return redirect()->route('colecciones.index')->with('Función realizada', 'Se elimino la información');
    }
}