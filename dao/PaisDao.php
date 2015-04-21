<?php
class PaisDao 
{
	
        public function InserirCategoria(Pais $pais) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO pais(nome_pais) VALUES(:nome_pais)");
            $insert->bindValue(":nome_pais", $pais->getNome_pais());          
            $insert->execute();
        }
        

}

