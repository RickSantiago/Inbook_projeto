<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/CidadeDao.php';
include_once '../entity/Cidade.php';

if(isset($_GET["acao"]))
        {
              $cidade     = new Cidade();
    
              $cidade->setNomeCidade($_POST["nomecidade"]);
              $cidade->setIdEstado($_POST["id_estado"]);
 
              $cidadeDao  = new CidadeDao();    
              $cidadeDao->InserirCidade($cidade);
        }
if(isset($_GET["acao1"]))
        {
             $cidade      = new Cidade();
    
             $cidade->setNomeCidade($_POST["nomecidade"]);
    
             $cidadeDao   = new CidadeDao();
             $cidadeDao->deletarCidade($cidade);
        }
if(isset($_GET["acao2"]))
        {
             $cidadeDao   = new CidadeDao();
             $cidadeDao->listarCidade();
        }
?>
<!DOCTYPE html>

        <html lang="pt-br">
<head>
  <title>Cidade</title>
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
    <h1>Inserir Cidade</h1>
    <p>Testanto Cidade!</p> 
  </div>
   
  <div class="row">
    <div class="col-sm-4">
        <form method="post" action="Cidade.php?acao=ok">
            <label for="nomecidade">Inserir Cidade</label></br></br>
            Cidade:  <input type="text" name="nomecidade" placeholder="Cidade"> <br/><br/>  
            Estado:<select id="id_estado" name="id_estado" >           
            <option value="">Selecione...</option>
                  <option value="1">Acre</option>
                  <option value="3">Amazonas</option>
                  <option value="2" >Alagoas</option>
                  <option value="4">Amapá</option>
                  <option value="5">Bahia</option>
                  <option value="6">Ceara</option>
                  <option value="7">Distrito Federal</option>
                  <option value="8">Espirito Santo</option>
                  <option value="9">Goias</option>
                  <option value="10">Maranhão</option>
                  <option value="13">Mato Grosso</option>
                  <option value="12" >Mato Grosso do sul</option>
                  <option value="11">Minas Gerais</option>
                  <option value="14" >Para</option>
                  <option value="15">Paraiba</option>
                  <option value="18" >Paraná</option>
                  <option value="16">Pernambuco</option>
                  <option value="17">Piaui</option>
                  <option value="19">Rio de Janeiro</option>
                  <option value="20">Rio Grande do Norte</option>
                  <option value="23">Rio grande do Sul</option>
                  <option value="21">Rondonia</option>
                  <option value="22">Roraima</option>
                  <option value="24">Santa Catarina</option>
                  <option value="26" >Sao Paulo</option>
                  <option value="25">Sergipe</option>
                  <option value="27">Tocantins</option>

            </select><br/><br/>  
	    <button type="submit">Inserir</button>    
	</form>
 <----------------------------------------------------------------------------->       
        <form method="post" action="Cidade.php?acao1=ok">
            <label for="nomecidade">Deletar Cidade</label></br></br>
            <input type="text" name="nomecidade" placeholder="Cidade"> <br/><br/>  
            
	    <button type="submit">Deletar</button>    
	</form>
        
 <----------------------------------------------------------------------------->
  <form method="post" action="Cidade.php?acao2=ok">
            <label for="listar">Mostrar Cidade</label></br></br>
         	    <button type="submit">Listar</button>    
	</form>
 <----------------------------------------------------------------------------->
  </br></br>
    <a href="../testesDoSistema/Geral.php">
        <input type="submit" name="testeGeral" title="Geral" id="testePais" autofocus="" value="Teste Geral"></a></br></br>
  </div>
</div>
    </pre>
</body>
</html>
