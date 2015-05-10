<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.0.js" type="text/javascript"> </script>

<script type="text/javascript">
	$(document).ready(function(){
		//Quando 'btnEntrar' for clicado
		$("#btnEntrar").click(function(){
			//Envia por POST para a página login.php: usuario = valor da textbox usuario
			//e senha = valor da textbox senha (pegando valores pelo ID)
			var envio = $.post("login.php", { 
			usuario: $("#usuario").val(), 
			senha: $("#senha").val() 
			})
			//Se achou a página, exiba o resultado no elemento com ID resultado
			envio.done(function(data) {
				$("#resultado").html(data);
			})
			//Se envio falhar
			envio.fail(function() { alert("Erro na requisição"); })	
		});
	});
</script>
</head>

<body>
	<div class="box">
    	<p class="txt">Usuário:</p>
        <input type="text" id="usuario" class="txtbox" />
        <p class="txt">Senha:</p>
        <input type="password" id="senha" class="txtbox" />
        <input type="button" id="btnEntrar" value="Entrar" class="button" />
    </div>
	
    
    <div id="resultado">
   
    </div>
</body>
</html>