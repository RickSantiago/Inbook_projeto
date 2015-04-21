<?php

class Pais
{
    private $idpais;
    private $nome_pais;

    public function __construct($nome_pais) 
    {
        $this->nome_pais = $nome_pais;    
    }
    
    public function getIdpais()
    {
        return $this->idpais;
    }
    public function setIdpais($idpais)
    {
        return $this->idpais = $idpais;
    }
   
    public function getNome_pais()
    {
        return $this->nome_pais;
    }
    public function setNomepais()
    {
        return $this->nome_pais = $nome_pais;
    }
    
    
}
