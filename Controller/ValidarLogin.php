
<?php
session_start();
include_once '../configs/PDOUtil.php';
include_once '../dao/UsuarioDao.php';
	//Captura usuário e senha passados pela função do Jquery por POST
            $email = $_POST["email"];
            $senha = $_POST["senha"];        
            $login = new UsuarioDao();
            $res = $login->loginUsuario($email,$senha);                    
             if($res)
                {
                        //session_start();
			$_SESSION['email'] = $email;
                        header("Location:../admin/Index.php");
                    
		}
                elseif($_SESSION['email'] == null) 
                {
                         header("Location:../admin/LoginBootStrap.php?acao=erro");
                }
                else
                {
                     header("Location:../admin/LoginBootStrap.php?acao=erro");
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
	

    ?>    



