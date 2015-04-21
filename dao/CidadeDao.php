<?php

class CidadeDao
{
    public function InserirCategoria(Cidade $cidade) 
    {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO cidade(nomecidade) VALUES(:nomecidade)");
            $insert->bindValue(":nomecidade", $cidade->getNomecidade());            
            $insert->execute();
        
    }
}

