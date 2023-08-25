<?php

namespace App\Controllers;

use App\Models\Contactos;

class ContactosController extends Controller
{
    // Método para acceder a todos los registros de la tabla contactos
    public function index()
    {
        $datosContacto = Contactos::all();
        response()->json($datosContacto);
    }

    public function consultar($id)
    {
        $datosContacto = Contactos::find($id);
        response()->json($datosContacto);
    }
}
