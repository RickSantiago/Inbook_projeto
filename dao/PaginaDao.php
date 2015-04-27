<?php

class PaginaDao
{
    
        public function InserirPagina(Pagina $pagina) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO pagina(titulo, categoria_id_categoria) VALUES(:titulo, :categoria_id_categoria)");
            $insert->bindValue(":titulo", $pagina->getTitulo());
            $insert->bindValue(":categoria_id_categoria", $pagina->getCategoriaIdCategoria());
            $insert->execute();
        }
}

