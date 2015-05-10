<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/LivroDao.php';
include_once '../entity/Livro.php';

if(isset($_GET["acao"]))
{
    $livro = new Livro();
    
    $livro->setNomeLivro($_POST["nome"]);
    $livro->setAutor($_POST["autor"]);
    $livro->setLancamento($_POST["lancamento"]);
    $livro->setDescricao($_POST["descricao"]);
    $livro->setIdPagina($_POST["idpagina"]);
    
    $livroDao = new LivroDao();
    $livroDao->InserirLivro($livro);
}
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>

  <title>Livro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Inserir Livro</h1>
    <p>Testanto Livro!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="TesteLivro.php?acao=ok">
	    <label for="nome">Teste Sistema</label>
	    <input type="text" name="nome" autofocus="autofocus" placeholder="Nome do Livro"> <br/><br/>  
	    <input type="text" name="autor" autofocus="autofocus" placeholder="Nome do autor"> <br/><br/>
	    <input type="text" name="lancamento" autofocus="autofocus" placeholder="lancamento(aaaa-mm-dd)" maxlength="10" size="20"> <br/><br/>
	    <input type="text" name="descricao" autofocus="autofocus" placeholder="Descri��o" size="80"><br/><br/>
            <input type="number" name= "idpagina" autofocus="autofocus" placeholder="idPagina"><br/><br/>
<!-- 	    <label name ="descricao">Descricao -->
<!-- 	    <textarea rows="5" cols="120" name="descricao"></textarea></label> <br/><br/>          -->
	   
	    <button type="submit">Gravar</button>    
	</form>
         </br></br>
    <a href="../testesDoSistema/TesteGeral.php">
        <input type="submit" name="testeGeral" title="Geral" id="testePais" autofocus="" value="Teste Geral"></a></br></br>
  </div>
</div>

</body>
</html>
