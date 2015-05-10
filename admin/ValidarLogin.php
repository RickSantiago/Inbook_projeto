
<?php
include_once './LoginBootStrap.php';
require_once './LoginBootStrap.php';
include_once '../configs/PDOUtil.php';
include_once '../dao/UsuarioDao.php';
include_once '../entity/Usuario.php';
	
	//Captura usuário e senha passados pela função do Jquery por POST
	
        
        if(isset($_GET["acao"]))
        {
            $usuario = new Usuario();
            
            $usuario->getEmail($_POST['email']);
            $usuario->getSenha($_POST['senha']);
        
            $usuarioDao   = new UsuarioDao();
            $usuarioDao->loginUsuario();
             
             if(senha == $senha && email == $email)
                {
			$_SESSION['email'] = $email;
			echo "<script> document.location = 'TesteInbook.php' </script>";
		}
        }
	
	//Chama função logar enviando usuário e senha
//	logar($email,$senha);	
//	
//	function logar($email, $senha)
//        {
//		
//		$logar = "SELECT email,senha FROM usuario WHERE email = $email AND senha = $senha ";
//
//		//Usuário padrão pra teste pois ainda não esta implementado no inbook
////		$emailAdm = 'admin@teste.com';
////		$senhaAdm = '12345';
////		
//		//Se senha e usuário eviado for igual as definidas, cria sessão usuario com o
//		//o nome do usuário e chama função javascript que envia para página principal.php
//		if(senha == $senha && email == $email)
//                {
////			$_SESSION['email'] = $email;
//			echo "<script> document.location = 'TesteInbook.php' </script>";
//		}
	

        



