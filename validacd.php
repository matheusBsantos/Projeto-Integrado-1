<?php
include("conex.php");
$CD = new Conexao;
$conecta = $CD->conectaBD();
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";

if ($conecta->query($sql) === TRUE) {
 echo "Novos registros criados com sucesso<br>";
 } else {
 echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
 }
 $conecta->close();
?>

