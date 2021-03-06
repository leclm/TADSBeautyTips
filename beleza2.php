<?php
  require('credentials.php');
  $table = "Comments_beleza2_grr20204466";

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
        <link rel="stylesheet" href="css/artigos.css">
        <link rel="stylesheet" href="css/comments.css">
    </head>
    <body>
        <div>
            <?php include 'menu.php';?>
            
            <section id="corpo">
                <?php include 'header.php';?>
                
                <p id="page-title">
                    Suplementos para unhas fracas
                </p>

                <!-- INICIO DO SEU CODIGO -->
                <img id="imagem-site" src="img/beleza2.png" alt="Imagem retratando unhas saud??veis">

                <p>Quando as unhas n??o apresentam um bom aspecto, isso pode significar que falta algum nutriente no organismo (se elas est??o quebradi??as, por exemplo, voc?? pode estar com anemia). Problemas desse tipo podem ser resolvidos com o consumo de suplementos para unhas. Esses suplementos possuem a????o antioxidante, suprindo a demanda nutricional e tratando todos os danos.</p>

                <p>Para quem j?? tem uma alimenta????o rica em nutrientes, bem variada e saud??vel, normalmente n??o h?? necessidade de suplementar. Por??m, se a alimenta????o ?? pobre, a suplementa????o ajuda em muito para suprir os nutrientes deficientes.Para a boa apar??ncia das unhas, o consumo de algumas vitaminas e minerais s??o importantes. A car??ncia de subst??ncias como vitaminas, zinco e ferro s??o determinantes para o enfraquecimento das unhas, e voc?? pode obt??-los por meio dos suplementos. Conhe??a algumas op????es: </p> 

                <h1>Suplementos para Unhas Fracas</h1>
                <h2>1. Biotina</h2>
                 <p>Suplementos com biotina (vitamina B7) favorecem a sa??de e crescimentos de unhas. Trata-se de uma vitamina hidrossol??vel relacionada ?? produ????o de queratina (nutriente que ajuda a fortalecer as unhas). Essas subst??ncias tamb??m auxiliam o metabolismo de carboidratos, de prote??nas e de gorduras, ou seja, ajuda seu corpo a absorver os nutrientes. Isso tamb??m melhora a sa??de das unhas, da pele e dos cabelos. Apesar da biotina estar presente em alimentos como o ovo, sua biodisponibilidade ali ?? muito baixa. Como alternativa, ?? recomendado tamb??m a suplementa????o de 5 a 10 mg de biotina por at?? 6 meses para o fortalecimento das unhas.</p>
                

               <h2>2. Sil??cio e Col??geno</h2>
                   <p> O sil??cio ?? outro nutriente importante, pois est?? relacionado com a produ????o do col??geno tipo 1, prote??na importante para a sa??de das unhas. Assim como a suplementa????o com pept??deos bioativos de col??geno tipo 1 ajuda no fortalecimento e crescimento das unhas, o sil??cio atua de forma similar, ajudando na maior produ????o do col??geno.Eles fortalecem a unha e estimulam o crescimento, prevenindo danos causados pelo seu enfraquecimento e envelhecimento. A estrutura da unha ?? formada sobretudo por queratina, a qual se liga ao sil??cio, conferindo dureza e estabilidade.
                </p>


            <h2>3. Ciste??na</h2>
                    <p> A ciste??na ?? um amino??cido presente naturalmente em nosso organismo. Uma de suas fun????es ?? juntar duas cadeias de queratina, principal prote??na da estrutura da unha. Ou seja, atrav??s da liga????o de queratina, a ciste??na atua secundariamente na sa??de das unhas.
                </p>

            <h2>4. Ferro</h2>
                   <p>O ferro ?? um nutriente essencial para o bom funcionamento de antioxidantes que ativam as vitaminas do complexo B a agirem sobre cabelos e unhas. Sua defici??ncia pode fazer com que as unhas tenham uma apar??ncia opaca, fiquem quebradi??as e com aspecto rachado. A dose di??ria sugerida para quem est?? com a ferritina baixa ?? de 14 mg por dia.
                </p>


            <h2>5. Zinco</h2>
                   <p> A falta de zinco deixa as unhas fracas, dificultando seu crescimento e fazendo-as cair com facilidade. O zinco ?? fundamental para diferentes atividades do organismo, entre elas a cicatriza????o. A suplementa????o de zinco pode ser na dose de 25 mg por dia.
                </p>

            <h2> 6. Vitamina A</h2>
                   <p> A vitamina A (??cido retinoico) ?? encontrada naturalmente no interior das c??lulas, desempenhando fun????es ligadas ao ciclo celular. Tamb??m est?? relacionada ao desenvolvimento de unhas, cabelos, ossos, tecido epitelial e conserva????o do esmalte dent??rio. Geralmente, os suplementos de vitamina A tamb??m apresentam o c??lcio em sua composi????o. Uma dose de 3.000 a 5.000 UI di??rios ?? suficiente.
                </p>

            <h2>7. Vitamina D</h2>
                   <p> A vitamina D ?? respons??vel por estimular o sangue a absorver o c??lcio do intestino. Caso haja defici??ncia dessa vitamina, o organismo busca em outros tecidos, como nas unhas e no ossos. Logo, se voc?? carece do nutriente, suas unhas ficar??o quebradi??as.
                    
                    H?? duas fontes prim??rias de vitamina D: a exposi????o ao sol e a suplementa????o. Caso a exposi????o ao sol n??o seja suficiente, 5.000 UI di??rios de suplementa????o ajudam a manter os n??veis saud??veis.
                </p>


                 <!-- TAGS -->
                 <div id="tag">
                    <a href="construcao.php"> #Beleza</a> <a href="construcao.php"> #Unhas</a> <a href="construcao.php"> #Cuidados</a> <a href="construcao.php"> #Dicas</a> 
                           
                    </div>
                <!--------->

                
                <div class="past-comments">
                    <?php
                        if($error) echo "Os dois campos sao obrigat??rios!"
                    ?>
                    <h3>Coment??rios</h3>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while($comment = mysqli_fetch_assoc($result)): ?>
                        <div class="comment" id="comment_<?= $comment['id'] ?>">
                            <p id="author"><?= $comment['name']?>:</p>
                            <p id="commentText"><?= $comment['comment'] ?></p>
                        </div>
                        <?php endWhile; ?>
                    <?php else: ?>
                        Nenhum coment??rio enviado ainda.
                    <?php endIF; ?>
                    </div>

                    <div class="new-comment">
                    <h3>Deixe seu coment??rio :)</h3>
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
                    
            <?php include 'rodape.php';?> 
        </div>

    
    </body>
    <script src="script/artigos.js"></script>
</html>