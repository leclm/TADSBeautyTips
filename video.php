<?php
  require('credentials.php');
  $table = "Comments_video_grr20204466";

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
                    Comparando a queridinha - Maquiagem de Cara Lavada
                </p>
            
                <!-- INICIO DO SEU CODIGO -->
                <div id="conteudo">
                        <div>
                            <H3>Make da Julia Pettit</H3>
                                <iframe src="https://www.youtube.com/embed/n8crBGbvTBM"></iframe>
                            <P class="page-content">Neste vídeo a influencer Julia Pettit nos ensina a fazer uma make levinha para o dia a dia que pede menos camadas e fica com um ar bem natural</P>
                        </div>
                        <div>
                            <H3>Make do Daniel Hernandez</H3>
                                <iframe src="https://www.youtube.com/embed/T_cLRyWGBDU"></iframe>
                            <p class="page-content">Neste video o maquiador Daniel Hernandez ensina a fazer a sua versão desta make tão amada </p>
                        </div>
                </div>
                <div id="tabela">
                  <H3>Produtos Usados</H3>
                    <table id="table">
                        <tr class="tr-videos">
                            <th>Julia Pettit</th>
                            <th>Daniel Hernandez</th>
                        </tr>
                        <tr class="tr-videos">
                            <td>Anti oxidante Salve</td>
                            <td>óleo em bastão</td>
                        </tr>
                        <tr class="tr-videos">
                            <td>Corretivo - Paleta da Kryolan</td>
                            <td>Base</td>
                        </tr>
                    
                        <tr class="tr-videos">
                            <td>Blush - Paleta de corretivos Kryolan</td>
                             <td>Corretivo</td>
                        </tr>
                        <tr class="tr-videos">
                            <td>Mascára Laneige</td>
                            <td>Pó com prime</td>
                        </tr>
                        <tr class="tr-videos">
                            <td></td>
                            <td>Iluminador</td>
                        </tr>
                    </table>
                </div>

                
                <!-- TAGS -->
                    <div id="tag">
                    <a href="construcao.php"> #Maquiagem</a> <a href="construcao.php"> #Makeup</a> <a href="cosmeticos1.php"> #Cosméticos</a> 
                    <a href="video.php"> #vídeos</a> <a href="construcao.php"> #tutorial</a>                    
                    </div>
                


                    <div id="comente">
                        <p class="page-content"> e ai gostou?</p>
                        <p class="page-content">conta para gente qual foi sua favorita</p>
                        <p class="page-content">Lá no forum também tem participação das leitoras e você pode ver os testes da galera</p>
                    </div>
            
                    <div class="past-comments">
                    <?php
                        if($error) echo "Os dois campos sao obrigatórios!"
                    ?>
                    <h3>Comentários</h3>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while($comment = mysqli_fetch_assoc($result)): ?>
                        <div class="comment" id="comment_<?= $comment['id'] ?>">
                            <p id="author"><?= $comment['name']?>:</p>
                            <p id="commentText"><?= $comment['comment'] ?></p>
                        </div>
                        <?php endWhile; ?>
                    <?php else: ?>
                        Nenhum comentário enviado ainda.
                    <?php endIF; ?>
                    </div>

                    <div class="new-comment">
                    <h3>Deixe seu comentário :)</h3>
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                        <div id="input-name">
                        <input id="txtName" type="text" name="txtName" placeholder="Seu Nome" value="<?php echo $name; ?>"></input> 
                        </div>
                        
                        <div>
                        <textarea name="txtComment" id="txtComment" placeholder="Comente aqui.."><?php echo $comment; ?></textarea>
                        </div>
                        <button id="btnSubmit" name="btnSubmit" type="submit">Postar</button>
                    </form>
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