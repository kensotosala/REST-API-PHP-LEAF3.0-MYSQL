<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});

app()->get("/web", function () {
    response()->json(["message" => "Sí, funciona!"]);
});

app()->get("/app", function () {
    // app() returns $app
    response()->json(app()->routes());
});
