<?php
class LivroDao
{
	public function InserirLivro(Livro $livro)
	{
		$conexao = new PDOUtil();
		
		$insert = $conexao->getStance()->prepare("INSERT INTO livro(nome_livro,autor,lancamento,descricao,id_pagina) 
				VALUES(:nome_livro,:autor,:lancamento,:descricao,:id_pagina)");
		
		$insert->bindValue(":nome_livro", $livro->getNomeLivro());
		$insert->bindValue(":autor", $livro->getAutor());
		$insert->bindValue(":lancamento", $livro->getLancamento());
		$insert->bindValue(":descricao", $livro->getDescricao());
		$insert->bindValue(":id_pagina", $livro->getIdPagina());
		
		$insert->execute();
	}
}