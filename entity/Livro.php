<?php
class Livro
{
	private $idLivro;
	private $nomeLivro;
	private $autor;
	private $lancamento;
	private $descricao;
	private $idPagina;
	
	public function __construct($idLivro = "", $nomeLivro = "", $autor = "", $lancamento = "", $descricao = "", $idPagina = "")
	{
		$this->idLivro = $idLivro;
		$this->nomeLivro = $nomeLivro;
		$this->autor = $autor;
		$this->lancamento = $lancamento;
		$this->descricao = $descricao;
		$this->idPagina = $idPagina;
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

        function getIdPagina() 
        {
            return $this->idPagina;
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

        function setIdPagina($idPagina) 
        {
            $this->idPagina = $idPagina;
        }


}