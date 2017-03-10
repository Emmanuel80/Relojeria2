<html>
    <title>Relojeria-Insertar</title>
    <head>
        <link href="Estilos.css" rel="stylesheet">
        <style type="text/css"></style>
    </head>
    <body>
        <?php
       include 'Conexion.php';
        $cedula = $_POST['txtCedula'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $telefono = $_POST['txtTelefono'];
        $direccion = $_POST['txtDireccion'];
        $correo = $_POST['txtCorreo'];

        $insertar = "INSERT into Clientes values('$cedula','$nombre','$apellido','$telefono','$direccion','$correo')";
        $resultado = $conexion->query($insertar);
        if($resultado){
            header("location: TablaClientes.php");
        }
        else{
            echo 'Dato no insertado';
        }
        ?>
        
    </body>
</html>