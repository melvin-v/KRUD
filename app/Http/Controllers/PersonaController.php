<?php

namespace App\Http\Controllers;
use Krud;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Krud
{
    public function __construct() {
        $this->setModel(new Persona);
        $this->setCampo([
            'nombre' => 'Nombre',
            'campo' => 'nombre'
        ]);

        $this->setCampo([
            'nombre' => 'Dirección',
            'campo' => 'direccion'
        ]);

        $this->setCampo([
            'nombre' => 'Teléfono',
            'campo' => 'telefono'
        ]);

        $this->setCampo([
            'nombre' => 'Email',
            'campo' => 'email'
        ]);
    }
}
