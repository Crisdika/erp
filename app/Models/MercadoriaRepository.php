<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;
use mysql_xdevapi\Session;

class MercadoriaRepository extends Model
{
    protected $table = 'mercadoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['desc','valor','saldo','cliente_id'];
    private $session;
    private $data_user;


    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
        $this->session = \Config\Services::session();
        $this->data_user = $this->session->get();
    }

    public function InsertMercadoria($dadosMercadoria){
        $data = [
            'desc'  => $dadosMercadoria->getDescricao(),
            'valor' => $dadosMercadoria->getValor(),
            'saldo' => $dadosMercadoria->getSaldo(),
            'cliente_id' => $this->data_user['user_id']
            ];

        $this->insert($data);
    }

    public function listarMercadoria(){
        $mercadorias = $this->where('cliente_id', $this->data_user['user_id'])->findAll();
        return $mercadorias;
    }

    public function obeterMercadoria($mercadoriaId){
        $mercadoria = $this->find($mercadoriaId);
        return json_encode($mercadoria);
    }
}

