<?php
 session_start();
 
 $email=$_POST['email'];
 $senha=$_POST['senha'];
 
$nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";

$conexao= mysqli_connect($nome_servidor,$login,$password,$database);
if($conexao->connect_error ===TRUE)
{ die("Deu erro na conexão".$conexao->connect_error);}

$tenta_achar = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'" ;
    $resultado = $tenta_conectar->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location:logado.php');
    }
    else{
        session_unset();
        session_destroy();
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'pagina_login.php';
            </script>";
      }
?>


