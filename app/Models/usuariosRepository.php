<?php

namespace App\Models;
use Usuario;
use CodeIgniter\Model;

class usuariosRepository extends Model
{
    public $usuario;
//    private $stmt;

    public function __construct()
    {
        $this->usuario = new Usuario();
//        $this->stmt = mysqli_connect();
    }

    public function selectUsuario($formUsuario){



    }


}