<?php
include_once '../entity/Estado.php';
include_once '../dao/Estadodao.php';
include_once '../configs/PDOUtil.php';
	
if(isset($_GET["acao"])) 
    {
	 	
	$nomeEstado = $_POST["nome"];
         $uf = $_POST["uf"];
	$estado = new Estado("", $nomeEstado, $uf, "");
	$estadodao = new Estadodao();
	$estadodao->inserirCategoria($estado);
        
        
        
    }
//    
//    $result = $estadodao->selecionarCategoria($estado);
//    if (!$result) 
//    {
//    echo 'Nao foi possivel executar a consulta: ' . mysql_error();
//    exit;
//    }
//$row = $result;
//
//echo $row[0]; // 42
//echo $row[1]; // o valor do email
    
	
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
    <h1>Inserir Estado</h1>
    <p>Testanto Estado!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
      <form method="post" action="TesteEstado.php?acao=ok">
	    <label for="nome">Categoria Nome</label>
	    <input type="text" name="nome"> <br/><br/> 
            <input type="text" name ="uf"><br/><br/>
	    <button type="submit">Gravar</button>    
	</form>
  </div>
</div>

</body>
</html>


