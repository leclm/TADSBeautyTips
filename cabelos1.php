<?php
  require('credentials.php');
  $table = "Comments_cabelos1_grr20204466";

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
                    10 Motivos por que seus Cabelos estão Fracos, Finos e Ralos
                </p>
                
                <!-- INICIO DO SEU CODIGO -->
                <img id="imagem-site" src="img/cabelos1.png" alt="Imagem de uma mulher feliz com seu cabelo">

                <h1>10 Motivos por que seus Cabelos estão Fracos, Finos e Ralos</h1>
                    <p>
                        Muitos aspectos de nosso estilo de vida — desde o que comemos até como penteamos os cabelos — podem afetar a aparência de nossos cabelos. Isso quer dizer que ter um cabelo mais forte e volumoso está nas nossas mãos. Conheça 10 formas de devolver a energia e aparência dos seus cabelos.</p>

                <h2>1. Banho Muito Quente</h2>
                    <p>Banhos quentes desidratam não somente sua pele, mas também suas fibras capilares. Isso leva a cabelos secos e quebradiços, que caem com mais facilidade. Quando a temperatura da água é muito alta, você remove os óleos de proteção dos fios e faz com que os poros do couro cabeludo produzam um excesso de óleo para reposição, o que danifica a raiz e leva a ainda mais queda. Portanto, habitue-se a diminuir a temperatura do chuveiro na hora de enxaguar o shampoo.
                    </p>

                <h2>2. Secador Muito Quente</h2>
                    <p>O ar do secador, quando em temperaturas muito elevadas, danifica as proteínas de seu cabelo, assim como a sua cutícula protetora. Uma vez que a cutícula esteja danificada, o equilíbrio de hidratação é perdido, e seu cabelo fica mais propenso à queda. Limite o uso do secador a no máximo duas ou três vezes por semana, e use a opção de ar menos quente. Além disso, utilize sprays de proteção contra calor, que criam uma barreira térmica protetora.</p>


                <h2>3. Dietas Radicais</h2>
                    <p>Dietas muito restritivas (ou alimentação muito pobre) fazem o seu organismo dirigir a energia (o pouco que tem) para funções essenciais — como para o funcionamento de seu coração e cérebro — e não para fabricação de cabelo. Tanto isso é verdade que um dos principais sintomas da anorexia é a queda de cabelos grave. Então, tenha uma dieta saudável, com muita proteína magra, como as presentes no peixe, frango, lentilhas e feijão. Proteína é o ingrediente essencial de seu cabelo, então, para cabelos maravilhosos, é primordial ingerir o suficiente.
                    </p>

                <h2>4. Falta de Cuidado com Cabelos Molhados</h2>
                    <p>
                        O momento em que nossos fios estão mais frágeis e propensos à quebra é quando estão saturados com água. É nesse momento que a cutícula protetora está mais "levantada", ou "aberta". Escovar os cabelos molhados, ou enxugar com toalha de forma agressiva é um prato cheio para o enfraquecimento dos fios. Ao lavar o cabelo, preocupe-se em desembarassá-lo antes de secar, ainda no chuveiro. No momento de secar com a toalha, procure fazer movimentos suaves. Se possível, utilize uma toalha bem macia. Espere secar um pouco antes de pentear o cabelo para evitar que ele se quebre.</p>

                <h2>5. Cabelos Muito Presos</h2>
                    <p>Se você usa rabo de cavalo ou trança apertada, cuidado: esse estilo de cabelo causa tensão excessiva sobre os folículos pilosos, danificando-os e criando microcicatrizes que os destroem de forma definitiva. Isso pode levar a alopécia por tração (puxamento dos fios), uma condição que torna impossível o crescimento do cabelo. Por isso, solte-se! 🙂 Tente usar seu cabelo solto mais vezes. Especialmente durante o sono, pois tracionar o fio contra o travesseiro pode causar ainda mais atrito. Se você amarrar seu cabelo atrás, procure deixá-lo menos apertado (se você sente sua pele sendo puxada, precisa soltar mais).</p>

                <h2>6. Laquês e Produtos de Longa Duração</h2>
                    <p>Se você utiliza produtos como spray fixador ou laquê, cuidado. Esses produtos normalmente são ricos em álcool, que torna o cabelo seco e quebradiço. Quando você pentear ou escovar o cabelo, esse resíduo faz com que o cabelo quebre e caia. Evite todo e qualquer produto que torne o cabelo duro ou pegajoso. Em vez disso, opte por soluções mais suaves, como cremes, que mantêm a umidado do cabelo intacta e não criam atrito durante a escovação.</p>

                <h2> 7. Escova Progressiva</h2>
                    <p>
                        Fazer uma alteração na estrutura do fio (alisar ou relaxar) sempre trará um dano ao cabelo. A diferença está em quanto tempo este fio se restabelece. Alguns processos ‘selam’ o fio de maneira que este não consegue absorver a hidratação e resseca. O resultado são cabelos pesados, opacos e cheio de fios arrebentados. Como eles perdem proteínas e aminoácidos os fios acabam ficando mais finos.
                        </p>

                <h2>8. Coçar a cabeça</h2>
                    <p>Coceira no couro cabeludo (como a causada pela caspa) pode resultar em enfraquecimento dos cabelos, devido aos danos induzidos pela fricção. Uma vez que a cutícula se danifique, a fibra do cabelo ficara suscetível à quebra. Para resolver o problema, utilize algum shampoo que contenha selênio ou piritionato de zinco. Esses componentes normalmente estão presentes em shampoos anti-caspa. Se as opções comercializadas não funcionarem, seu dermatologista pode oferecer outras opções, como prescrever um shampoo antifúngico, por exemplo.</p>

                <h2>9. Falta de Proteção Solar</h2>
                    <p>Mesmo para aquelas que já estão bem conscientes do uso do protetor solar na pele, é comum esquecer que os cabelos também precisam de proteção! A exposição prolongada a raios UV tiram toda a força e elasticidade dos seus cabelos. O sol excessivo provoca a o enfraquecimento e quebra das camadas das cutículas, levando a cabelos quebradiços e à eventual queda dos fios. Portanto, utilize algum recurso para proteger seu cabelo do sol forte: use leave-ins com protetor solar, ou também chapéu (sempre lembrando de "guardar" o rabo de cavalo, se for o caso).
                    </p>

                <h2>10. Não lavar o cabelo o suficiente</h2>
                    <p>Principalmente com a chegada dos shampoos a seco, é fácil ficar vários dias sem lavar o cabelo. Esse recurso é muito conveniente, mas tem que ser usado em moderação. O acúmulo de produtos por muito tempo pode causar caspa excessiva, e ainda entope os folículos pilosos, podendo dificultar o crescimento dos cabelos. Não há nada de errado em "pular" um dia de lavagem. É importante lavar os cabelos um dia sim, um dia não, especialmente se você está suando muito ou usando muitos produtos no cabelo. Para evitar o ressecamento, procure também utilizar shampoos sem sulfato.
                    </p>

                <p> E você, possui os fios finos e fracos? O que faz para melhorar?</p>


                  <!-- TAGS -->
                  <div id="tag">
                    <a href="construcao.php"> #Beleza</a> <a href="construcao.php"> #Cabelos</a> <a href="construcao.php"> #Cuidados</a> <a href="construcao.php"> #Dicas</a> 
                           
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
        
    </body>
    <script src="script/artigos.js"></script>
</html>