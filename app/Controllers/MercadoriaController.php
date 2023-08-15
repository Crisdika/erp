<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\entities\Mercadoria;
use App\Models\MercadoriaRepository;


class MercadoriaController extends Controller
{
    public $mercadoria;
    public $mercadoriaRepository;

    public function __construct()
    {
        $this->mercadoria = new Mercadoria();
        $this->mercadoriaRepository = new MercadoriaRepository();
    }

    public function cadastrarMercadoria(){

        $this->mercadoria->setDescricao($this->request->getPost('descricao'));
        if($this->request->getPost('saldo') == '' OR null){
            $this->mercadoria->setSaldo('0');
        }
        if ($this->request->getPost('valor') == '' OR null) {
            $this->mercadoria->setValor('0');
        }
        else{
            $this->mercadoria->setSaldo($this->request->getPost('saldo'));
            $this->mercadoria->setValor($this->request->getPost('valor'));
        }
        $this->mercadoriaRepository->InsertMercadoria($this->mercadoria);
        return redirect()->to('/dashboard');
    }

    public function obterMercadoria() {
        $mercadoriaId = $this->request->getGet('mercadoriaId');
        $mercadoria = $this->mercadoriaRepository->obeterMercadoria($mercadoriaId);

        if(!$mercadoria){
            return $this->response->setJSON(['error' => 'Mercadoria não encontrada']);
        }else{
            return $this->response->setJSON(['valor' => $mercadoria['valor'], 'saldo' => $mercadoria['saldo']]);
        }
    }
}
