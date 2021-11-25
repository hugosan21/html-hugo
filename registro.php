<?php
require_once "conection.php";
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

$obj = new connection();
$con = $obj->connect();
$instrucciones_sql="INSERT INTO contactos (nombre, apellido, email) values ('{$nombre}', '{$apellido}','{$email}')";
$result= $con-> prepare($instrucciones_sql); 
$result->execute();

echo "los datos del usuarios ($nombre),($apelido)fueron procesados satisfactoriamente";



?>