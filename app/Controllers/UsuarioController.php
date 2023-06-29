<?php

namespace App\Controllers;
use App\Models\usuariosRepository;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public $usuariosRepository;

    public function __construct()
    {
        $this->usuariosRepository = new usuariosRepository();
    }

    public function logar(){
        if($this->request->getMethod() === 'post'){
            $dadosform = $this->request->getPost();
            $this->usuariosRepository->selectUsuario($dadosform);
        }

    }
}