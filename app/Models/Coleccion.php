<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coleccion extends Model {
    
    public $table = 'colecciones';
    
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}