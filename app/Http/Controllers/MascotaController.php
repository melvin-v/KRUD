<?php

namespace App\Http\Controllers;
use Krud;
use Illuminate\Http\Request;
use App\Models\Mascota;
class MascotaController extends Krud
{
    public function __construct()
    {
        $this->setModel(new Mascota);
        $this->setCampo([
            'nombre' => 'Nombre',
            'campo' => 'nombre'
        ]);
        $this->setCampo([
            'nombre' => 'Raza',
            'campo' => 'raza'
        ]);
        $this->setCampo([
            'nombre' => 'Edad',
            'campo' => 'edad'
        ]);
        $this->setCampo([
            'nombre' => 'Dueño',
            'campo' => 'dueno'
        ]);
    }
}
