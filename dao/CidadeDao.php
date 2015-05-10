<?php

class CidadeDao
{
    public function InserirCidade(Cidade $cidade) 
    {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO cidade(nome_cidade,id_estado) VALUES(:nome_cidade,:id_estado)");
            $insert->bindValue(":nome_cidade", $cidade->getNomeCidade());   
            $insert->bindValue(":id_estado", $cidade->getIdEstado());
            $insert->execute(); 
    }
     public function selecionarCidade(Cidade $cidade)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_cidade,uf FROM cidade ORDER BY nome_cidade ");
            $select->execute();
        }
        public function deletarCidade(Cidade $cidade) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM cidade WHERE nome_cidade = 'Lagoa Azul'");
            $delete->execute();
        }
        public function updateCidade(Cidade $cidade)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE cidade SET 'nome_cidade' = 'AAAteste' WHERE 'idcidade'='?'");
            $update->execute();
            
        }
         public function listarCidade()
	{
		$conexao = new PDOUtil();
		
		$listar = $conexao->getStance()->prepare("SELECT nome_cidade FROM cidade");
		$listar->execute();
		while ($res = $listar->fetch())
    	{
        	echo $res["nome_cidade"]."<br/>";
    	}
        }

}

