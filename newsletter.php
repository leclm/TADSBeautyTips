<!DOCTYPE html>
<html>
    <head>
        <title>TADS Maquiagem</title>
        <meta charset="utf-8">

        <script src="script/jquery-3.5.1.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/newsletter.css">
    </head>
    
    <body>
        <div>
            <?php include 'menu.php';?>

            <section id="corpo">
                <?php include 'header.php';?>
                
                <p id="page-title">
                    Newsletter
                </p>
                <p class="page-content">
                    Você já conhece a nossa Newsletter? Com ela você pode receber conteúdos personalizados de acordo com as informações que você nos passar.      
                </p>
                <p class="page-content">
                    Faça o seu cadastro no botão abaixo, lá você nos diz como é o seu cabelo (seco, oleoso..), como é a sua pele, seus olhos... E com isso você receberá conteúdos que vão ser úteis para os seus cuidados pessoais! Que incrível né?   
                </p>
                
                <div id="btn">
                    <a href="cadastro.php">  
                        <button id="btnSubmit" type="submit"> Cadastre-se agora! </button>
                    </a>
                </div>
                
                
            </section>
            
            <?php include 'rodape.php';?>  
        </div>
    </body>

    <script src="script/newsletter.js"></script>
</html>