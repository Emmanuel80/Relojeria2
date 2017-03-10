
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relojeria</title>
        <link href="Estilos.css" rel="stylesheet">
        <link href="skeleton.css" rel="stylesheet">
        <style type="text/css"></style>
    </head>
    <body class="hola">
        <a href="TablaClientes.php" class="button" style="position: absolute; left: 70%; text-decoration:none">Regresar</a>
    <center>
        <h1>Insetar Cliente</h1>
    </center>
    <center>
        <form action="Insertar.php" method="POST">
            <center>
                <p style="color: white;">----------**********----------</p>
            </center>
            Cedula <input type="text" required="" name="txtCedula" placeholder="Cedula"></br></br>
            Nombre <input type="text" required="" name="txtNombre" placeholder="Nombre"></br></br>
            Apellido <input type="text" required="" name="txtApellido" placeholder="Apellido"></br></br>
            Telefono <input type="text" required="" name="txtTelefono" placeholder="Telefono"></br></br>
            Direccion <input type="text" required="" name="txtDireccion" placeholder="Direccion"></br></br>
            Correo <input type="text"  required="" name="txtCorreo" placeholder="Correo"></br></br>
            <input type="submit" value="Insertar" class="button-primary"> 
            <center>
                <p style="color: white;">----------**********----------</p>
            </center>
        </form>
    </center>
</body>
</html>
