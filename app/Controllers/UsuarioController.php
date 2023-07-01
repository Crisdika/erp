<?php

namespace App\Controllers;
use App\Models\usuariosRepository;
use App\Models\entities\Usuario;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public $usuariosRepository;
    public $usuario;

    public function __construct()
    {
        $this->usuariosRepository = new usuariosRepository();
        $this->usuario = new Usuario();
    }

    public function logar(){
        if($this->request->getMethod() === 'post'){
            $this->usuario->setEmail($this->request->getPost('email'));
            $this->usuario->setSenha($this->request->getPost('senha'));
            $this->usuariosRepository->selectUsuario($this->usuario->getEmail(),$this->usuario->getSenha());
        }

    }
}