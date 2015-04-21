<?php

class CidadeDao
{
    public function InserirCategoria(Cidade $cidade) 
    {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO cidade(nome_cidade) VALUES(:nome_cidade)");
            $insert->bindValue(":nome_cidade", $cidade->getNomeCidade());            
            $insert->execute();
        
    }
}

