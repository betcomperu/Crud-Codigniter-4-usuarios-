

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro de Usuarios</h1>
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Formulario de Registro</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="register-box-body">
   
   <div Alert</div>
   <form action="<?php echo base_url(); ?>/usuarios/insertar" method="post">
     <div class="form-group has-feedback">
       <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre y Apellidos" required>
       <span class="glyphicon glyphicon-user form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
       <input type="email" id="correo" name="correo" class="form-control" placeholder="Email" required>
       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
       <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required>
       <span class="glyphicon glyphicon-user form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
       <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
       <span class="glyphicon glyphicon-lock form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
       
          
           <select name="rol" id="rol" class="form-control select2" style="width: 100%;">
          
           <?php foreach($usuarios as $val): ?>
            <option value="<?php echo $val['idrol'] ;?>"><?php echo $val['nombrerol'] ;?></option>    
           <?php endforeach; ?>

           </select>
     </div>
     <div class="row">
       <div class="col-sm-4">
       <button type="submit" class="btn btn-primary btn-block btn-flat">Registar</button>
       </div>
       <div class="col-sm-4">
         <a href="<?php echo base_url();?>/usuarios" class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar usuario</a>
       </div>
       <!-- /.col -->
 
     </div>
   </form>

  

   <a href="index.php" class="text-center">Ya tengo una cuenta</a>
 </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>