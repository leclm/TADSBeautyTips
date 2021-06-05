<!DOCTYPE html>
<html>
    <head>
        <title>TADS Maquiagem</title>
        <meta charset="utf-8">
        
        <script src="script/jquery-3.5.1.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/artigos.css">
    </head>
    <body>
        <div>
            <?php include 'menu.php';?>
            
            <section id="corpo">
                <?php include 'header.php';?>
           
                <p id="page-title">
                    Artigos
                </p>
                <p class="page-content">
                    <span style="color: red;">
                    </span>
                </p>

                <!-- INICIO DO SEU CODIGO -->
                <div class = "link-artigos">
                    <h1>Beleza</h1>
                        <p><li><a href="beleza1.php">Óleos vegetais para sua beleza</a></li></p>
                        <p><li><a href="beleza2.php">Suplementos para unhas fracas</a></li></p>
                    
                    <h1>Cabelos</h1>
                        <p><li><a href="cabelos1.php">10 Motivos por que seus Cabelos estão Fracos, Finos e Ralos</a></li></p>
                                    
                    <h1>Cosméticos</h1>
                        <p><li><a href="cosmeticos1.php">Cosméticos mais desejados do mês</a></li></p>
                </div>        
                <!-- FIM DO SEU CODIGO-->
            </section>
                
            <?php include 'rodape.php';?>
             
        </div>
    </body>
    <script src="script/artigos.js"></script>
</html>