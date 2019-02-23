<?php

namespace App\Http\Controllers\Npanel;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Producto;

class ProductosController extends BaseController {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $req){
        $productos = Producto::all();
        $data = [];
        $data['productos'] = $productos;      
        return view('npanel.productos.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $producto=Producto::findOrFail($id);
        return view('npanel.productos.show', compact('producto'));
    }

}