<?php
//Conexão entre documentos
include_once("conexao.php");

//Variaveis de seleção sql
$sql = "select * from loginsect";
$consulta = mysqli_query($conexao, $sql);
$registro = mysqli_num_rows($consulta);

 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
<!--Estilo da pagina-->
<link rel="stylesheet" href="style.css">
  <head>
    <!--Informações da pagina-->
    <meta charset="utf-8">
    <meta name="Teste" content="Projeto de teste Sect">
    <!--Nome da pagina-->
    <title>Teste Sect</title>
  </head>
  <body>
    <!--Fechar formulario em um container-->
    <div class="container">
      <!--Barra de navegação-->
      <nav>
        <ul class="menu">
          <!--Tela de login-->
          <a href="tela.php">Login</a>
          <!--Tela de consulta-->
          <a href="consultas.php">Consulta</a>
        </ul>
      </nav>
      <!--Salvar dados do site em um arquivo sql-->
      <form method="post" action="cadastro.php">

        <!--Titulo do formulario-->
        <fieldset style="background-color: rgb(122, 91, 219)">
          <label style="color: white">Confirmação de cadastro</label>
        </fieldset>
        <!--Corpo do formulario-->
        <fieldset>

          <?php

          //Numero de registros
          print "$registro registros encontrados.";

          //Loop dos dados dentro do arquivo sql
          while ($exibirRegistros = mysqli_fetch_array($consulta)){

            //Colunas sql
            $codigo = $exibirRegistros[0];
            $nome = $exibirRegistros[1];
            $email = $exibirRegistros[2];
            $cpf = $exibirRegistros[3];

            //Dados sql mostrados na tela
            print "<article>";

            print"$codigo<br>";
            print"$nome<br>";
            print"$email<br>";
            print"$cpf<br>";

            print "</article>";
          }

          //Fechar conexão
          mysqli_close($conexao);
           ?>

        </fieldset>
      </form>
    </div>
  </body>
</html>
