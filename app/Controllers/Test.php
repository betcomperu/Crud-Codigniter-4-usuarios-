<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TestModel;
use App\Models\UsuarioModel;

class Test extends Controller{

    function __construct(){

        /* Cargando variable en el constructor y le pongo de nombre model*/
       
        $this->rol=new TestModel();
        $this->usuario=new UsuarioModel();
        $pager = \Config\Services::pager();
        
       

    }

    public function index(){

    /* Uso la instancia para hacer mi consulta aplicando asObject para convertilo en objeto
    El resultado será un objeto */
    $datos = $this->usuario->asObject()->findAll();
    $db= \Config\Database::connect();
    $builder = $db->table('usuario u');
    $builder->select('u.nombre, u.correo, u.usuario, u.rol');
    $builder->join('rol r', 'r.idrol = u.rol');
    $query = $builder->get();

    // Creo un Array asociativo aprovechando colocarle "titulo".
    
    $data = [
        'titulo'=> "Usuarios",
        'rol'=>$query,
        'usuarios'=> $this->usuario->$query->getResultArray()
        
        
    ];

    // Lo pintamos en la vista "test" pasandole el array data

    echo view('test', $data);

    }

}