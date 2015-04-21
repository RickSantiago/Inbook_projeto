<?php
require_once '../entity/Pais.php';
class Estado
{
    private $idEstado;
    private $nomeEstado;
    private $uf;
    private $idPais;
    
    public function __construct($idEstado = "", $nomeEstado = "", $uf = "", $idPais = "") 
    {   
        $this->idEstado = $idEstado;
        $this->nomeEstado = $nomeEstado;
        $this->uf = $uf;
        $this->idPais = $idPais;
    }
    
    function getIdEstado() 
    {
        return $this->idEstado;
    }

    function getNomeEstado() 
    {
        return $this->nomeEstado;
    }
    function getIdPais() 
    {
        return $this->idPais;
    }
    function getUf() 
    {
        return $this->uf;
    }
    function setIdPais($idPais) 
    {
        return $this->idPais = $idPais;
    }

    function setIdEstado($idEstado)
    {
        return $this->idEstado = $idEstado;
    }

    function setNomeEstado($nomeEstado) 
    {
        return $this->nomeEstado = $nomeEstado;
    }

    function setUf($uf) 
    {
        return $this->uf = $uf;
    }


}

