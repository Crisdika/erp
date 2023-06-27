<?php

namespace App\Models;
use Usuario;
use CodeIgniter\Model;

class usuariosRepository extends Model
{
    public Usuario $usuario;


    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function selectUsuario($formUsuario){


    }


}