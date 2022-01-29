<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista TEST</title>
</head>

<body>
    <h1>Esta es la Vista de <?php echo $titulo; ?></h1>



    <table id="tablaU" border="1px">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Imagen</th>
                <th>Opciones</th>

            </tr>
        </thead>
        <?php foreach ($usuarios as $r) : ?>
            <tr>
                <td><?php echo $r['nombre'] . "<br>"; ?></td>
                <td><?php echo $r['correo'] . "<br>"; ?></td>
                <td><?php echo $r['usuario'] . "<br>"; ?></td>
                <td><?php echo $r['rol'] . "<br>"; ?></td>
                <td><?php echo $r['foto'] . "<br>"; ?></td>

                <td>
                    <a href="#">EDITAR</a>
                    <a href="#">ELIMINAR</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>





</body>

</html>