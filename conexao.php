<?php
$nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";
$conexao = new mysqli($nome_servidor, $login, $password, $database);
if ($conexao->connect_error) {
 die("Conexão falhou: " . $conexao->connect_error."<br>");
 }
 echo "Conexão realizada com sucesso";
 $conexao->close();


?>