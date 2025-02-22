<?php

header("Content-Type: application/json");
header("Accept-Charset: UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header("Location: index.html");

include "conection.php";

//obtiene el dato que se desea eliminar por id 
$id = $_POST['id'];


//se ejecuta el query
$delete = "DELETE FROM weapons WHERE id = :id";
$respuesta = $conn->prepare($delete);
$respuesta->execute([
    ':id' => $id
]);