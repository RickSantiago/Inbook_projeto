<?php

class PaginaDao
{
    
        public function InserirPagina(Pagina $pagina) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO pagina(titulo, id_categoria) VALUES(:titulo, :id_categoria)");
            $insert->bindValue(":titulo", $pagina->getTitulo());
            $insert->bindValue(":id_categoria", $pagina->getIdCategoria());
            $insert->execute();
        }
        public function selecionarPagina(Pagina $pagina)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT titulo FROM pagina ORDER BY :titulo ");
            $select->execute();
        }
        public function deletarPagina(Pagina $pagina) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM pagina WHERE titulo = '?'");
            $delete->execute();
        }
        public function updatePagina(Pagina $pagina)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE pagina SET 'titulo' = '?' WHERE 'idpagina'='?'");
            $update->execute();
            
        }
        public function listarPagina()
	{
		$conexao = new PDOUtil();
		
		$listar = $conexao->getStance()->prepare("SELECT titulo FROM pagina");
		$listar->execute();
		while ($res = $listar->fetch())
    	{
        	echo $res["titulo"]."<br/>";
    	}
        }
}

