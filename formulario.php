<?php

$nascimento = $_POST["trip-start"];
$sexo = $_POST["sexo"];
$tel = $_POST["Telefone"];
?>

 <!DOCTYPE html>
 <html>
     <head>
         <title>TADS Maquiagem</title>
         <meta charset="utf-8">

         <script src="script/jquery-3.5.1.js"></script>

         <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" href="css/cadastro.css">
     </head>
     <body onbeforeunload="return leavePage()">
         <div>
             <?php include 'menu.php';?>

             <section id="corpo">
                <?php include 'header.php';?>

      <h3> Seja bem vindo(a) <?= $nome?> </h3>
<br><br>
      <h3>Confira seus dados: </h3> <br><br>
      Seu email é: <?= $email?>;<br>
      Data de nascimento: <?= $nascimento?>;<br>
      Sexo: <?= $sexo?>; <br>
      Telefone: <?= $tel?>; <br>
      <br>
      TADS Beauty Tips agradece seu cadastro, continue navegando em nosso site.

  </section>

<?php include 'rodape.php'; ?>

</div>
</body>
<script src="script/cadastro.js"></script>
</html>
