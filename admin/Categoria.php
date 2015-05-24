<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/CategoriaDao.php';
include_once '../entity/Categoria.class.php';

if(isset($_GET["acao"]))
{
   $categoria = new Categoria();
   $categoria->setNomeCategoria($_POST["nome_categoria"]);
   $categoriaDao = new CategoriaDao();
   $categoriaDao->InserirCategoria($categoria);
}
?>
<?php include("../admin/index.php"); ?>
<!DOCTYPE html>

        <html lang="pt-br">
<head>
  <title>Categoria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
 <div id="header">
	</div>
<div class="container">
  <div class="jumbotron">
    <h1>Categoria do Livro</h1>
    <p>Testando Categoria</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TesteCategoria.php?acao=ok">
	    <label for="nome_categoria">Teste Categoria</label>
	    <input type="text" name="nome_categoria"> <br/><br/>           
	    <button type="submit">Gravar</button>    
            
	</form>
         </br></br>
    <a href="../testesDoSistema/TesteGeral.php">
        <input type="submit" name="testeGeral" title="Geral" id="testePais" autofocus="" value="Teste Geral"></a></br></br>
  </div>
</div>

