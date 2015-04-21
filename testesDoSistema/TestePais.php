<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/PaisDao.php';
include_once '../entity/Pais.php';

if(isset($_GET["acao"]))
{
   $nomePais = $_POST["nome"];
   $pais = new Pais($nomePais,"");
   $paisDao = new PaisDao();
   $paisDao->InserirCategoria($pais);
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
    <p>Testanto Pais!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TestePais.php?acao=ok">
	    <label for="nome">Teste Sistema</label>
	    <input type="text" name="nome"> <br/><br/>           
	    <button type="submit">Gravar</button>    
	</form>
  </div>
</div>

</body>
</html>
