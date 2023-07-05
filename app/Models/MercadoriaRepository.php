<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class MercadoriaRepository extends Model
{
    protected $table = 'mercadoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['desc','valor','saldo'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }

    public function InsertMercadoria($dadosMercadoria){

        $data = [
            'desc'  => $dadosMercadoria->getDescricao(),
            'valor' => $dadosMercadoria->getValor(),
            'saldo' => $dadosMercadoria->getSaldo()
            ];
        $this->insert($data);
        return redirect()->to('/dashboard');
    }

    public function listarMercadoria(){

    }

}
