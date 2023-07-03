<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\entities\Mercadoria;
use App\Models\MercadoriaRepository;

class MercadoriaController extends BaseController
{
    public $mercadoria;
    public $mercadoriaRepository;

    public function __construct()
    {
        $this->mercadoria = new Mercadoria();
        $this->mercadoriaRepository = new MercadoriaRepository();
    }

    public function CadastrarMercadoria(){
        $this->mercadoria->setDescricao($this->request->getPost('descricao'));
        $this->mercadoria->setSaldo($this->request->getPost('saldo'));
        $this->mercadoria->setValor($this->request->getPost('valor'));
        $this->mercadoriaRepository->InsertMercadoria($this->mercadoria);
    }
}
