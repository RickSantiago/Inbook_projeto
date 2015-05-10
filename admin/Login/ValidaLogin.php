<?php
session_start();
$login = $_POST["login"];
$senha = $_POST["senha"];

if ($_POST["login"] == "fredson" 
        && $_POST["senha"] == "123")
{
    $_SESSION["login"] = $login;
    header("Location: ../testeDoSistema/TesteInbook");
}
else
{
    header("Location: index.php?erro=1");
}
?>