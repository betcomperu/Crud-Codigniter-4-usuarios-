<?php 
namespace App\Controllers;

use CodeIgniter\Controller;


class Test extends Controller{

    function __construct(){

        /* Cargando variable en el constructor y le pongo de nombre model*/
       
   
        $pager = \Config\Services::pager();
        
       

    }

    public function index(){


    $data = array(
        'titulo'=> "Datos del Usuario",
        'nombre'=> 'Alberto',
        'apellidos'=> "Chávez Rodriguez",
        'celular'=> '980900066',
        'email'=> 'albetho@hotmail.com'
    );

    // var_dump($data);
    // exit;

    // Lo pintamos en la vista "test" pasandole el array data

    echo view('plantillas/header');
        echo view('plantillas/top-menu');
        
        echo view('test', $data);
        echo view('plantillas/footer');

    }

}