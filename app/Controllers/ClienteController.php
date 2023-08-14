<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\ClienteRepository;
use App\Models\entities\Cliente;

class ClienteController extends Controller
{
    public Cliente $Cliente;
    public ClienteRepository $ClienteRepository;


    public function __construct()
    {
        $this->ClienteRepository = new ClienteRepository();
        $this->Cliente = new Cliente();
    }

    public function cadastrarCliente(){
        $this->Cliente->setNome($this->request->getPost('nome'));
        $this->Cliente->setEmail($this->request->getPost('email'));
        $telefoneFormatado = $this->request->getPost('telefone');
        $this->Cliente->setTelefone(preg_replace('/\D/','', $telefoneFormatado));

        $this->ClienteRepository->inserirCliente($this->Cliente);
        return redirect()->to('/dashboard');

    }
}
