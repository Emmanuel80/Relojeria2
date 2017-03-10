<?php
require 'Conexion.php';
$id=$_REQUEST['id'];

$eliminar="delete from clientes where pk_cli_cedula='$id'";

  $resultado=$conexion->query($eliminar);
        if($resultado){
            
            header("location: TablaClientes.php");
        }
        else{
            echo 'Dato no Eliminado';
        }
?>
<script language="javascript">
      alert('Voy a ser un genio en JavaScript');
    </script>