<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/PaginaDao.php';
include_once '../entity/Pagina.class.php';

session_start();
    
    if($_SESSION['email'] == null)
    {
        header("Location:LoginBootStrap.php?acao=erro");
    }

if(isset($_GET["acao"]))
{
    $pagina = new Pagina();
    $pagina->setTitulo($_POST["titulo"]);
    $pagina->setIdCategoria($_POST["idCategoria"]);

    $paginaDao = new PaginaDao();
    $paginaDao->InserirPagina($pagina);

}
if(isset($_GET["acao1"]))
{
    $paginaDao = new PaginaDao();
    $paginaDao->listarPagina();
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Pagina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
   
        <div id="header">
 	<?php include("../admin/header.php"); ?>
	</div>
<div class="container">
  <div class="jumbotron">
      <h2 style="text-align: center">Bem vindo! Aqui voce pode inserir sua Pagina</br></br><small>
          Aqui voce poderá inserir uma area especifica, onde tera suas categorias favoritas.
          </small></h2>
  </div>
    <div class="container">
        <div class="jumbotron>"
        <label style="text-align: center">
            <h2 class="text-info" style="text-align:center">Escolha um nome para sua Pagina...</h2>
            </label></br></br>
            
    <div class="container-fluid">
  <div class="row-fluid">
    <div class="span4">
       <form method="post" action="Pagina.php?acao=ok" style="text-align: left">
            <p class="lead"><label>Pagina: </label></br><input class="input-large" type="text" name="titulo" placeholder="Nome para Pagina" required="" autofocus="" ></p> 
            </br></br> <fieldset><p class="lead">
                    <label>Categoria:</label></br>
            <select id="idCategoria" name="idCategoria" required="" autofocus="">           
                  <option value="">Selecione...</option>
                  <option value="1">Drama</option>
                  <option value="2">Terror</option>
                  <option value="3">Comedia</option>
                  <option value="4">Nacional</option>
                  <option value="5">Ficção</option>
                  <option value="6">+18</option>
                  <option value="7">Romance</option>
                  <option value="8">Aventura</option>
                  <option value="9">Infantil</option>
                  <option value="10">Contos</option>
                  <option value="11">Poemas e Poesias</option>
                  <option value="12">Literatura Cordel</option> 
                  <option value="13">Ação</option> 
                  <option value="14">Outros</option> 
            </select><p>
             </fieldset></br>
             <p><button type="button" class="btn btn-large btn-primary">Gravar</button> </p>
               </form>
    </div>
    <div class="span10">
        <p style="text-align: center">
                   <a href="Livro.php"><button id="livros" type="submit" class="btn btn-success" onfocus="">
                       Ja Possuo minha Pagina!
</button>                   
</p></div></div>
</br></br>
    </div>
  </div>
</div>
    
    
       
              

<!--	</form>
        <form method="post" action="TestePagina.php?acao1=ok">
            <label for="listar">Mostrar Itens</label></br></br>
         	    <button type="submit">Listar</button>      
	</form>-->




</body>
</html>
