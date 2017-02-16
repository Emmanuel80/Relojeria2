<html>
    <title>Relojeria-Insertar</title>
    <head>
        <link href="Estilos.css" rel="stylesheet">
        <style type="text/css"></style>
    </head>
    <body>
        <?php
       include './Conexion.php';
        $cedula = $_POST['txtCedula'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $telefono = $_POST['txtTelefono'];
        $direccion = $_POST['txtDireccion'];
        $correo = $_POST['txtCorreo'];

        $insertar = "INSERT into Clientes values('$cedula','$nombre','$apellido','$telefono','$direccion','$correo')";
        $resultado = mysqli_query($conexion,$insertar)
                or die("error al insertar");
        echo 'Datos Insertados';
        mysqli_close($conexion);
        
        
        ?>
        <br>
        <br>
        <br>
        <a href="frmInsertar.php" class="button">Regresar</a>
    </body>
</html>