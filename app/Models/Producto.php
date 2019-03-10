<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    public $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'descuento',
        'coleccion_id'
    ];

    public function coleccion()
    {
        return $this->belongsToMany('App\Models\Coleccion');
    }

}