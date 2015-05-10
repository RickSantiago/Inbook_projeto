<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/PaginaDao.php';
include_once '../entity/Pagina.php';


if(isset($_GET["acao"]))
{
    $pagina = new Pagina();
    $pagina->setTitulo($_POST["titulo"]);
    $pagina->setCategoriaIdCatedoria($_POST["idcategoria"]);
  
  
    $paginaDao = new PaginaDao();
    $paginaDao->InserirPagina($pagina);
   
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

<div class="container">
  <div class="jumbotron">
    <h1>Inserir Pagina</h1>
    <p>Testanto Pagina!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TestePagina.php?acao=ok">
            <label for="nome">Teste Pagina</label></br></br>
            Pagina: <input type="text" name="titulo" placeholder="Qual titulo?"> <br/><br/> 
            Categoria: <input type="number" name="idcategoria" placeholder="Categoria"> <br/><br/>          
	    <button type="submit">Gravar</button>   
            
            </br></br>
        <a href="../testesDoSistema/TesteGeral.php">
        <input type="submit" name="testeGeral" title="Geral" id="testeGeral" autofocus="" value="Teste Geral"></a></br></br>
	</form>
  </div>
</div>

</body>
</html>
