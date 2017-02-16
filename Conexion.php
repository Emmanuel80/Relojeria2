<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$baseDatos = "Relojeria";

$conexion = mysqli_connect($server, $usuario, $contraseña, $baseDatos)
        or die("error al conectar");
//if ($conexion) {
  //  echo 'conectado';
//} else {                   Es para ver si esta conectado                                       
  //  echo 'no conectado';
//}
?>
