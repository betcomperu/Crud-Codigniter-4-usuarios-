<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\RolesModel;
use App\Controllers\BaseController;
use Config\Services\session;


class Login extends Controller
{
    public function __construct()
    {

        helper('form');
    }

    public function index()
    {

        $data = [];

        echo view('Usuario/login', $data);
    }

    public function entrar()
    {
        $session =session();
        $users = new UsuarioModel();
        $usuario = $this->request->getPost('usuario');
        $clave = md5($this->request->getPost('password'));
        $data = $users->where('usuario', $usuario)->first();
      
        if($data){
            $pass = $data['clave'];
           
          //  $verificandoclave = password_verify($clave, $pass);
            if($pass = $data){
                $session_data = [
                    'idusuario' => $data['idusuario'],
                    'nombre' => $data['nombre'],
                    'correo' => $data['correo'],
                    'usuario' => $data['usuario'],
                    'rol' => $data['rol'],
                    'foto' => $data['foto'],
                    'logged_in' =>TRUE
                  
                ];
              
                $session->set($session_data);
                return redirect()->to('/home');

            }else{ // Si la clave no coincide
                $session->setFlashdata('mensaje', "Error de Clave");
                return redirect()->to(base_url() . '/login');
            }
        }else{ // Si la usuario no coincide}
        $session->setFlashdata('mensaje', "Error de Usuario");
                return redirect()->to(base_url() . '/login');
    }
}
}