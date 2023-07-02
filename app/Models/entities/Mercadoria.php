<?php

namespace App\Models\entities;

class Mercadoria
{
    private $id;
    private $descricao;
    private $saldo;
    private $valor;
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }



}