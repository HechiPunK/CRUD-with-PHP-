<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

include "conection.php"; // entra a la conexion con la base de datos

// se ejecuta el query que manda a llamar a los datos
$stmt = $conn->query("SELECT * FROM weapons");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC); //permite mostrar los datos en el frontend

echo json_encode($data); //c0nvierte los datos de la base de datos a JSOn


exit;
?>