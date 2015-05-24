<?php

class Categoria
{
    private $idCategoria;
    private $nomeCategoria;
    
    public function __construct( $nomeCategoria = "", $idCategoria = "") 
    {
        $this->idCategoria = $idCategoria;
        $this->nomeCategoria = $nomeCategoria;
    }
    public function getIdCategoria() 
    {
        return $this->idCategoria;
    }

    public function getNomeCategoria() 
    {
        return $this->nomeCategoria;
    }

    public function setIdCategoria($idCategoria) 
    {
        return $this->idCategoria = $idCategoria;
    }

    public function setNomeCategoria($nomeCategoria) 
            {
        return $this->nomeCategoria = $nomeCategoria;
    }


}
