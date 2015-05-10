
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bem vindo</title>
</head>
<?php
	//Inicia sessão
	session_start();
	
	//Se não existir sessão usuário, redireciona para index
	if(!isset($_SESSION['usuario']))
	header("location: LoginBootStrap.php");	
?>

<body>
<p>Bem vindo 
    <strong>
                 <?php echo $_SESSION['usuario'] ?>
    </strong>
</p> 
</body>
</html>