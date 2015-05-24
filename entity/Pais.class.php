<?php

class Pais
{
    private $idPais;
    private $nomePais;

    public function __construct($nomePais = "",$idPais = "") 
    {
    	$this->idPais = $idPais;
        $this->nomePais = $nomePais;    
    }
    
    function getIdPais() {
        return $this->idPais;
    }

    function getNomePais() {
        return $this->nomePais;
    }

    function setIdPais($idPais)
    {
        return $this->idPais = $idPais;
    }

    function setNomePais($nomePais)
    {
        return $this->nomePais = $nomePais;
    }


    
    
}
