<?php
/**
 * @author RickSantiago
 *
 */
class Imagem
{
	private $idImagem;
	private $nomeImagem;
	private $livroIdLivro;
	
	public function __construct($idImagem = "", $nomeImagem = "", $livroIdLivro = "")
	{
		$this->idImagem = $idImagem;
		$this->nomeImagem = $nomeImagem;
		
		$livro = new Livro($livroIdLivro,'','','','','');
                $this->livroIdLivro = $livro->getIdLivro();
    
        }
        
	function getIdImagem() {
            return $this->idImagem;
        }

        function getNomeImagem() {
            return $this->nomeImagem;
        }

        function getLivroIdLivro() {
            return $this->livroIdLivro;
        }

        function setIdImagem($idImagem) {
            $this->idImagem = $idImagem;
        }

        function setNomeImagem($nomeImagem) {
            $this->nomeImagem = $nomeImagem;
        }

        function setLivroIdLivro($livroIdLivro) {
            $this->livroIdLivro = $livroIdLivro;
        }


}