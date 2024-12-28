<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    // Nombre de la tabla (opcional si coincide con el plural del modelo)
    protected $table = 'tiendas';

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];
}

