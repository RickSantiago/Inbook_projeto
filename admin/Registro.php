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
        $usuario->setIdEstado($_POST['id_estado']);
	
        
	$usuarioDao = new UsuarioDao();
	$usuarioDao->InserirUsuario($usuario);
        
        echo 'Cadastro efetuado!!!';
}
//if(isset($_GET["acao"]))
//{
//	$nomePessoa = $_POST["nomepessoa"];
//	$cpf = $_POST["cpf"];
//	$email = $_POST["email"];
//	$nascimento = $_POST["nascimento"];
//	$senha = $_POST["senha"];
//	$idEstado = $_POST["id_estado"];
//	
//        $usuario = new Usuario("",$nomePessoa,$cpf,$email,$nascimento,$senha,$idEstado);
//	$usuarioDao = new UsuarioDao();
//	$usuarioDao->InserirUsuario($usuario);
//}
?>


<!DOCTYPE html>
<html>
<head>
<title>Pagina de registo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../_registro/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../_registro/demo.css" media="all" />
</head>
<body>
    <div id="header">
 	<?php include("../admin/index.html"); ?>
	</div>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="../../testesDoSistema/TesteInbook.php">Atribua, Contribua e Desenvolva!</a>
                <span class="right">
                    <a href="LoginBootStrap.php">
                        <strong>Login?</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div>
			<header>
				<h1><span>Sua Pagina de registro do</span>InBook</h1>
            </header>       
      <div  class="form">
          <form  method="post" action="TesteRegistro.php?acao=ok"> 
    			<p class="contact"><label for="name">Nome: </label></p> 
                        <input  name="nomepessoa" placeholder="Digite seu nome" required="" tabindex="1" type="text" autofocus=""/> 
    			 
    			<p class="contact"><label for="email">Email: </label></p> 
                        <input  name="email" placeholder="exemplo@dominio.com" required="" type="email" autofocus=""/> 
                
                <p class="contact"><label for="cpf">Digite seu cpf: </label></p> 
                <input  name="cpf" placeholder="00000000000" required="" tabindex="2" type="text" autofocus=""/> 
                        
                <p class="contact"><label for="nascimento">Data Nascimento: </label></p> 
                <input  name="nascimento" placeholder="AAAA-MM-DD" required="" tabindex="2" type="text" autofocus=""/> 
    			 
                <p class="contact"><label for="password">Digite sua Senha: </label></p> 
                <input type="password"  name="senha" required="" placeholder="Digite sua senha!" autofocus=""/> 
                <p class="contact"><label for="repassword">Confirme sua senha: </label></p> 
                <input type="password"  name="repetir_senha" required="" placeholder="Repetir senha" autofocus="" title="Repetir Senha" oninput="validaSenha(this)"/> 

               <fieldset>
                 Estado: <select id="id_estado" name="id_estado" >           
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

            </select><br/><br/>                       
              </fieldset><br/><br/>
<!--  
          Sexo: <select class="select-style gender" name="sexo" required="" autofocus="">
            <option value="">Selecione</option>
            <option value="m">Homem</option>
            <option value="f">Mulher</option>
            <option value="o">Outros</option>
            </select><br><br>-->
            
           
           
            <input class="buttom" name="tudocerto" id="submit" tabindex="5" value="Tudo Certo!" type="submit"> </br></br>	 
             </form> 
</div>      
</div>
</body>
</html>

<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('senha').value)
        {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
}
</script>