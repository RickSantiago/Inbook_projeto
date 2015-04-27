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
        

}

