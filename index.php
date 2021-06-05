<!DOCTYPE html>
<html>
    <head>
        <title>TADS Maquiagem</title>
        <meta charset="utf-8">

        <script src="script/jquery-3.5.1.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div>
            <?php include 'menu.php';?>
            
            <section id="corpo">
                <?php include 'header.php';?>
                
                <p id="page-title">
                    <?php
                        echo 'Confira as últimas publicações do blog!';
                    ?>
                </p>

                <div>
                    <p class="content">
                       <a href="artigos.php">Artigos</a>
                    </p>
                    <p class="page-content">
                        <?php
                            echo 'As últimas novidades sobre beleza e cuidados!';
                        ?>
                    </p>
                </div>

                <div>
                    <p class="content">
                        <a href="video.php">Vídeos</a>
                    </p>
                    <p class="page-content">
                        <?php
                            echo 'Resenhas em primeira mão dos produtos queridinhos do momento!';
                        ?>
                     </p>
                </div>

                <div>
                    <p class="content">
                        <a href="forum.php">Fórum</a>
                    </p>
                    <p class="page-content">
                        <?php
                            echo 'Nossa comunidade unindo forças e solucionando seus problemas junta! As melhores dicas reunidas em um só lugar, onde você pode ajudar e ser ajudado(a)! Exclusivo para as pessoas cadastradas no TADS Beauty Tips! Não fique de fora e cadastre-se já!';
                        ?>
                     </p>
                </div>
            </section>
            
            <?php include 'rodape.php';?>
        </div>
    </body>
</html>
