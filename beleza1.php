<?php
  require('credentials.php');
  $table = "Comments_beleza1__grr20204466";

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
                    Óleos vegetais para sua beleza
                </p>

                <!-- INICIO DO SEU CODIGO -->
                <img id="imagem-site" src="img/beleza1.png" alt="Imagem retratando óleos essenciais">

                <p> Óleos vegetais são gorduras naturais extraídas das plantas. O uso deles na indústria cosmética é bastante amplo, tanto em produtos para a pele, como em produtos para os cabelos (não confundir com óleos vegetais de cozinha!)

                Eles são extremamente versáteis e úteis, especialmente nos cuidados com a pele e cabelos. Muitos óleos vegetais são utilizados também para fins terapêuticos. O óleo vegetal de cada planta suas propriedades terapêuticas próprias.

                São extraídos principalmente por prensagem a frio e maceração, preservando os óleos na sua forma mais natural e pura. Dependendo da planta, podem ser extraídos de sementes, vegetais e frutos.

                Na aromaterapia, os óleos vegetais são também conhecidos como óleos carreadores ou óleos de base. São chamados carreadores, porque "carregam" (diluem) os óleo essenciais.
                </p>

                <h1>Diferença entre Óleos Vegetais e Óleos Minerais</h1> 

               <h2> Óleos Vegetais para sua Beleza! </h2>
                <p>Enquanto o óleo vegetal é natural, extraídos de plantas, o óleo mineral normalmente é extraído como subproduto do petróleo. Os óleos vegetais são mais leves e têm cosmética mais agradável. Já o óleo mineral tem textura mais espessa e forma uma barreira externa sobre a pele, lubrificando e protegendo (como em casos de queimaduras), mas podendo causar obstrução dos poros e glândulas, inclusive ressecando ainda mais a pele. Sempre que puder, opte por óleos vegetais, que são muito mais saudáveis.</p>
                
                <h1>Tipos de Óleos Vegetais</h1> 
                <p>Os óleos vegetais podem vir de inúmeras plantas. Selecionei abaixo os que acho mais úteis e importantes.</p>

                <h2> 1. Óleo de Abacate</h2>
                    <p>O óleo de abacate é um dos óleos mais saudáveis e benéficos. Possui fitoesteróis, vitaminas A e E, e ômega 6 e 9. Esse óleo inibe a formação de radicais livres, retardando a formação de rugas e estrias, regenerando e hidratando profundamente a pele. Muito indicado também para os cabelos, fortalecendo, hidratando, doando brilho, recuperando fios ressecados e trazendo flexibilidade para cabelos secos. Saiba mais sobre o óleo de abacate.
                    </p>

                <h2>2. Óleo de Amêndoa Doce</h2>
                    <p>  O óleo de amêndoas é um óleo vegetal rico em vitaminas e tem alto poder penetrante, hidratando e suavizando a pele com facilidade. Possui propriedades rejuvenescedoras, regeneradoras, hidratantes, amaciantes e nutritivas. Um ótimo emoliente que proporciona extrema maciez a pele. Melhora a flexibilidade e a elasticidade da pele. Indicado também para peles sensíveis e delicadas, devido à alta concentração de vitaminas A, B1, B2 e B6. É muito utilizado na prevenção de estrias em grávidas, podendo ser utilizado na hidratação diária da pele. Saiba mais sobre o óleo de amêndoas.
                </p> 

                <h2>3. Óleo de Argan</h2>
                   <p> O óleo de argan é um excelente hidratante para pele e cabelos. Protege a pele dos danos causados pelos radicais livres. Contém esqualeno, componente da pele humana, sendo por isso facilmente absorvido. É um ultra-hidratante. Estimula a circulação do couro cabeludo, previne queda e repara o ressecamento dos cabelos. Por ser extremamente fino e de rápida absorção, é utilizado como condicionador de cabelos após o uso do shampoo. Dá brilho à pele e aos cabelos. Saiba mais sobre o óleo de argan.
                </p> 

                 <h2>4. Óleo de Copaíba</h2>
                   <p> O óleo de copaíba é um bálsamo (resina) extraído do tronco da árvore. É muito conhecido e utilizado como anti-inflamatório, antisséptico e cicatrizante. Sua eficácia como anti-inflamatório e antibiótico tem sido comprovada por meio de muitas pesquisas ao longo dos anos, bem como sua notável atuação como anti-séptico, expectorante, cicatrizante e carminativo. É eficaz no tratamento de feridas, eczemas, psoríase, urticárias e acne. Pode ser utilizado para prevenir afecções do couro cabeludo, tais como caspa e seborreia, além de agir como doador de brilho. Saiba mais sobre o óleo de copaíba.
                </p>

                <h2>5. Óleo de Germen de Trigo</h2>
                   <p> Possui propriedades antioxidantes, revitalizantes, emolientes e nutritivas. O óleo de germen de trigo é rico em vitamina E e tem propriedades antioxidantes: é um grande aliado no combate aos radicais livres na pele, evitando o envelhecimento precoce e devolvendo a vitalidade. É altamente nutritivo, sendo indicado para vários problemas de pele. Evita a queda de cabelos e estimula seu crescimento. Proporciona sedosidade, brilho, maciez e resistência ao cabelo. Saiba mais sobre o óleo de germen de trigo.
                </p> 

                <h2>6. Óleo de Jojoba</h2>
                   <p> O óleo de jojoba é rico em ésteres, ácidos monoetilênicos, álcoois, vitamina E e sais minerais. Contém ainda ácidos graxos linoleico (Ômega 6) e ácido gondóico. Devido à sua rica constituição é indicado para hidratação de todos os tipos de pele, inclusive as oleosas, com acne e inflamadas. Possui ação de desobstrução dos poros e das glandulas sebáceas, regulando naturalmente a oleosidade da pele. No cabelo, limpa o bulbo capilar, regula a oleosidade e permite o crescimento de novos fios. Pode ser usado para tratamento e hidratação dos cabelos e como finalizador.
                </p> 

                
              <h2>7. Óleo de Rosa Mosqueta</h2>
                    <p> O óleo de rosa mosqueta é rico em ácidos graxos insaturados, como o ácido linolênico (ômega 3), linoleico (ômega 6), oleico (ômega 9), palmítico, esteárico, mirístico e palmitoleico. Contém ainda uma substância denominada de tretinon, derivado do retinol (vitamina A), que renova e reconstrói o tecido epitelial. Possui também tocoferóis, antioxidantes derivados da vitamina E. Devido a esta composição, seu uso é especialmente útil nos produtos de efeito antioxidante. Ajuda a reduzir a coloração de manchas, cicatrizes e formação de rugas prematuras, prevenindo o envelhecimento da pele. Indicado para peles ressecadas e desvitalizadas.
                </p> 

               <h2>8. Óleo de Semente de Uva</h2>
                    <p> O óleo é extraído da semente e tem cor esverdeada. É rico em vitamina E e ômega 6; possui vitaminas B1, B3, B5, C, D, F e polifenóis como o resveratrol. Ele ajuda a retardar o envelhecimento, inibindo a formação de radicais livre e aumentando a resistência de fibras colágenas. O óleo de semente de uva possui a vantagem de ter a textura fina e, por isso, penetrar mais rapidamente nos poros da pele. Além de hidratar a pele, o óleo de semente de uva hidrata, traz maciez e auxilia no crescimento dos cabelos.
                </p>


                <h2>9. Óleo de Gergelim</h2>
                    <p>O óleo de gergelim possui alto tedor de ômega 6 e 9, além de fitoesteróis importantes e vitaminas A, B1, B2, B3 e E. Poderoso antioxidante e anti-inflamatório, combatendo os radicais livres. A vitamina T, contida no óleo, auxilia os processos de regeneração da pele. Melhora a elasticidade da pele. Rejuvenescedor, retarda o envelhecimento precoce. Excelente para todos os tipos de pele, com problemas de eczema e psoríase. Ajuda evitar a queda de cabelo. Hidrata e traz maciez. Evita que os cabelos fiquem brancos precocemente.Saiba mais sobre o óleo de gergelim.
                </p>

                <h2>10. Óleo de Babosa (Aloe Vera)</h2>
                   <p> O óleo concentra os benefícios da babosa: possui propriedades antibacteriana, cicatrizante, hidratante, regeneradora, curativa, umectante e nutritiva. É um poderoso regenerador e antioxidante natural, auxilindo peles flácidas e secas, e atuando como preventivo de rugas. Equilibra o pH do couro cabeludo, reduz a oleosidade, hidrata cabelos secos, repara fios danificados, fortalece, é anti-caspa, anti-seborreia, anti-queda, e favorece o crescimento.
                </p>

               <h2>11. Óleo de Coco Babaçu</h2>
                   <p> Este óleo diferencia-se dos outros, pois possui ácidos graxos saturados de cadeia média: ácidos láurico, mirístico, caproico e caprílico, que possuem ação antimicrobiana, anti-inflamatória e emagrecedora. É ótimo para o cuidado com a pele e cabelos, atuando como hidratante, trazendo maciez e nutrindo. Previne o envelhecimento precoce da pele. Nos cabelos, protege da poluição ambiental e fortalece a fibra capilar.
                </p>

                <h2>12. Óleo de Castanha do Pará</h2>
                   <p> Possui vitaminas A e E, e uma considerável quantidade de dois minerais bastante importantes: o zinco e o selênio. Proporciona hidratação profunda à pele, e atua na prevenção de estrias. Ótimo para tratar cabelos secos, deixando-os sedosos e com brilho. Auxilia na restauração dos cabelos danificados e desidratados.
                </p>

               <h2>13. Óleo de Groselha Negra</h2>
                   <p>  Esse óleo é rico em vitamina C e de outros antioxidantes naturais: as antocianinas, que são pigmentos do grupo dos bioflavonóides que protege as plantas contra os raios UV, evitando a produção de radicais livres. Possui propriedades antissépticas e anti-inflamatórias. É eficiente para hidratar as peles ressecadas, que comprometem da capacidade regenerativa. É indicado na prevenção do envelhecimento prematuro, e para atenuar linhas de expressão na área dos olhos. Nos cabelos, hidrata, fortifica a raiz, e ajuda no crescimento.
                </p>


                <h2>14. Óleo de Linhaça</h2>
                   <p> Herdando o poder da linhaça, este óleo é rico em ômega 3, este óleo tem potente ação antioxidante e anti-inflamatória, favorecendo tratamentos da pele como rugas, eczemas, acne, psoríase, dermatite atópica, problemas de pele, quelóides, peles rachadas. Para os cabelos é hidratante, fortificante, diminui a queda, ajuda no crescimento, dá brilho, e diminui o frizz. O óleo de linhaça é altamente insaturado. Isto significa que é muito propenso à oxidação (rancidez) a menos que seja armazenado corretamente. Cuidado com o óleo de linhaça: sempre compre somente de marcas confiáveis e que possuam vidro escuro para evitar a oxidação. Saiba mais sobre o óleo de linhaça.
                </p>

               <h2>15. Óleo de Macadâmia</h2>
                   <p> Age como um anti-inflamatório natural (devido ao seu teor de ácido oleico). É um ótimo hidratante capilar.Tem alto poder de emoliência, conferindo maciez e brilho aos cabelos.Tem especial utilidade para os cabelos ressecados e sem brilho, lubrificando o fio, mantendo-o hidratado. Na pele, promove a hidratação contínua evitando a formação de rugas e o envelhecimento precoce. Muito usado em cremes anti-aging.
                </p>

               <h2>16. Óleo de Rícino (Mamona)</h2>
                   <p> O óleo de rícino é um potente hidratante para pele e cabelos. Ele é absorvido rapidamente pela pele; e logo após ser absorvido, ele estimula a produção de colágeno. Isso faz com que ele seja eficaz para diminuir as rugas, bem como espinhas, acne, bolsas nos olhos, queimaduras solares, pele seca, estrias, entre outros. Além de tratar o couro cabeludo, o óleo de rícino condiciona e hidrata os cabelos, prevenindo pontas duplas. Ajuda a fortalecer e melhora a queda de cabelo. Saiba mais sobre o óleo de rícino para os cabelos.
                </p>

                <h2>Onde comprar os óleos vegetais?</h2>
                 <p>Você pode encontrar os óleos vegetais em casas de produtos naturais e lojas online.</p>
                    
                <p> Na hora de comprar o seu óleo vegetal, prefira óleos não-refinados e prensados a frio ou extra-virgem. No processo de refino perde-se algumas propriedades, principalmente algumas vitaminas e minerais.</p>
                    
                <p>A Empório Laszlo é uma marca que vende óleos vegetais extra-virgens: apesar do produto ser bem mais caro, são de qualidade indiscutível. Outras marcas mais acessíveis que gosto bastante são Terra Flor, Bioessência, Cativa Natureza e Phytoterápica.
                </p>

                <!-- TAGS -->
                <div id="tag">
                    <a href="construcao.php"> #Beleza</a> <a href="construcao.php"> #Pele</a> <a href="construcao.php"> #Cabelos</a> <a href="construcao.php"> #Dicas</a> 
                           
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