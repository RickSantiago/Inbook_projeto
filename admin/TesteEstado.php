<?php
include_once '../entity/Estado.php';
include_once '../dao/Estadodao.php';
include_once '../configs/PDOUtil.php';
	
if(isset($_GET["acao"])) 
    {
                $estado = new Estado();
	 	$estado->setNomeEstado($_POST["nome_estado"]);
                $estado->setUf($_POST["uf"]);
                $estado->setIdPais($_POST["id_pais"]);
		
		$estadoDao = new Estadodao();
		$estadoDao->InserirEstado($estado);
    }

 if(isset($_GET["acao2"]))
    {
                 $estadoDao = new EstadoDao();
                 $estadoDao->listarEstado();
    }
?>
	
	
	
	<!DOCTYPE html>

        <html lang="pt-br">
<head>
  <title>Estado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <pre>
<div class="container">
  <div class="jumbotron">
    <h1>Inserir Estado</h1>
    <p>Testanto Estado!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
      <form method="post" action="TesteEstado.php?acao=ok">
	    <label for="nome">Inserir Estado</label>
            Estado: <input type="text" name="nome_estado" id="nome_estado" placeholder="Estado"> <br/><br/> 
            Uf: <input type="text" name ="uf" id="uf" placeholder="UF"><br/><br/>
            
             Pais: <select id="id_pais" name="id_pais" >           
            <option value="">Selecione...</option>
                  <option value="1">Brasil</option>
             </select>
	    <button type="submit">Inserir</button>    
	</form>
        <----------------------------------------------------------------------------->
        <form method="post" action="TesteEstado.php?acao2=ok">
            <label for="listar">Mostrar Estado</label></br></br>
         	    <button type="submit">Listar</button>    
	</form>
 <----------------------------------------------------------------------------->
  </br></br>
    <a href="../testesDoSistema/TesteGeral.php">
        <input type="submit" name="testeGeral" title="Geral" id="testePais" autofocus="" value="Teste Geral"></a></br></br>
  </div>
</div>
</pre>
</body>
</html>


