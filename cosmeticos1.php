<?php
  require('credentials.php');
  $table = "Comments_cosmeticos1_grr20204466";

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
        <title>Cosméticos mais desejados do mês</title>
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
                    Cosméticos mais desejados do mês
                </p>

                <!-- INICIO DO SEU CODIGO -->
                <img id="imagem-site" src="img/cosmeticos1.png " alt="os 5 cosméticos favoritos do mês">

                <p>Olá queridas!</p>
                
                <p>Para quem gosta de cosméticos sempre tem alguma coisinha que estamos querendo — ou por necessidade, ou por mera curiosidade — não é mesmo? Hoje em dia, com essa variedade imensa de cosméticos e novidades a todo momento, fica difícil não ter curiosidade de experimentar algo novo.</p>
                    
                <p> Vou listar cinco cosméticos que estou com vontade de experimentar ou que fiquei curiosa de saber mais sobre tal produto. Aí, se você quiser, aproveita e também coloca nos comentários os produtinhos que você quer. Assim, teremos uma ideia dos produtos mais desejados em cada mês por todas.</p>
                    
                <p>Conto com a participação de todas vocês: não precisa colocar 5 produtos, apenas 1 já está bom. Enfim, contribua como quiser. Lembre-se: não precisa ser um cosmético que você vá comprar, pode ser simplesmente produtos que mais tenham despertado a sua curiosidade.</p>
                    
                <p>E, se você já usou algum produto que foi mencionado (ou por mim, ou nos comentários), pode responder dando uma dica, se vale mesmo a pena ou não — enfim, para nos ajudarmos mesmo.</p>
                    
                <p>Então, vamos lá? O que eu gostaria para esse mês?</p>
                
                
                <h2>1. Ada Tina Normalize Pore FPS 25</h2>
                    <p>Faz um tempinho já que a AdaTina lançou esse protetor e desde então estou curiosa para testá-lo. Parece ser muito melhor que o AdaTina Matte. Quem já usou garante que melhora mesmo a aparência dos poros dilatados e deixa a pele sequinha, sem oleosidade. Tem nas opções FPS 25 e FPS 50. Quero optar pela versão FPS 25, pois agora vem o inverno e a incidência dos raios solares é bem menor. Alguém já testou?</p>
                
                <h2>2. Tônico capilar Farmaervas Extrato de jaborandi</h2>
                    <p>Estou sempre na busca de algo para queda de cabelo. Na verdade eu sei que o produto não fará meu cabelo parar de cair, mas busco algo que ajude a fortalecer e quem sabe engrossar um pouquinho os fios :). O tônico possui ação reparadora da proteína de trigo, hidrata e nutre a fibra capilar, deixando o cabelo macio, forte e saudável.</p>
                
                <h2>3. Lenços Removedores de esmalte Impala – Sem Perfume</h2>
                    <p>Apesar de retirar o esmalte com removedor, eu gosto de ter esses lencinhos para retirar o esmalte do cantinho das unhas. Já experimentei o da Oceane, mas noto que tem secado rápido. Já ouvi falar que esse da Impala é melhor. Com sua formula que hidrata a cutícula, pode ser carregado na bolsa sem perigo de vazar.</p>
                
                <h2>4. Primer L’Oreal Studio Secrets Secret Magic Perfecting Base</h2>
                    <p>Tecnologia que funciona como uma pré-maquiagem, disfarçando rugas, poros e deixando a pele mais homogênea. Disfarça as imperfeições e elimina a oleosidade da pele, garantindo um acabamento leve, sedoso e matificado. Sua tonalidade incolor (pastinha rosa) é ideal para todos os tons e tipos de pele. Pena que não vende por aqui…</p>
                
                <h2>5. Pó Facial Transparente Isabela Capeto – Panvel</h2>
                    <p> Opa! Essa é uma novidade que está saindo do forno, é um pó facial, totalmente transparente que promete melhorar a aparência da pele. Cobre as imperfeições e elimina a oleosidade. Já estou de olho :), precinho super camarada. Depois que eu testar eu conto para vocês.</p>
                
                <p>Agora é sua vez! Quais os produtinhos que você está querendo no momento?</p>

                  <!-- TAGS -->
                  <div id="tag">
                    <a href="construcao.php"> #Cosméticos</a> <a href="construcao.php"> #Pele</a> <a href="construcao.php"> #Maquiagem</a> <a href="construcao.php"> #Makeup</a> <a href="construcao.php"> #Dicas</a> 
                           
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
            
            <?php include 'rodape.php'; ?>
        </div>

        
    </body>
    <script src="script/artigos.js"></script>
</html>