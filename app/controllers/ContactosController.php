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

    public function agregar()
    {
        $contacto = new Contactos;
        $contacto->nombre = app()->request()->get('nombre');
        $contacto->primer_apellido = app()->request()->get('primer_apellido');
        $contacto->segundo_apellido = app()->request()->get('segundo_apellido');
        $contacto->correo = app()->request()->get('correo');
        $contacto->save();

        response()->json(["message" => "Registro agregado!"]);
    }

    public function borrar($id)
    {
        Contactos::destroy($id);
        response()->json(["message" => "Registro: ->" . $id . "<- borrado!"]);
    }

    public function actualizar($id)
    {
        $nombre = app()->request()->get('nombre');
        $primer_apellido = app()->request()->get('primer_apellido');
        $segundo_apellido = app()->request()->get('segundo_apellido');
        $correo = app()->request()->get('correo');

        $contacto = Contactos::findOrFail($id);

        $contacto->nombre = ($nombre != "") ? $nombre : $contacto->nombre;
        $contacto->primer_apellido = ($primer_apellido != "") ? $primer_apellido : $contacto->primer_apellido;
        $contacto->segundo_apellido = ($primer_apellido != "") ? $primer_apellido : $contacto->primer_apellido;
        $contacto->correo = ($correo != "") ? $correo : $contacto->correo;

        $contacto->update();

        response()->json(["message" => "Registro actualizado: " . $id]);
    }
}
