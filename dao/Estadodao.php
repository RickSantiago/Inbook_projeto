<?php
class Estadodao 
{
	
        public function InserirEstado(Estado $estado) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO estado(nome_estado,uf,id_pais) VALUES(:nome_estado,:uf,:id_pais)");
            $insert->bindValue(":nome_estado", $estado->getNomeEstado());
            $insert->bindValue(":uf", $estado->getUf());
            $insert->bindValue(":id_pais", $estado->getIdPais());
            $insert->execute();
        }
        
        public function selecionarCategoria(Estado $estado)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_estado,uf FROM estado ORDER BY nome_estado ");
            $select->execute();
        }
        public function deletarCategoria(Estado $estado) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM estado WHERE nome_estado = '?'");
            $delete->execute();
        }
        public function updateCategoria(Estado $estado)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE estado SET 'nome_estado' = '?', 'uf' = '?' WHERE 'idestado'='2'");
            $update->execute();
            
        }

}
