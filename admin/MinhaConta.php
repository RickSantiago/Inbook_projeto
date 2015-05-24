<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../configs/PDOUtil.php';
include_once '../dao/LivroDao.php';
include_once '../entity/Livro.class.php';
        
        session_start();  
        if($_SESSION['email'] == null)
        {
             header("Location:LoginBootStrap.php?acao=erro");
        }
           
        $livroDao = new LivroDao();
        $livroDao->listarLivro();
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="header">
 	<?php  include("../admin/header.php");?>    
	</div>
        
    </body>
</html>
