<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/UsuarioDao.php';
include_once '../entity/Usuario.php';

if(isset($_GET["acao"]))
{
$usuario = new Usuario();

        $usuario->setNomePessoa($_POST['nomepessoa']);
	$usuario->setCpf($_POST['cpf']);
	$usuario->setEmail($_POST['email']);
        $usuario->setNascimento($_POST['nascimento']);
        $usuario->setSenha($_POST['senha']);
        $usuario->setIdEstado($_POST['idEstado']);
	
        
	$usuarioDao = new UsuarioDao();
	$usuarioDao->InserirUsuario($usuario);
        
        echo 'Cadastro efetuado!!!';
}
if(isset($_GET["acao1"]))
        {
            
             $usuarioDao   = new UsuarioDao();
             $usuarioDao->loginUsuario();
        }
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>

  <title>Usuario</title>
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
            <label for="nome">Testar Registro de Usuario</label></br></br>
	   Nome: <input type="text" name="nomepessoa" autofocus="autofocus" placeholder="Digite seu nome"> <br/><br/>  
	   Cpf: <input type="text" name="cpf" autofocus="autofocus" placeholder="CPF: 00000000000" maxlength="11"> <br/><br/>
	   Nascimento: <input type="text" name="nascimento" autofocus="autofocus" placeholder="Nascimento(aaaa-mm-dd)" size="30"> <br/><br/>
	   Senha: <input type="password" name="senha" autofocus="autofocus" placeholder="Senha" size="20"><br/><br/>
           Email: <input type="email" name="email" autofocus="autofocus" placeholder="Email" size="40"><br/><br/>
            
            Estado: <select id="idEstado" name="idEstado" >           
            <option value="">Selecione...</option>
                  <option value="1">Acre</option>
                  <option value="3">Amazonas</option>
                  <option value="2" >Alagoas</option>
                  <option value="4">AmapÃ¡</option>
                  <option value="5">Bahia</option>
                  <option value="6">Ceara</option>
                  <option value="7">Distrito Federal</option>
                  <option value="8">Espirito Santo</option>
                  <option value="9">Goias</option>
                  <option value="10">MaranhÃ£o</option>
                  <option value="13">Mato Grosso</option>
                  <option value="12" >Mato Grosso do sul</option>
                  <option value="11">Minas Gerais</option>
                  <option value="14" >Para</option>
                  <option value="15">Paraiba</option>
                  <option value="18" >ParanÃ¡</option>
                  <option value="16">Pernambuco</option>
                  <option value="17">Piaui</option>
                  <option value="19">Rio de Janeiro</option>
                  <option value="20">Rio Grande do Norte</option>
                  <option value="23">Rio grande do Sul</option>
                  <option value="21">Rondonia</option>
                  <option value="22">Roraima</option>
                  <option value="24">Santa Catarina</option>
                  <option value="26" >Sao Paulo</option
                  <option value="25">Sergipe</option>
                  <option value="27">Tocantins</option>
            </select></br></br>
            
<!--            <select name="Estado"required="" id="id_estado" name="id_estado">
            <option value="select">Sexo...</option>
            <option value="m">Homem</option>
            <option value="f">Mulher</option>
            <option value="others">Indeciso</option>
            </select><br><br>-->
	    
<!--            <input type="number" name= "cidadeIdCidade" autofocus="autofocus" placeholder="id Cidade"><br/><br/>-->
<!-- 	    <label name ="descricao">Descricao -->
<!-- 	    <textarea rows="5" cols="120" name="descricao"></textarea></label> <br/><br/>          -->
	   
	    <button type="submit">Gravar</button>    
	</form>
        
        <-------------------------------------------------------->
        <form method="post" action="TesteUsuario.php?acao1=ok">
            <label for="nomepessoa">Listar</label></br></br>
           
	    <button type="submit">Listar</button>    
	</form>
  </div>
</div>

</body>
</html>
