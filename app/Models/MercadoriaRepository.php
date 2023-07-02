<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use App\Models\entities\Mercadoria;
use CodeIgniter\Validation\ValidationInterface;

class MercadoriaRepository extends Model
{
    protected $table = 'Mercadoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['descricao','saldo','valors'];
    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }

    public function insertMercadoria($data){
        $this->insert($data);
    }
}