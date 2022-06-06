<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png"
           alt="betcom Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SYS BETCOM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        

          <img src="<?= base_url('uploads') . "/". session()->get('foto') ; ?>" alt="img-responsive" class="img-circle elevation-2" width="80">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nombre')?></a>
          <p><span class="badge bg-warning"><?php 
          switch (session()->get('rol')) {
            case '1':
              echo "Administrador";
              break;
              case '2':
                echo "Vendedor";
                break;
                case '3':
                  echo "Usuario";
                  break;
                  case '4':
                    echo "Visitante";
                    break;
                    case '5':
                      echo "Supervisor";
                      break;
            
            default:
              # code...
              break;
          }
          
          ?></span></p>
        </div>
      </div>

      <!-- Sidebar Menu -->
     <?php if(session()->rol == 1): ?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/usuarios/nuevo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Usuarios</p>
                </a>
              </li>
     
            </ul>
          </li>
            

          <li class="nav-header">USUARIO</li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/login/salir" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Salir</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Editar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Preferencias</p>
            </a>
          </li>
        </ul>
      </nav>
    <?php endif; ?>
    <?php if(session()->rol != 1): ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-header">USUARIO</li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/login/salir" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Salir</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Editar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Preferencias</p>
            </a>
          </li>
        </ul>
      </nav>

      <?php endif; ?>

  
      <!-- /.sidebar-menu -->



    </div>
    <!-- /.sidebar -->
  </aside>