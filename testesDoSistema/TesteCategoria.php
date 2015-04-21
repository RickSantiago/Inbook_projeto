<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/CategoriaDao.php';
include_once '../entity/Categoria.php';

if(isset($_GET["acao"]))
{
   $nomeCategoria = $_POST["nome"];
   $categoria = new Categoria($nomeCategoria,"");
   $categoriaDao = new CategoriaDao();
   $categoriaDao->InserirCategoria($categoria);
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
    <h1>Meu primeiro Bootstrap</h1>
    <p>Testando Categoria</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TesteCategoria.php?acao=ok">
	    <label for="nome">Teste Sistema</label>
	    <input type="text" name="nome"> <br/><br/>           
	    <button type="submit">Gravar</button>    
	</form>
  </div>
</div>

</body>
</html>
