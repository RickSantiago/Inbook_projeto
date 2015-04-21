<?php
class ImagemDao 
{
	
        public function InserirCategoria(Imagem $imagem) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO imagem(imagem) VALUES(:imagem)");
            $insert->bindValue(":imagem", $imagem->getImagem());          
            $insert->execute();
        }
        

}

