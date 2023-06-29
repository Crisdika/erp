<?php

namespace App\Models;
use App\Models\entities\Usuario;
use CodeIgniter\Model;
class usuariosRepository extends Model
{
    public Usuario $usuario;
//    public $stmt;

//    public function __construct()
//    {
//
//        $this->stmt = \Config\Database::connect();
//    }

    public function selectUsuario($dadosform){
        $this->usuario = new Usuario();
        $result = $this->usuario->where('email',$dadosform['email'])->first();
        print_r($result);
    }

    public function teste(){
        return 'alo';
    }
}