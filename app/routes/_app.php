<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});


// Consulta todos los registros (Veerbo GET)
app()->get("/contactos", 'ContactosController@index');

// Consulta un registro con un ID (Verbo GET)
app()->get("/contactos/{id}", 'ContactosController@consultar');

// Inserta un registro (Verbo POST)
app()->post("/contactos", 'ContactosController@agregar');

// Borra un registro (Verbo DELETE)
app()->delete("/contactos/{id}", 'ContactosController@borrar');

// Actualizar un registro (Verbo PUT)
app()->put("/contactos/{id}", 'ContactosController@actualizar');
