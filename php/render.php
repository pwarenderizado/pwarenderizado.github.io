<?php

require_once __DIR__ . "/lib/manejaErrores.php";
require_once __DIR__ . "/lib/devuelveJson.php";

$lista = [
 [
  "nombre" => "Luis",
  "chiste" => "¿Por qué programar es como el café? Porque sin él no funciono."
 ],
 [
  "nombre" => "Jesus",
  "chiste" => "¿Qué le dice un bit al otro? Nos vemos en el bus."
 ],
 [
  "nombre" => "Irvin",
  "chiste" => "¿Por qué la computadora fue al doctor? Porque tenía un virus."
 ],
 [
  "nombre" => "Saul",
  "chiste" => "¿Por qué la impresora se asustó? Porque tuvo una impresión fuerte."
 ],
 [
  "nombre" => "Emiliano",
  "chiste" => "¿Por qué la computadora tiene frío? Porque dejó abierta la ventana"
 ]
];

$render = "";

foreach ($lista as $item) {

 $nombre = htmlentities($item["nombre"]);
 $chiste = htmlentities($item["chiste"]);

 $render .= "
  <li class='md-two-line'>
    <span class='headline'>$nombre</span>
    <span class='supporting'>$chiste</span>
  </li>
 ";
}

devuelveJson([
 "lista" => [
  "innerHTML" => $render
 ]
]);