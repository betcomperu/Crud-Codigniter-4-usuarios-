
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listado de <?php echo $titulo; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Listado de Usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabla de usuarios</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="box-header with-border">
                    <a href="<?php echo base_url();?>/usuarios/nuevo"
                                class="btn btn-primary"><i
                                class="fa fa-plus-circle"></i> Agregar usuario
                    </a>
                    <div class="box-tools pull-right">
                       <br>
                    </div>
                </div>
 
                     <div class = "margin-top">
    <table id="tabla1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Opciones</th>

            </tr>  
        </thead>

        <tbody>
        
        <?php foreach($usuarios as $dato) : ?>
            <tr>
                <td><?php echo $dato->nombre;?></td>
                <td><?php echo $dato->correo;?></td>
                <td><?php echo $dato->usuario;?></td>
            <td>
                    
              

                <?php 
                        $valrol=$dato->nombrerol;
                        switch ($valrol) {
                            case 'Administrador':
                            //  echo '<p class="text-green">'.$valrol.'</p>';
                              echo '<p class="text-success"><b>'.$valrol.'</b></p>';
                                break;
                            case 'Vendedor':
                                echo '<p class="text-info"><b>'.$valrol.'</b></p>';
                                    break;
                            case 'Supervisor':
                                echo '<p class="text-primary"><b>'.$valrol.'</b></p>';
                                            break;
                            default:
                            echo '<p class="text-danger"><b>'.$valrol.'</b></p>';
                                break;
                                          }
                        ?>

            
            </td>
                <td>
                <a class="btn btn-primary" href="#" role="button">Editar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalborrar">Eliminar</button>
                </td>
        </tr>
        <?php endforeach; ?>
        
               <tfoot>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th>Rol</th>
                                <th>Opciones</th>
                            </tr>
               </tfoot>
                    </table>
                </div>
        
                 <!-- /.card-body -->
                 <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
        
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
