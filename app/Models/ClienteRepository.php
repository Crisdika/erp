<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteRepository extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome','email','telefone','usuario_id'];
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

    public function inserirCliente($dadosPessoais){
        $data = [
            'nome' => $dadosPessoais->getNome(),
            'email' => $dadosPessoais->getEmail(),
            'telefone' => $dadosPessoais->getTelefone(),
            'usuario_id' => $this->data_user['user_id']
        ];
        $this->insert($data);
    }

    public function listarCliente(){
        $clientes = $this->where('usuario_id',$this->data_user['user_id'])->findAll();
        return $clientes;
    }
}
