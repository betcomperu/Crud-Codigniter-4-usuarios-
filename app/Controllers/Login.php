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

        $users = new UsuarioModel();
        $roles = new RolesModel();
        $this->session = \Config\Services::session();
        helper('form', 'url');
    }

    public function index()
    {

        $data = [];
        echo view('Usuario/login', $data);
    }


    public function entrar()
    {

        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $modelLogin = new UsuarioModel();
        $entrarLogin = $modelLogin->where('usuario', $usuario)->first();
       // dd($entrarLogin);


        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'usuario' => [
                'label' => 'Usuario',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} es requerido'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} es requerido'
                ]
            ],
        ]);

        if (!$valid) {
            $sessError = [
                'errUsuario' => $validation->getError('usuario'),
                'errPassword' => $validation->getError('password')
            ];
            session()->setFlashdata($sessError);
            return redirect()->to(site_url('login/index'));
        } else {
            $modelLogin = new UsuarioModel();
            $entrarLogin = $modelLogin->where('usuario', $usuario)->first();

            if ($entrarLogin == null) {
                $sessError = [
                    'errUsuario' => 'Este usuario no es valido',

                ];
                session()->setFlashdata($sessError);
                return redirect()->to(site_url('login/index'));
            } else {
                $passwordUser = $entrarLogin['clave'];

                if (password_verify($password, $passwordUser)) {
                    $idUsuario = $entrarLogin['idusuario'];

                    $data = [
                        'idusuario' => $idUsuario,
                        'nombre' => $entrarLogin['nombre'],
                        'correo' => $entrarLogin['correo'],
                        'rol' => $entrarLogin['rol'],
                        'foto' => $entrarLogin['foto'],
                        'isLoggedIn' => true,
                    ];

                    session()->set($data);
                    return redirect()->to('/home/index');
                } else {
                    $sessPassword = [
                        'errPassword' => 'Este Password no es valido',

                    ];
                    session()->setFlashdata($sessPassword);
                    return redirect()->to(site_url('login/index'));
                }
            }
        }
    }


    public function salir()
    {

        $session = session();
        $session->destroy();
        return redirect()->to(base_url() . '/login/index');
    }
}
