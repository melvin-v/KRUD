<?php

namespace App\Http\Controllers\tienda;

use Krud;
use Illuminate\Http\Request;
use App\Models\tienda;

class TiendaController extends Krud
{
    public function __construct() {
        $this->setModel(new tienda);
        $this->setCampo(['nombre' => 'nombre', 'direccion' => 'direccion', 'telefono' => 'telefono', 'email' => 'email']);
    }
    
}
