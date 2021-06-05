<?php
  require('credentials.php');
  $table = "Comments_video";

  function sanitize($texto) {
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
  }

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $error = false;
  $name = "";
  $comment = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['txtName'])) {
      $error = true;
    }
    
    if (empty($_POST['txtComment'])) {
      $error = true;
    } 
    
    else {
      $name = sanitize($_POST["txtName"]);
      $comment = sanitize($_POST["txtComment"]);

      $sql = "INSERT INTO $table (name, comment)
              VALUES ('$name', '$comment')";

      if (!mysqli_query($conn, $sql)) {
        echo "Error inserting comment: " . mysqli_error($conn);
      }

      $name = "";
      $comment = "";
    }
  }

  $sql = "SELECT * FROM $table";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    echo "Error selecting comments: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>TADS Maquiagem</title>
        <meta charset="utf-8">

        <script src="script/jquery-3.5.1.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/video.css">
        <link rel="stylesheet" href="css/comments.css">
    </head>
    <body>
        
        <div>
            <?php include 'menu.php';?>

            <section id="corpo">
                <?php include 'header.php';?>
                
                <p id="page-title">
                    Ops...
                </p>
            
                <!-- INICIO DO SEU CODIGO -->
                <div id="construction">
                    <h8> Conteúdo em construção</h8>
                    <img id="imagem-construcao" src="img/lipstick.png " alt="imagem de erro">
               </div> 
               <!-- FIM DO SEU CODIGO -->
            </section>
            
            <?php 
                include 'rodape.php';
            ?>
        </div>
    
        <script src="script/video.js"></script>
    </body>
</html>

<!-- acho que vai -->