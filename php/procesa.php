<?php

require_once __DIR__ . "/lib/recibeTexto.php";
require_once __DIR__ . "/lib/devuelveJson.php";

$integrante = recibeTexto("integrante");

$chistes = [
 "emiliano" => "¿Por qué la computadora tiene frío? Porque dejó abierta la ventana",
 "luis" => "¿Por qué programar es como el café? Porque sin él no funciono.",
 "irvin" => "¿Por qué la computadora fue al doctor? Porque tenía un virus.",
 "jesus" => "¿Qué le dice un bit al otro? Nos vemos en el bus.",
 "saul" => "¿Por qué le dio un paro a la impresora? Porque tuvo una impresión muy fuerte"
];

$resultado = [
 "integrante" => $integrante,
 "chiste" => $chistes[$integrante] ?? "No hay chiste disponible"
];

devuelveJson($resultado);