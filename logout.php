<?php 
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["nome"]);
unset($_SESSION["tipo"]);
header("Location:index.php");
exit;
?>