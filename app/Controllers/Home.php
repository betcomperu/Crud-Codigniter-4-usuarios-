<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $this->cargarVistas('escritorio');
    }

    public function cargarVistas($view = null){
        echo view('plantillas/header');
		echo view('plantillas/top-menu');
		echo view('plantillas/aside');
		echo view($view);
		echo view('plantillas/footer');

    }
}



