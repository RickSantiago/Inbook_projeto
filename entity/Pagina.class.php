
<?php
require_once '../entity/Categoria.php';
include_once '../entity/Categoria.php';
class Pagina
{
    private $idPagina;
    private $titulo;
    private $idCategoria;
    
    public function __construct($idPagina = "", $titulo = "", $idCategoria = "")
    {
       $this->idPagina = $idPagina;
       $this->titulo = $titulo;
       
      $categoria  = new Categoria($idCategoria,'');
      $this->idCategoria = $categoria->getIdCategoria();
    }
    function getIdPagina() {
        return $this->idPagina;
    }

    public function getTitulo() 
    {
        return $this->titulo;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }


}
