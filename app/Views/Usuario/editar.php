<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
               
                
                      <h2><?php echo "Se va editar el registro :  ".$us['nombre'];?></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Normal Tables</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
 
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Validation</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?php echo base_url();?>/usuario/edit">

                                <input type="hidden" value="<?php echo $us['idusuario']; ?>" name="idusuario">
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value= "<?php echo $us['nombre']; ?>"required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="email" class="form-control" placeholder="Email" name="correo" value= "<?php echo $us['correo']; ?>" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" value= "<?php echo $us['usuario']; ?>" required>
                                </div>
                               

                                <div class="form-group form-float">
                                    <input type="password" class="form-control" placeholder="Password" name="clave" value= "<?php echo $us['clave'] ?>" requerido>
                                </div>
                                <div class="form-group">
                                <div class="col-lg-4 col-md-6">
                                    <p>Elije el nuevo Rol : </p>
                                    <div class="mb-3">
                                    
                                        <select class="form-control show-tick" name="rol">
                                        <option  value="<?php echo $us['idrol']; ?>"><?php echo $us['rol']; ?></option>
                                        <?php foreach($ro as $i):?>
                                        
                                        <option  value="<?php echo $i['idrol']; ?>"><?php echo $i['rol']; ?></option>
                                        <?php endforeach;?>
                                              
                                    
                                        </select>
                                        
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                </div>
                                
                                <button class="btn btn-primary"><a href="<?php echo base_url();?>/usuario/edit"></a>Guardar cambios</button>
                              
                                <a href="<?php echo base_url();?>/usuario/index" class="btn success" role="button">Cancelar</a>                                        </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>
                
          