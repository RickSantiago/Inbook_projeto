<?php
class CategoriaDao
{
     public function InserirCategoria(Categoria $categoria) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO categoria(nome_categoria) VALUES(:nome_categoria)");
            $insert->bindValue(":nome_categoria", $categoria->getNomeCategoria());          
            $insert->execute();
        }
         public function selecionarCategoria(Categoria $categoria)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_categoria FROM categoria ORDER BY :nome_categoria ");
            $select->execute();
        }
        public function deletarCategoria(Categoria $categoria) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM categoria WHERE nome_categoria = '?'");
            $delete->execute();
        }
        public function updateCategoria(Categoria $categoria)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE categoria SET 'nome_categoria' = '?' WHERE 'idcategoria'='?'");
            $update->execute();
            
        }
        public function listarCategoria()
	{
		$conexao = new PDOUtil();
		
		$listar = $conexao->getStance()->prepare("SELECT nome_categoria FROM categoria");
		$listar->execute();
		while ($res = $listar->fetch())
    	{
        	echo $res["nome_categoria"]."<br/>";
    	}
        }

}

