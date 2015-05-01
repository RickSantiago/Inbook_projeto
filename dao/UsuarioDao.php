<?php
class UsuarioDao
{
	public function InserirUsuario(Usuario $usuario)
	{
		$conexao = new PDOUtil();
		
		$insert = $conexao->getStance()->prepare("INSERT INTO usuario(nome_pessoa,cpf,email,nascimento,senha,cidade_id_cidade) 
				VALUES(:nome_pessoa,:cpf,:email,:nascimento,:senha,:cidade_id_cidade)");
		
		$insert->bindValue(":nome_pessoa", $usuario->getNomePessoa());
		$insert->bindValue(":cpf", $usuario->getCpf());
		$insert->bindValue(":email",$usuario->getEmail());
		$insert->bindValue(":nascimento", $usuario->getNascimento());
		$insert->bindValue(":senha", $usuario->getSenha());
		$insert->bindValue(":cidade_id_cidade", $usuario->getCidadeIdCidade());
                
		
		$insert->execute();
	}
        public function selecionarPagina(Usuario $usuario)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_usuario FROM usuario ORDER BY :nome_usuario ");
            $select->execute();
        }
        public function deletarImagem(Usuario $usuario) 
        {
            $conexao = new PDOUtil();
            $delete = $conexao->getStance()->prepare("DELETE FROM usuario WHERE nome_usuario = '?'");
            $delete->execute();
        }
        public function updateImagem(Usuario $usuario)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE usuario SET 'nome_usuario' = '?' WHERE 'idusuario'='?'");
            $update->execute();
            
        }
}