<?php


 
require_once'./Conexiones/conexion.php';

$sql = "SELECT * FROM buses";

$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);

$stmt->execute();

$buses=$stmt->fetchAll();
?>