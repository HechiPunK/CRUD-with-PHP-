<?php

header("Content-Type: application/json");
header("Accept-Charset: UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Location: index.html");

include "conection.php";

//mediante metodo post  obtiene los datos dados en el formulario de "Add weapon" para usarlos en el query
$nombre = $_POST['name'];
$tipo = $_POST['type'];
$ceniza = $_POST['ash_of_war'];
$ataque = $_POST['attack_points'];
$fp = $_POST['fp_cost'];
 
//query que ejecuta lo solicitado, las variables se guardan como : para evitar inyecciones
$insert = "INSERT INTO weapons (name, type, ash_of_war, attack_points, fp_cost) VALUES (:nom, :tipoo, :ash_of_warr, :attack_pointss, :fp_costt)";
$respuesta = $conn->prepare($insert);

//se ejecuta la consulta del query
$respuesta->execute([
    ':nom'   => $nombre,
    ':tipoo'   => $tipo,
    ':ash_of_warr' => $ceniza,
    ':attack_pointss' => $ataque,
    ':fp_costt' => $fp
]);