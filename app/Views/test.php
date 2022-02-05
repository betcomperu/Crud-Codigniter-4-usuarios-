<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista <?php echo $titulo ?></title>
</head>

<body>
    <h1>Esta es la Vista de <?php echo $titulo ?> </h1>

    <a href="<?php echo base_url(); ?>/usuarios/nuevo" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar usuario </a>

    <br>

    <table id="tablaU" border="1px">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Opciones</th>

            </tr>
        </thead>
        <?php // foreach ($data as $r) : ?>
            <tr>
                <td><?php echo $nombre . "<br>"; ?></td>
                <td><?php echo $apellidos . "<br>"; ?></td>
                <td><?php echo $celular . "<br>"; ?></td>
                <td><?php echo $email . "<br>"; ?></td>
             
                <td>
                <button type="button" class="btn btn-success">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>

        <?php //endforeach; ?>
    </table>





</body>

</html>