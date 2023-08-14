<?php

namespace App\Controllers;
use App\Models\usuariosRepository;
use App\Models\entities\Usuario;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public $usuariosRepository;
    public $usuario;
    public $session;

    public function __construct()
    {
        $this->usuariosRepository = new usuariosRepository();
        $this->usuario = new Usuario();
        $this->session = \Config\Services::session();
    }

    public function logar(){
            $this->usuario->setEmail($this->request->getPost('email'));
            $this->usuario->setSenha($this->request->getPost('senha'));
            $result = $this->usuariosRepository->selectUsuario($this->usuario);
//            var_dump($result['nome']);


                if($result == null) {
//                echo "<script> alert('E-mail ou senha incorretos') </script>";
                return redirect()->to('/');
            } else {

                $userData = [
                    'user_id' => $result['id'],
                    'user_name' => $result['nome'],
                ];
                $this->session->set($userData);
                return redirect()->to('/dashboard');
            }
    }
}

