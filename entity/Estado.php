<?php

class Estado
{
    private $idestado;
    private $nome_estado;
    private $uf;
    
    public function __construct($nome_estado, $uf) 
    {
        $this->nome_estado = $nome_estado;
        $this->uf = $uf;
        
    }
    
    public function getIdestado()
    {
        return $this->idestado;
    }
    public function setIdestado($idestado)
    {
        return $this->idestado = $idestado;
    }
   
    public function getNomeEstado()
    {
        return $this->nome_estado;
    }
    public function setNomeEstado()
    {
        return $this->nome_estado = $nome_estado;
    }
    
    public function getUf()
    {
        return $this->uf;
    }
    public function setUf()
    {
        return $this->uf = $uf;
    }
}

