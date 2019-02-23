<?php

namespace App\Http\Controllers\Npanel;

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
        return view('npanel.colecciones.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $coleccion=Coleccion::findOrFail($id);
        return view('npanel.colecciones.show', compact('coleccion'));
    }

}