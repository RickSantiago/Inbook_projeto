<?php
require_once './Pais.php';
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
    
    function getIdEstado() {
        return $this->idEstado;
    }

    function getNomeEstado() {
        return $this->nomeEstado;
    }
    function getIdPais() {
        return $this->idPais;
    }
    function getUf() {
        return $this->uf;
    }
    function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }

    function setNomeEstado($nomeEstado) {
        $this->nomeEstado = $nomeEstado;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }


}

