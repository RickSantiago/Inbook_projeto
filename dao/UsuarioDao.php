<?php

class UsuarioDao
{
	public function InserirUsuario(Usuario $usuario)
	{
		$conexao = new PDOUtil();
		
		$insert = $conexao->getStance()->prepare("INSERT INTO usuario(nome_pessoa,cpf,email,nascimento,senha,id_estado) 
				VALUES(:nome_pessoa,:cpf,:email,:nascimento,:senha,:id_estado)");
		
		$insert->bindValue(":nome_pessoa", $usuario->getNomePessoa());
		$insert->bindValue(":cpf", $usuario->getCpf());
		$insert->bindValue(":email",$usuario->getEmail());
		$insert->bindValue(":nascimento", $usuario->getNascimento());
		$insert->bindValue(":senha", $usuario->getSenha());
		$insert->bindValue(":id_estado", $usuario->getIdEstado());
		$insert->execute();
	}
        public function selecionarUsuario(Usuario $usuario)
        {
            $conexao = new PDOUtil();
            $select = $conexao->getStance()->prepare("SELECT nome_usuario FROM usuario ORDER BY :nome_usuario ");
            $select->execute();
        }
        public function deletarUsuario($id) 
        {
            $conexao = new PDOUtil();
            $stmt = $conexao->getStance()->prepare("DELETE FROM usuario WHERE id_usuario = :id");
            $stmt->bindValue(":id", $id);
          //  $delete = $conexao->getStance()->prepare("");
            $stmt->execute();
        }
        public function updateUsuario(Usuario $usuario)
        {
            $conexao = new PDOUtil();
            $update = $conexao->getStance()->prepare("UPDATE usuario SET 'nome_usuario' = '?' WHERE 'idusuario'='?'");
            $update->execute();
            
        }
         public function listarUsuario(Usuario $usuario)
	{
		$conexao = new PDOUtil();
		
		$listar = $conexao->getStance()->prepare("SELECT nome_usuario FROM usuario");
		$listar->execute();
		while ($res = $listar->fetch())
    	{
        	echo $res["nome_usuario"]."<br/>";
    	}
        
        }
        public function loginUsuario($email, $senha)
        {
            $conexao = new PDOUtil();
            
            $login = $conexao->getStance()->prepare("SELECT * FROM usuario WHERE email = '".$email."' AND 
                   senha= '".$senha."' ");
            
            $login->execute();
            $resultado = $login->fetch();
            
            if($resultado['senha'] == $senha)
            {
                return true;
            }
            else
            {
               return false;
            }
//            echo $email;
            
            
            
        }

}

