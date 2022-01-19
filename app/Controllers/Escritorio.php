<?php namespace App\Controllers;

class Escritorio extends BaseController
{
	public function index()
	{
		$data = [];

        echo view('plantillas/header');
		echo view('plantillas/menu-derecho');
		echo view('plantillas/aside');
		echo view('plantillas/configuracion');
		echo view('dashboard', $data);
		echo view('plantillas/footer');
	}

	//--------------------------------------------------------------------

}
