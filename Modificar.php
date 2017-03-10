<?php

require 'Conexion.php';
$id=$_REQUEST['id'];
$nombre= $_POST['txtNombre'];
$apellido= $_POST['txtApellido'];
$telefono=$_POST['txtTelefono'];
$direccion= $_POST['txtDireccion'];
$correo=$_POST['txtCorreo'];

$Modificar="UPDATE clientes SET cli_nombre='$nombre',cli_apellido='$apellido',cli_telefono='$telefono',cli_direccion='$direccion',cli_correo='$correo' where pk_cli_cedula='$id'";
  $resultado=$conexion->query($Modificar);
        if($resultado){
            header("location: TablaClientes.php");
        }
        else{
            echo 'Dato no Modificado';
        }
?>
