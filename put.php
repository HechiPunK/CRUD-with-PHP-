<?php

header("Content-Type: application/json");
header("Accept-Charset: UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type");
header("Location: index.html");

include "conection.php";

// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['name'];
$tipo = $_POST['type'];
$ceniza = $_POST['ash_of_war'];
$ataque = $_POST['attack_points'];
$fp = $_POST['fp_cost'];
      
// Preparar la consulta SQL
$update = "UPDATE weapons SET name = :name, type = :type, ash_of_war = :ash_of_war, attack_points = :attack_points, fp_cost = :fp_cost WHERE id = :id";
$respuesta = $conn->prepare($update);

// Ejecutar la consulta
$respuesta->execute([
    ':id' => $id,
    ':name'   => $nombre,
    ':type'   => $tipo,
    ':ash_of_war' => $ceniza,
    ':attack_points' => $ataque,
    ':fp_cost' => $fp
]);
