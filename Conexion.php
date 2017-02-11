<?php
$server = "localhost";
$usuario = "root";
$contraseña="";
$baseDatos= "Relojeria";

$conexion= mysqli_connect($server,$usuario,$contraseña,$baseDatos)
        or die("error al conectar");

?>
