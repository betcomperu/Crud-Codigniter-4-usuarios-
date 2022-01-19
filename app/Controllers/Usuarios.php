<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\RolesModel;
use App\Controllers\BaseController;
use Config\Services\session;

/* Users Controller */

class Usuarios extends Controller {

    function __construct(){

        /* Cargando biblioteca model y de sesión de usuario */
        $users = new UsuarioModel();
        $roles = new RolesModel();
        $this->session = \Config\Services::session();

    }

    /* función predeterminada llamada*/
    public function index($condicion = 1){
      
        $users = new UsuarioModel();

        $data= [
            'titulo'=>'Usuarios',           
            'usuarios'=>$users->asObject()->select('*')
            ->join('rol','rol.idrol=usuario.rol', 'left')
            ->where('condicion', $condicion)->findAll()
            ];

        /* Llamando las vistas */
       
        echo view('plantillas/header');
		echo view('plantillas/top-menu');
		echo view('plantillas/aside');
		echo view('Usuario/listar', $data);
		echo view('plantillas/footer');

    }

    public function nuevo()
    {
        $roles = new RolesModel();
        $data= [
            'titulo'=>'Agregar Usuarios',           
            'usuarios'=>$roles->select('*')->findAll()
            ];

        echo view('plantillas/header');
		echo view('plantillas/top-menu');
		echo view('plantillas/aside');
		echo view('Usuario/nuevo', $data);
		echo view('plantillas/footer');
    }
    public function insertar()
    {
      
   
        $users = new UsuarioModel();
        $users->save([
            'nombre'=>$this->request->getPost('nombre'),
            'correo'=>$this->request->getPost('correo'),
            'usuario'=>$this->request->getPost('usuario'),
            'clave'=>md5($this->request->getPost('password')),
            'rol'=>$this->request->getPost('rol')]);
        
            return redirect()->to(base_url().'/usuarios');
    }



}