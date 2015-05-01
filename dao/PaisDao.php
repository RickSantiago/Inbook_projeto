<?php
class PaisDao 
{
	
        public function InserirPais(Pais $pais) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO pais(nome_pais) VALUES(:nome_pais)");
            $insert->bindValue(":nome_pais", $pais->getNomePais());          
            $insert->execute();
        }
        public function selecionarPais(Pais $pais)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_pais FROM pais ORDER BY :nome_pais ");
            $select->execute();
        }
        public function deletarPais(Pais $pais) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM pais WHERE nome_pais = '?'");
            $delete->execute();
        }
        public function updatePais(Pais $pais)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE pais SET 'nome_pais' = '?' WHERE 'idpais'='?'");
            $update->execute();
            
        }
        

}

