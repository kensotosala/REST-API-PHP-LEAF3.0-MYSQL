<?php

namespace App\Controllers;

use App\Models\Contactos;

class ContactosController extends Controller
{
    public function index()
    {
        response()->json(["message" => "Clase contactos en el controlador"]);
    }
}
