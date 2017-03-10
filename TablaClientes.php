<html>
    <head>
        <title>Relojeria</title>
        <link href="Estilos.css" rel="stylesheet">
        <link href="skeleton.css" rel="stylesheet">
        <style type="text/css"></style>
        <link rel="icon" href="imagenes/despertador.png">
    </head>
    <body class="hola">
    <center>
        <table>
            <thead>
            <th colspan="1"><a href="frmInsertar.php" class="button" style="padding: 3px; text-decoration:none">Nuevo</a></th>
            <th colspan="8">Lista Clientes</th>
            </thead>
            <tbody>
            
                <tr>
                    <td><samp style="color: black; font-family: arial; size: 12px;font-weight: bold;">Cedula</samp></td>
                    <td><samp style="color: black; font-family: arial; size: 12px;font-weight: bold;">Nombre</samp></td>
                    <td><samp style="color: black; font-family: arial; size: 12px;font-weight: bold;">Apellido</samp></td>
                    <td><samp style="color: black; font-family: arial; size: 12px;font-weight: bold;">Telefono</samp></td>
                    <td><samp style="color: black; font-family: arial; size: 12px;font-weight: bold;">Direccion</samp></td>
                    <td><samp style="color: black; font-family: arial; size: 12px;font-weight: bold;">Correo</samp></td>
                    <td><samp style="color: #00BFFF; font-family: arial; size: 12px;font-weight: bold;">Modificar</samp></td>
                    <td><samp style="color: red; font-family: arial; size: 12px;font-weight: bold;">Eliminar</samp></td>
                </tr>
                <?php
                include 'Conexion.php';
                $query="SELECT * FROM Clientes";
                $resultado= $conexion->query($query);
                while($rows=$resultado->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $rows['pk_cli_cedula']; ?></td>
                    <td><?php echo $rows['cli_nombre']; ?></td>
                    <td><?php echo $rows['cli_apellido']; ?></td>
                    <td><?php echo $rows['cli_telefono']; ?></td>
                    <td><?php echo $rows['cli_direccion']; ?></td>
                    <td><?php echo $rows['cli_correo']; ?></td>
                    <td><a class="button button-primary" href="frmModificar.php?id=<?php echo $rows['pk_cli_cedula']; ?>">Modificar</a></td>
                    <td><a class="button" href="Eliminar.php?id=<?php echo $rows['pk_cli_cedula']; ?>"><i><img src="imagenes/borrar2.png"></i></a></td>
                    
                </tr>
                <?php
                }
                ?>
                
            </tbody>
            
        </table>
        
    </center>
    </body>
</html>