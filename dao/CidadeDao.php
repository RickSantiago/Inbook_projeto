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
}

