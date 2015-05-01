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
        public function selecionarPagina(Pagina $pagina)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT titulo FROM pagina ORDER BY :titulo ");
            $select->execute();
        }
        public function deletarImagem(Pagina $pagina) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM pagina WHERE titulo = '?'");
            $delete->execute();
        }
        public function updateImagem(Pagina $pagina)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE pagina SET 'titulo' = '?' WHERE 'idpagina'='?'");
            $update->execute();
            
        }
}

