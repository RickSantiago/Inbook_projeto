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
}