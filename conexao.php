<?php

//Variaveis XAMPP
$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastrosect";
$conexao = mysqli_connect($hostname, $user, $password, $database);

//Verificar se a conexão ocorreu
if (!$conexao){
  echo "Conexao com banco de dados falhou";
}

 ?>
