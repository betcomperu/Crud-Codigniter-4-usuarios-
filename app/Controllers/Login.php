<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\RolesModel;
use App\Controllers\BaseController;
use Config\Services\session;

class Login extends Controller
{

    public function index()
    {
        echo view('Usuario/login');
    }

}