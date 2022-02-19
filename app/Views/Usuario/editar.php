

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="swal2" data-swal="<?= session()->get('editado')?>"></div>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Editar Usuario</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="register-box-body">
   
        <!-- <div class="alert alert-danger" role="alert"> -->
    <ul>
 
</div>
   <form action="<?php echo base_url('/usuarios/update')."/" .$usuarios->idusuario ?>" method="post" enctype="multipart/form-data">
   <!-- <input type="hidden" name="_method" value="PUT"/> -->
   <?= csrf_field();?>
     <div class="form-group has-feedback">
       <input type="text" value="<?= $usuarios->nombre?>" id="nombre" name="nombre" class="form-control" placeholder="Nombre y Apellidos">
       <span class="glyphicon glyphicon-user form-control-feedback"></span>
       <p class="text text-danger"><?= session('errors.nombre')?></p>
     </div>
     <div class="form-group has-feedback">
       <input type="email" value="<?= $usuarios->correo?>" id="correo" name="correo" class="form-control" placeholder="Email">
       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       <p class="text text-danger"><?= session('errors.correo')?></p>
     </div>
     <div class="form-group has-feedback">
       <input type="text" value="<?= $usuarios->usuario ?>" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
       <span class="glyphicon glyphicon-user form-control-feedback"></span>
       <p class="text text-danger"><?= session('errors.usuario')?></p>
     </div>
     <div class="form-group has-feedback">
       <input type="password" value="" id="password" name="password" class="form-control" placeholder="Password">
       <span class="glyphicon glyphicon-lock form-control-feedback"></span>
       <p class="text text-danger"><?= session('errors.password')?></p>
       
     </div>

     <div class="form-group has-feedback">
       
          
           <select name="rol"  id="rol" class="form-control select2" style="width: 100%;">
           
           <option value="<?= $usuarios->idrol ?>"><?php echo $usuarios->nombrerol ?></option>  
           <?php foreach($roles as $rol): ?>
            <option value="<?php echo $rol['idrol'] ;?>"><?php echo $rol['nombrerol'] ;?></option>    
           <?php endforeach; ?>

           </select>
     </div>
                    
     <div class="form-group">
            <div><img src="<?= base_url('uploads') . "/"; ?><?php echo $usuarios->foto; ?>" alt="img-responsive" width="80"></div>
     
    <label for="exampleFormControlFile1">Cambiar archivo foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" value="<?= $usuarios->foto ?>"">
  </div>
       </div>

    
     <div class="row">
       <div class="col-sm-4">
       <button type="submit" class="btn btn-primary editar"><i class="fa fa-plus-circle"></i> Actualizar</button>
       <a href="<?php echo base_url();?>/usuarios" class="btn btn-success"><i class="fa fa-plus-circle"></i> Regresar</a>
       </div>
       
       <!-- /.col -->
 
     </div>
   </form>

  

   <a href="index.php" class="text-center">Ya tengo una cuenta</a>
 </div>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>