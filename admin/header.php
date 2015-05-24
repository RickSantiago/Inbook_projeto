<?php
//    session_start();
//    
//    if($_SESSION['email'] == null)
//    {
//        header("Location:LoginBootStrap.php?acao=erro");
//    }

?>
<html>
    <head>
        <title>Inbook</title>
        <meta charset="utf-8">
        <link href="../admin/css/bootstrap.css" rel="stylesheet">
        <!-- Chamadas JS -->
        <script src="../admin/js/jquery.min.js"></script>
        <script src="../admin/js/bootstrap.min.js"></script>        
    </head>
    <body>
<!--        <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">INBOOK</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                     <li class="active"><a href="index.php">Home</a></li>
            <li><a href="LoginBootStrap.php">Login</a></li> 
            <li><a href="TestePagina.php">Minha Conta</a></li> 
            <li><a href="Registro.php">Registre-se</a></li> 
            <li><a href="https://www.facebook.com/">Redes</a></li> 
            <li><a href="#about">Sobre nós</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Redes <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">...</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Forum</li>
                <li><a href="#">Forum Online</a></li>
                <li><a href="#">Forum Offline</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pesquise Livros">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>-->
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Inbook</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="Index.php">Home</a></li>
              <li><a href="LoginBootStrap.php">Login</a></li> 
            <li><a href="MinhaConta.php">Minha Conta</a></li> 
            <li><a href="Registro.php">Registre-se</a></li> 
            <li><a href="about">Sobre nós</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Redes<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">...</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Forum</li>
                <li><a href="#">Forum Online</a></li>
                <li><a href="#">Forum Offline</a></li>
              </ul>
            </li>
          </ul>
            <form class="navbar-form navbar-left" role="search" id="pesquisalivro">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pesquise Livros">
                      </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="LoginBootStrap.php"><input type="button" class="btn btn-sucess" value="Logoff"></a>
                    </form>
        </div>
      </div>
    </nav></br></br></br>
<div class="conteudo">
            
        </div>
   <!--
    -->
    <!-- /container -->
        
<!--        <div class="page-header">
            <h1>
                InBook <small> Atribua, Contribua e Desenvolva.</small>
            </h1>
            
        </div>-->
        
<!--         <nav role="navigation" class="navbar navbar-default">       -->
<!--             <div class="navbar-header"> -->
<!--                 <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">                     -->
<!--                     <span class="sr-only">Navegação Responsiva</span> -->
<!--                     <span class="icon-bar"></span> -->
<!--                     <span class="icon-bar"></span> -->
<!--                     <span class="icon-bar"></span>                 -->
<!--                 </button>                 -->
<!--                 <a href="#" class="navbar-brand">Inbook</a>                 -->
<!--             </div> -->
            
<!--             <div id="navbarCollapse" class="collapse navbar-collapse"> -->
<!--                 <ul class="nav navbar-nav" > -->
<!--                     <li class="active"><a href="index.php">Home</a></li> -->
<!--                     <li><a href="LoginBootStrap.php">Login</a></li> -->
<!--                     <li><a href="TestePagina.php">Minha Conta</a></li> -->
<!--                     <li><a href="Registro.php">Registre-se</a></li> -->
<!--                     <li><a href="https://www.facebook.com/">Redes</a></li> -->
<!--                     <li class="dropdown-submenu"> -->
<!--                         <a tabindex="-1" href="#">Categoria</a> -->
<!--                             <ul class="dropdown-menu"> -->
<!--                                 <li><a>Romance</a></li> -->
<!--                                 <li><a>Romance</a></li>  -->
<!--                                 <li><a>Romance</a></li>  -->
<!--                             </ul> -->
<!--   </li> -->
<!--                 </ul>   -->
                
<!--             </div> -->
<!--         </nav> -->


<!--<div class="container">
        
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Bootstrap no TekZoom.com.br</h1>
            </div>
        </div>
        
        <section id="sliderhome">
            <div id="meuSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#meuSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#meuSlider" data-slide-to="1"></li>
                    <li data-target="#meuSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="img/slid1.png" alt="Slider 1" /></div>
                    <div class="item"><img src="img/slid2.png" alt ="Slide 2" /></div>
                    <div class="item"><img src="img/slid3.png" alt="Slide 3" /></div>
                </div>
                <a class="left carousel-control" href="#meuSlider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </section>
        

    </div>-->
<!--        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">
                Pagina Inicial
            </li>
        </ol>-->

<!--<div class="jumbotron">
    <div class="container">
        <h2>
            Inbook
        </h2>
        <p>
            Vamos começar a criar o site
        <a href="#" class="btn btn-primary btn-lg" role="button">
            Saiba Mais...
        </a>
        </p>
    </div>
</div>-->


<!--<div class="container">
    <ul class="nav nav-pills">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="TesteCategoria.php">Categoria</a></li>
        <li><a href="LoginBootStrap.php">Login</a></li>
        <li ><a href="Registro.php">Registre-se</a></li>
    </ul>
    </div>-->
<!--http://localhost/Inbook_Rede_Social/Inbook_projeto/admin/Principal.php-->
    </body>
</html>