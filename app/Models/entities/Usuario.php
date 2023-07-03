<?php

namespace App\Models\entities;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class Usuario
{
    private $id;
    private $senha;
    private $email;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }


}