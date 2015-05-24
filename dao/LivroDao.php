<?php
class LivroDao
{
	public function InserirLivro(Livro $livro)
	{
		$conexao = new PDOUtil();
		
		$insert = $conexao->getStance()->prepare("INSERT INTO livro(nome_livro,autor,lancamento,descricao,imagem,id_categoria) 
				VALUES(:nome_livro,:autor,:lancamento,:descricao,:imagem,:id_categoria)");
		
		$insert->bindValue(":nome_livro", $livro->getNomeLivro());
		$insert->bindValue(":autor", $livro->getAutor());
		$insert->bindValue(":lancamento", $livro->getLancamento());
		$insert->bindValue(":descricao", $livro->getDescricao());
		$insert->bindValue(":imagem", $livro->getImagemLivro());
                $insert->bindValue(":id_categoria", $livro->getIdCategoria());
		
		$insert->execute();
	}
        public function selecionarLivro(Livro $livro)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_livro FROM livro ORDER BY :nome_livro ");
            $select->execute();
        }
        public function deletarLivro(Livro $livro) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM livro WHERE nome_livro = '?'");
            $delete->execute();
        }
        public function updateLivro(Livro $livro)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE livro SET 'nome_livro' = '?' WHERE 'idlivro'='?'");
            $update->execute();
        }
        public function listarLivro()
	{
		$conexao = new PDOUtil();
		
		$listar = $conexao->getStance()->prepare("SELECT * FROM livro");
		$listar->execute();
		while ($res = $listar->fetch(PDO::FETCH_OBJ))
    	{
        	echo "</br></br>".print_r($res);
               
    	}
        }
}