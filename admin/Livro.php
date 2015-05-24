<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/LivroDao.php';
include_once '../entity/Livro.class.php';

if(isset($_GET["acao"]))
{
    $livro = new Livro();
    
    $livro->setNomeLivro($_POST["nome"]);
    $livro->setAutor($_POST["autor"]);
    $livro->setLancamento($_POST["lancamento"]);
    $livro->setDescricao($_POST["descricao"]);
    $livro->setImagemLivro($_POST["imagemLivro"]);
    $livro->setIdCategoria($_POST["idCategoria"]);
    
    $livroDao = new LivroDao();
    $livroDao->InserirLivro($livro);
     session_start();
        header("Location: MinhaConta.php");
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
<div id="header">
 	<?php include("../admin/header.php"); ?>
	</div>
<div class="container">
  <div class="jumbotron">
      <h2 style="text-align: center">Bem vindo! Aqui voce pode inserir seus Livros</br></br><small>
          Nesta area especifica voce pode adicionar seus livros favoritos!
          </small></h2>
  </div>
    <div class="container">
        <div class="jumbotron>"
        <label style="text-align: center">
            <h2 class="text-info" style="text-align:center">Formulario de Livros</h2>
            </label></br></br>
   
    <div class="container-fluid">
  <div class="row-fluid">
    <div class="span4">
        
        <form method="post" action="Livro.php?acao=ok" enctype="multipart/form-data">
            <legend for="nome">Livro: </legend>
	    <input type="text" name="nome" autofocus="autofocus" placeholder="Nome do Livro" class="input-large" > <br/><br/>  
            
            <legend for="nome">Autor: </legend>
	    <input type="text" name="autor" autofocus="autofocus" placeholder="Nome do autor" class="input-large" > <br/><br/>
            
            <legend for="nome">lancamento: </legend>
	    <input type="text" name="lancamento" autofocus="autofocus" placeholder="lancamento(aaaa-mm-dd)" maxlength="20" class="input-large" > <br/><br/>
            
            <legend for="nome">Descreva o livro: </legend>
            <textarea type="text" name="descricao" autofocus="autofocus" placeholder="Descreva o Livro..." size="280" row="40"></textarea><br/><br/>
            
            <legend for="nome">Capa do Livro</legend>
            <input style="text-align: center" type="file" name= "imagemLivro" autofocus="autofocus" placeholder="Imagem para o Livro" class="input-large" ><br/><br/>
            
            <legend for="nome">Em qual categoria deseja Coloca-lo? </legend>
           <fieldset><p class="lead">
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
            
	    <button type="submit">Gravar</button>    
	</form>
         </br></br>
  </div>
</div>

</body>
</html>
