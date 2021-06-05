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
                <img id="imagem-site" src="img/beleza2.png" alt="Imagem retratando unhas saudáveis">

                <p>Quando as unhas não apresentam um bom aspecto, isso pode significar que falta algum nutriente no organismo (se elas estão quebradiças, por exemplo, você pode estar com anemia). Problemas desse tipo podem ser resolvidos com o consumo de suplementos para unhas. Esses suplementos possuem ação antioxidante, suprindo a demanda nutricional e tratando todos os danos.</p>

                <p>Para quem já tem uma alimentação rica em nutrientes, bem variada e saudável, normalmente não há necessidade de suplementar. Porém, se a alimentação é pobre, a suplementação ajuda em muito para suprir os nutrientes deficientes.Para a boa aparência das unhas, o consumo de algumas vitaminas e minerais são importantes. A carência de substâncias como vitaminas, zinco e ferro são determinantes para o enfraquecimento das unhas, e você pode obtê-los por meio dos suplementos. Conheça algumas opções: </p> 

                <h1>Suplementos para Unhas Fracas</h1>
                <h2>1. Biotina</h2>
                 <p>Suplementos com biotina (vitamina B7) favorecem a saúde e crescimentos de unhas. Trata-se de uma vitamina hidrossolúvel relacionada à produção de queratina (nutriente que ajuda a fortalecer as unhas). Essas substâncias também auxiliam o metabolismo de carboidratos, de proteínas e de gorduras, ou seja, ajuda seu corpo a absorver os nutrientes. Isso também melhora a saúde das unhas, da pele e dos cabelos. Apesar da biotina estar presente em alimentos como o ovo, sua biodisponibilidade ali é muito baixa. Como alternativa, é recomendado também a suplementação de 5 a 10 mg de biotina por até 6 meses para o fortalecimento das unhas.</p>
                

               <h2>2. Silício e Colágeno</h2>
                   <p> O silício é outro nutriente importante, pois está relacionado com a produção do colágeno tipo 1, proteína importante para a saúde das unhas. Assim como a suplementação com peptídeos bioativos de colágeno tipo 1 ajuda no fortalecimento e crescimento das unhas, o silício atua de forma similar, ajudando na maior produção do colágeno.Eles fortalecem a unha e estimulam o crescimento, prevenindo danos causados pelo seu enfraquecimento e envelhecimento. A estrutura da unha é formada sobretudo por queratina, a qual se liga ao silício, conferindo dureza e estabilidade.
                </p>


            <h2>3. Cisteína</h2>
                    <p> A cisteína é um aminoácido presente naturalmente em nosso organismo. Uma de suas funções é juntar duas cadeias de queratina, principal proteína da estrutura da unha. Ou seja, através da ligação de queratina, a cisteína atua secundariamente na saúde das unhas.
                </p>

            <h2>4. Ferro</h2>
                   <p>O ferro é um nutriente essencial para o bom funcionamento de antioxidantes que ativam as vitaminas do complexo B a agirem sobre cabelos e unhas. Sua deficiência pode fazer com que as unhas tenham uma aparência opaca, fiquem quebradiças e com aspecto rachado. A dose diária sugerida para quem está com a ferritina baixa é de 14 mg por dia.
                </p>


            <h2>5. Zinco</h2>
                   <p> A falta de zinco deixa as unhas fracas, dificultando seu crescimento e fazendo-as cair com facilidade. O zinco é fundamental para diferentes atividades do organismo, entre elas a cicatrização. A suplementação de zinco pode ser na dose de 25 mg por dia.
                </p>

            <h2> 6. Vitamina A</h2>
                   <p> A vitamina A (ácido retinoico) é encontrada naturalmente no interior das células, desempenhando funções ligadas ao ciclo celular. Também está relacionada ao desenvolvimento de unhas, cabelos, ossos, tecido epitelial e conservação do esmalte dentário. Geralmente, os suplementos de vitamina A também apresentam o cálcio em sua composição. Uma dose de 3.000 a 5.000 UI diários é suficiente.
                </p>

            <h2>7. Vitamina D</h2>
                   <p> A vitamina D é responsável por estimular o sangue a absorver o cálcio do intestino. Caso haja deficiência dessa vitamina, o organismo busca em outros tecidos, como nas unhas e no ossos. Logo, se você carece do nutriente, suas unhas ficarão quebradiças.
                    
                    Há duas fontes primárias de vitamina D: a exposição ao sol e a suplementação. Caso a exposição ao sol não seja suficiente, 5.000 UI diários de suplementação ajudam a manter os níveis saudáveis.
                </p>


                 <!-- TAGS -->
                 <div id="tag">
                    <a href="construcao.php"> #Beleza</a> <a href="construcao.php"> #Unhas</a> <a href="construcao.php"> #Cuidados</a> <a href="construcao.php"> #Dicas</a> 
                           
                    </div>
                <!--------->

                
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
                    
            <?php include 'rodape.php';?> 
        </div>

    
    </body>
    <script src="script/artigos.js"></script>
</html>