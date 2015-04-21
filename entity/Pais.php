<?php

class Pais
{
    private $idPais;
    private $nomaPais;

    public function __construct($idPais="", $nomePais = "") 
    {
    	$this->idPais = $idPais;
        $this->nomaPais = $nomePais;    
    }
    
    function getIdPais() {
        return $this->idPais;
    }

    function getNomaPais() {
        return $this->nomaPais;
    }

    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setNomaPais($nomaPais) {
        $this->nomaPais = $nomaPais;
    }


    
    
}
