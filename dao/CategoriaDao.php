<?php
class CategoriaDao
{
     public function InserirCategoria(Categoria $categoria) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO categoria(nome_categoria) VALUES(:nome_categoria)");
            $insert->bindValue(":nome_categoria", $categoria->getNomeCategoria());          
            $insert->execute();
        }
}

