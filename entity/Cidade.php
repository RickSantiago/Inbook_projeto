<?php
class Cidade
{
    private $idCidade;
    private $nomeCidade;
    private $idEstado;
    
    public function __construct($idCidade = "" , $nomecidade = "",  $idEstado = "")
    {
        $this->idCidade = $idCidade;
        $this->nomeCidade = $nomecidade;  
        $this->idEstado = $idEstado;
                       
    }
    
    function getIdCidade() 
    {
        return $this->idCidade;
    }

    function getNomeCidade() 
    {
        return $this->nomeCidade;
    }
    
    function getIdEstado() 
    {
        return $this->idEstado;
    }

    function setIdEstado($idEstado) 
    {
       return $this->idEstado = $idEstado;
    }

    function setIdCidade($idCidade) 
    {
       return $this->idCidade = $idCidade;
    }

    function setNomeCidade($nomeCidade) 
    {
       return $this->nomeCidade = $nomeCidade;
    }


 
}
