<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteRepository extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome','email','telefone'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }
}
