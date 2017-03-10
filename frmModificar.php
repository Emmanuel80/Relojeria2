
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relojeria</title>
        <link href="Estilos.css" rel="stylesheet">
        <link href="skeleton.css" rel="stylesheet">
        <style type="text/css"></style>
    </head>
    <body >
        <a href="TablaClientes.php" class="button" style="position: absolute; left: 70%; text-decoration:none">Regresar</a>
    <center>
        <h1>Modificar Cliente</h1>
    </center>
    
    <center>
          <?php
               
                $id=$_REQUEST['id'];
                include 'Conexion.php';
                $query="SELECT * FROM Clientes where pk_cli_cedula='$id'";
                $resultado= $conexion->query($query);
                $rows=$resultado->fetch_assoc();
                ?>
        
        <form action="Modificar.php?id=<?php echo $rows['pk_cli_cedula']; ?>" method="POST" >
            <center>
                
            </center>
            Cedula <input type="text" required="" readonly="readonly" name="txtCedula" placeholder="Cedula" value="<?php echo $rows['pk_cli_cedula']; ?>"></br></br>
            Nombre <input type="text"  name="txtNombre" placeholder="Nombre" value="<?php echo $rows['cli_nombre']; ?>"></br></br>
            Apellido <input type="text" name="txtApellido" placeholder="Apellido" value="<?php echo $rows['cli_apellido']; ?>"></br></br>
            Telefono <input type="text"  name="txtTelefono" placeholder="Telefono" value="<?php echo $rows['cli_telefono']; ?>"></br></br>
            Direccion <input type="text"  name="txtDireccion" placeholder="Direccion" value="<?php echo $rows['cli_direccion']; ?>"></br></br>
            Correo <input type="text"   name="txtCorreo" placeholder="Correo" value="<?php echo $rows['cli_correo']; ?>"></br></br>
            <input type="submit"  class="button-primary" value="Modificar"> 
            <center>
                
            </center>
        </form>
    </center>
</body>
</html>
