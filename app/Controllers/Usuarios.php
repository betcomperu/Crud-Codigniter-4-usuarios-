<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\RolesModel;
use App\Controllers\BaseController;
use Config\Services\session;

/* Users Controller */

class Usuarios extends Controller
{

    function __construct()
    {

        /* Cargando biblioteca model y de sesión de usuario */
        $users = new UsuarioModel();
        $roles = new RolesModel();
        $this->session = \Config\Services::session();
    }

    /*
#### LLAMA A LA VISTA DE LISTADO DE USUARIOS #### 
*/
    public function index($condicion = 1)
    {

        $users = new UsuarioModel();

        $data = [
            'titulo' => 'Usuarios',
            'usuarios' => $users->asObject()->select('*')
                ->join('rol', 'rol.idrol=usuario.rol', 'left')
                ->where('condicion', $condicion)->findAll()
        ];

        /* Llamando las vistas */

        echo view('plantillas/header');
        echo view('plantillas/top-menu');
        echo view('plantillas/aside');
        echo view('Usuario/listar', $data);
        echo view('plantillas/footer');
    }
    /*
#### LLAMA A REGISTRO NUEVO #### 
*/
    public function nuevo()
    {


        $roles = new RolesModel();
        $data = [
            'titulo' => 'Agregar Usuarios',
            'usuarios' => $roles->select('*')->findAll()
        ];

        echo view('plantillas/header');
        echo view('plantillas/top-menu');
        echo view('plantillas/aside');
        echo view('Usuario/nuevo', $data);
        echo view('plantillas/footer');
    }

    /*
#### EJECUTA UN REGISTRO NUEVO Y LO VALIDA #### 
*/
    public function insertar()
    {

        $validation = service('validation');
        $validation->setRules([
            'nombre' => [
                'label' => 'Regla.Nombre',
                'rules' => 'required',
                'errors' => ['required' => 'El nombre y apellido es un campo requerido'],
            ],
            'correo' => [
                'label' => 'El correo',
                'rules' => 'required|valid_email|is_unique[usuario.correo]',
                'errors' => [
                    'required' => 'El Correo es un campo requerido',
                    'valid_email' => 'El Correo ingresado no es válido',
                    'is_unique' => 'El Correo ingresado, ya se encuentra registrado'
                ],
            ],
            'usuario' => [
                'label' => 'Regla.Usuario',
                'rules' => 'required',
                'errors' => ['required' => 'El usuario es un campo requerido'],
            ],
            'password' => [
                'label' => 'Regla.Clave',
                'rules' => 'required|min_length[06]',
                'errors' => ['required' => 'El Password es un campo requerido y debe tener min seis digitos'],
            ]
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            # code...
        }


        $users = new UsuarioModel();

        //  $foto = $this->request->getPOST('foto');

        $file = $this->request->getfile('foto');

        if ($file->getError() == 4) {
            $imageName = 'default.png';
        } else {

            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }

        $users->save([
            'nombre' => $this->request->getPost('nombre'),
            'correo' => $this->request->getPost('correo'),
            'usuario' => $this->request->getPost('usuario'),
            'clave' => md5($this->request->getPost('password')),
            'rol' => $this->request->getPost('rol'),
            'foto' => $imageName
        ]);

        return redirect()->to(base_url() . '/usuarios');
    }

    /* Graba lo que traen los POST */



    /*
#### LLAMA A EDITAR UN REGISTRO #### 
*/

    public function edit($id = null)
    {

        $users = new UsuarioModel();
        $roles = new RolesModel();

        $data = [
            'titulo' => 'Editar Usuario',
            'usuarios' => $users->asObject()->select('*')->join('rol', 'rol.idrol=usuario.rol', 'left')->find($id),
            'roles' => $roles->select('*')->findAll()

        ];
        echo view('plantillas/header');
        echo view('plantillas/top-menu');
        echo view('plantillas/aside');
        echo view('Usuario/editar', $data);
        echo view('plantillas/footer');
    }
    /*
#### EJECUTA LA EDICIÓN DE UN REGISTRO #### 
*/
    public function update($id = null)
    {

        $users = new UsuarioModel();

        $file = $this->request->getfile('foto');

        if ($file->getError() == 4) {
            $imageName = 'default.png';
        } else {

            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }

        $data = [

            'nombre' => $this->request->getPost('nombre'),
            'correo' => $this->request->getPost('correo'),
            'usuario' => $this->request->getPost('usuario'),
            'clave' => md5($this->request->getPost('password')),
            'rol' => $this->request->getPost('rol'),
            'foto' => $imageName
        ];
        $users->update($id, $data);
        return redirect()->to(base_url() . '/usuarios');
    }

    public function eliminar($id){
        
        $users = new UsuarioModel();
       
        $data = [
            'condicion'=> 0
        ];

        $users->update($id, $data);
        return redirect()->to(base_url() . '/usuarios');
    }

   
}
