<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    public $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'descuento'
    ];
}