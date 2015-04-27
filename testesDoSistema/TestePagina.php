<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/PaginaDao.php';
include_once '../entity/Pagina.php';


if(isset($_GET["acao"]))
{
  $titulo = $_POST["titulo"];
  $categoriaIdCategoria = $_POST["idcategoria"];
  $pagina = new Pagina("",$titulo, $categoriaIdCategoria);
  $paginaDao = new PaginaDao();
  $paginaDao->InserirPagina($pagina);
   
}
else 
{
	echo 'Erro favor verificar';
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
    <h1>Inserir Pagina</h1>
    <p>Testanto Pagina!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TestePagina.php?acao=ok">
	    <label for="nome">Teste Sistema</label>
	    <input type="text" name="titulo"> <br/><br/> 
	     <input type="number" name="idcategoria"> <br/><br/>          
	    <button type="submit">Gravar</button>    
	</form>
  </div>
</div>

</body>
</html>
