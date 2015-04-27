<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/UsuarioDao.php';
include_once '../entity/Usuario.php';

if(isset($_GET["acao"]))
{
	$nomePessoa = $_POST["nomepessoa"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$nascimento = $_POST["nascimento"];
	$senha = $_POST["senha"];
	$cidadeIdCidade = $_POST["cidadeIdCidade"];
	$usuario = new Usuario("",$nomePessoa,$cpf,$email,$nascimento,$senha,$cidadeIdCidade);
	$usuarioDao = new UsuarioDao();
	$usuarioDao->InserirUsuario($usuario);
}
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>

  <title>Bootstrap Exemplo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Inserir Usuario</h1>
    <p>Testanto Usuarios!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TesteUsuario.php?acao=ok">
	    <label for="nome">Teste Sistema</label>
	    <input type="text" name="nomepessoa" autofocus="autofocus" placeholder="Digite seu nome"> <br/><br/>  
	    <input type="text" name="cpf" autofocus="autofocus" placeholder="CPF: 00000000000" maxlength="11"> <br/><br/>
	    <input type="text" name="nascimento" autofocus="autofocus" placeholder="Nascimento(aaaa-mm-dd)" size="30"> <br/><br/>
	    <input type="password" name="senha" autofocus="autofocus" placeholder="Senha" size="20"><br/><br/>
	    <input type="text" name="email" autofocus="autofocus" placeholder="Email" size="40"><br/><br/>
	    <input type="number" name= "cidadeIdCidade" autofocus="autofocus" placeholder="id Cidade"><br/><br/>
<!-- 	    <label name ="descricao">Descricao -->
<!-- 	    <textarea rows="5" cols="120" name="descricao"></textarea></label> <br/><br/>          -->
	   
	    <button type="submit">Gravar</button>    
	</form>
  </div>
</div>

</body>
</html>
