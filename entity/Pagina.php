<?php

class Pagina
{
    private $idPagina;
    private $titulo;
    private $categoriaIdCategoria;
    
    public function __construct($idPagina = "", $titulo = "", $categoriaIdCategoria = "")
    {
       $this->idPagina = $idPagina;
       $this->titulo = $titulo;
       $this->categoriaIdCategoria = $categoriaIdCategoria;
    }
    function getIdPagina() {
        return $this->idPagina;
    }

    public function getTitulo() 
    {
        return $this->titulo;
    }

    function getCategoriaIdCategoria() {
        return $this->categoriaIdCategoria;
    }

    function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCategoriaIdCategoria($categoriaIdCategoria) {
        $this->categoriaIdCategoria = $categoriaIdCategoria;
    }


}
