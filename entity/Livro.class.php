<?php
require_once '../entity/Categoria.class.php';
include_once '../entity/Categoria.class.php';
class Livro
{
	private $idLivro;
	private $nomeLivro;
	private $autor;
	private $lancamento;
	private $descricao;
        private $imagemLivro;
        private $idCategoria;

	public function __construct($idLivro = "", $nomeLivro = "", $autor = "", $lancamento = "", $descricao = "", $imagemLivro = "", $idCategoria = "")
	{
		$this->idLivro = $idLivro;
		$this->nomeLivro = $nomeLivro;
		$this->autor = $autor;
		$this->lancamento = $lancamento;
		$this->descricao = $descricao;
                $this->imagemLivro = $imagemLivro;

		$categoria = new Categoria($idCategoria,'');
                $this->idCategoria = $categoria->getIdCategoria();
	}
	function getIdLivro()
        {
            return $this->idLivro;
        }

        function getNomeLivro()
        {
            return $this->nomeLivro;
        }

        function getAutor()
        {
            return $this->autor;
        }

        function getLancamento()
        {
            return $this->lancamento;
        }

        function getDescricao()
        {
            return $this->descricao;
        }

        function getIdCategoria()
        {
            return $this->idCategoria;
        }
        function getImagemLivro()
        {
            return $this->imagemLivro;
        }
                function setIdLivro($idLivro)
        {
            $this->idLivro = $idLivro;
        }

        function setNomeLivro($nomeLivro)
        {
            $this->nomeLivro = $nomeLivro;
        }

        function setAutor($autor)
        {
            $this->autor = $autor;
        }

        function setLancamento($lancamento)
        {
            $this->lancamento = $lancamento;
        }

        function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        function setIdCategoria($idCategoria)
        {
            $this->idCategoria = $idCategoria;
        }
        function setImagemLivro($imagemLivro)
        {
            $this->imagemLivro = $imagemLivro;
        }
       


}