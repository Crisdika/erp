<?php

namespace App\Models;
use App\Models\entities\Usuario;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class usuariosRepository extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','senha'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }

    public function selectUsuario($usuario){
        $result = $this
            ->where('email',$usuario->getEmail())
            ->where('senha',$usuario->getSenha())
            ->first();
    }
}