<?php
//Conexao entre arquivos
include_once("conexao.php");

//Variaveis html para sql
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

//Inserir dados html em sql
$sql = "insert into loginsect (Nome, Email, CPF) values ('$nome', '$email', '$cpf')";
//criar conexao com sql
$salvar = mysqli_query($conexao, $sql);

//Verificar se o numero de linhas foi afetado
$linhas = mysqli_affected_rows($conexao);


//Fechar conexão
mysqli_close($conexao);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--Estilo da pagina-->
<link rel="stylesheet" href="style.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Barra de navegação-->
    <nav>
      <ul class="menu">
        <!--Tela de login-->
        <a href="tela.php">Login</a>
        <!--Tela de consulta-->
        <a href="consultas.php">Consulta</a>
      </ul>
    </nav>
    <h2>Cadastro concluido</h2>
  </body>
</html>
