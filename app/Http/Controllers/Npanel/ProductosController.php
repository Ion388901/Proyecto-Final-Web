<?php

namespace App\Http\Controllers\Npanel;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Coleccion;
use App\Models\Producto;

class ProductosController extends BaseController {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $req, $order = null){
        $productos = Producto::all();
        if($order){
            $productos = Producto::where('precio', '!=', 'null')->orderBy('precio', $order)->get();
        }
        else {
            $productos = Producto::where('precio', '!=', 'null')->get();
        }
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