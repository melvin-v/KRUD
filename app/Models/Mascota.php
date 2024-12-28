<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Mascota extends Model
{
    protected $collection = 'mascotas';

    protected $fillable = [
        'nombre',
        'raza',
        'edad',
        'dueño',
    ];
}


