<?php

namespace App\Models\entities;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class Usuario extends Model
{
    protected $table;
    protected $primaryKey;
    protected $allowedFields;

    public function __construct()
    {
        $this->table = 'login';
        $this->primaryKey = 'id';
        $this->allowedFields = ['email','senha'];
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }
}