<?php

namespace App\Models;
use App\Models\entities\Usuario;
use CodeIgniter\Model;
class usuariosRepository extends Model
{
    public Usuario $usuario;


    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function selectUsuario($formUsuario){
        $this->usuario->where($formUsuario->email, $formUsuario->senha)->first();
    }
}