<?php

namespace App\Models;
use App\Models\entities\Usuario;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class usuariosRepository extends Model
{
    public Usuario $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function selectUsuario($dadosform){
        $result = $this->usuario->where('email',$dadosform['email'])->first();
        if($result){
            echo'Acho';
        }else{
            echo'Não achou';
        }
    }
}