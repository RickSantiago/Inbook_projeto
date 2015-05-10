<?php
class ImagemDao 
{
	
        public function InserirImagem(Imagem $imagem) 
        {
            $conexao = new PDOUtil();
            $insert = $conexao->getStance()->prepare("INSERT INTO imagem(imagem) VALUES(:imagem)");
            $insert->bindValue(":imagem", $imagem->getImagem());          
            $insert->execute();
        }
        public function selecionarImagem(Imagem $imagem)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_imagem FROM imagem ORDER BY :nome_imagem ");
            $select->execute();
        }
        public function deletarImagem(Imagem $imagem) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM imagem WHERE nome_imagem = '?'");
            $delete->execute();
        }
        public function updateImagem(Imagem $imagem)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE imagem SET 'nome_imagem' = '?' WHERE 'idimagem'='?'");
            $update->execute();
            
        }
        public function listarImagem()
	{
		$conexao = new PDOUtil();
		
		$listar = $conexao->getStance()->prepare("SELECT imagem FROM imagem");
		$listar->execute();
		while ($res = $listar->fetch())
    	{
        	echo $res["imagem"]."<br/>";
    	}
        }
        

}

