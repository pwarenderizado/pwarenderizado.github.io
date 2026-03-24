<?php

require_once __DIR__ . "/lib/manejaErrores.php";
require_once __DIR__ . "/lib/devuelveJson.php";

$lista = [
 [
  "nombre" => "Luis Eduardo",
  "chiste" => "¿Por qué programar es como el café? Porque sin él no funciono.",
  "img" => "img/penta.jpeg"
 ],
 [
  "nombre" => "Jesus",
  "chiste" => "¿Qué le dice un bit al otro? Nos vemos en el bus.",
  "img" => "img/pentamericano.png"
 ],
 [
  "nombre" => "Irvin",
  "chiste" => "¿Por qué la computadora fue al doctor? Porque tenía un virus.",
  "img" => "img/pentaiguana.jpeg"
 ],
 [
  "nombre" => "Saul",
  "chiste" => "¿Por qué la impresora se asustó? Porque tuvo una impresión fuerte.",
  "img" => "img/pentamono.jpeg"
 ],
 [
  "nombre" => "Emiliano",
  "chiste" => "¿Por qué la computadora tiene frío? Porque dejó abierta la ventana",
  "img" => "img/pentamisterio.jpeg"
 ]
];

$render = "";

foreach ($lista as $item) {

 $nombre = htmlentities($item["nombre"]);
 $chiste = htmlentities($item["chiste"]);
 $img = htmlentities($item["img"]);

 $render .= "
  <li class='md-two-line'>
    <img src='$img' alt='Foto de $nombre'>
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