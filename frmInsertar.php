
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relojeria</title>
        <link href="Estilos.css" rel="stylesheet">
        <style type="text/css"></style>
    </head>
    <body>
    <center>
        <h1>Insetar Cliente</h1>
    </center>
    <center>
        <form action="Insertar.php" method="POST" style="background-color:red; width:30%; height: 60%; ">
            <center>
                <p style="color: white;">----------**********----------</p>
            </center>
            Cedula <input type="text" required="" name="txtCedula" placeholder="Cedula"></br></br>
            Nombre <input type="text" required="" name="txtNombre" placeholder="Nombre"></br></br>
            Apellido <input type="text" required="" name="txtApellido" placeholder="Apellido"></br></br>
            Telefono <input type="text" required="" name="txtTelefono" placeholder="Telefono"></br></br>
            Direccion <input type="text" required="" name="txtDireccion" placeholder="Direccion"></br></br>
            Correo <input type="text"  required="" name="txtCorreo" placeholder="Correo"></br></br>
            <input type="submit" value="Insertar" name="btnInsertar" class="button"> 
            <center>
                <p style="color: white;">----------**********----------</p>
            </center>
        </form>
    </center>
</body>
</html>
