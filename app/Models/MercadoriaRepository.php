<?php

namespace App\Models;

use App\Models\entities\Mercadoria;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class MercadoriaRepository extends Model
{
    protected $table = 'mercadoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['desc','valor','saldo'];
    public $mercadoria;

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }

    public function InsertMercadoria($dadosMercadoria){
        var_dump($dadosMercadoria->getDescricao());
    }
}
