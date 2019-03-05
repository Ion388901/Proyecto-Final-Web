<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

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
        return view('panel.productos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $req){
        return view('panel.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req){
        $productoInput = $req->input('producto');
        $producto = Producto::create($productoInput);
        return redirect()->route('panel.productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $producto=Producto::findOrFail($id);
        return view('panel.productos.show', compact('producto'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view('panel.productos.edit', compact('producto'));
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required|integer',
            'descuento'=>'required|integer'
        ]);

        Producto::findOrFail($id)->update($req->all());
        return redirect()->route('panel.productos.index')->with('Función realizada', 'Se actualizo la información');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto $producto
     * @return \Illuminate\Http\Response
     */

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('panel.productos.index')->with('Función realizada', 'Se elimino la información');
    }
}