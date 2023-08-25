<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});

app()->get("/contactos", 'ContactosController@index');

app()->get("/contactos/{id}", 'ContactosController@consultar');

app()->get("/app", function () {
    // app() returns $app
    response()->json(app()->routes());
});
