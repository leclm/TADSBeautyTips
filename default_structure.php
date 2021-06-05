<!DOCTYPE html>
<html>
    <head>
        <title>TADS Maquiagem</title>
        <meta charset="utf-8">

        <script src="script/jquery-3.5.1.js"></script>
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <header id="cabecalho">
                <nav id="menu">
                    <ul>
                        <li id="logotipo">TADS Beauty Tips</li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="artigos.php">Artigos</a></li>
                        <li><a href="video.php">Vídeos</a></li>
                        <li><a href="forum.php">Fórum</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </header>

            <section id="corpo">
                <table id="logo">
                    <tr>
                        <td>
                            <img id="logo" src="img/logo-tads-tips.png" alt="Logo marca do site. Um quadro com fundo rosa chock, com as letras TADS, embaixo escrito em branco 'BEAUTY TIPS'">
                        </td>
                        <td>
                            <p id="logomarca">
                                <?php
                                    echo 'Os melhores conteúdos você encontra aqui!';
                                ?>
                            </p> 
                        </td>
                    </tr>
                </table>
                
                <p id="page-title">
                    <?php
                        echo 'TÍTULO AQUI';
                    ?>
                </p>
                <p class="page-content">
                    <?php
                        echo 'Padrão para formatação dos textos dentro das páginas!';
                    ?>
                </p>
            </section>
            
            <aside id="lateral">
                <h1>Sobre nós</h1>
                <img id="foto-sobre-nos" src="img/foto-sobre-nos.png" alt="Ilustração das quatro criadoras do blog.">
                <p class="about">
                    <?php
                        echo "Claudia, Janaina, Katiana e Letícia: somos 4 amigas que adoram dividir descobertas, informações e opiniões sobre o mundo da beleza. Tudo isso sempre de um jeito leve e descontraído porque, pra gente, é como se você estivesse batendo papo conosco!";
                    ?>
                </p>
                <p class="about">
                    <?php
                        echo "Acreditamos que trocar experiências, além de ser super divertido, é um jeito de crescermos juntas. Por isso, também trazemos para a roda tudo o que diz respeito à nossa - e à sua! - individualidade: autoestima, autocuidado, autoconhecimento e desenvolvimento pessoal. Nossa proposta é que você seja quem te faz feliz porque estamos nessa jornada também! Seja muito bem-vindo(a) ao TADS Beauty Tips!";
                    ?>                    
                </p>
                <table>
                    <tr id="redes-sociais">
                        <td>
                            <a href="https://www.youtube.com/coisasdediva" title="Youtube" target="_blank">
                                <img src="img/icon-youtube.png">
                            </a>
                        </td>
                        <td>
                            <a href="https://www.instagram.com/coisasdediva/" title="Instagram" target="_blank">
                                <img src="img/icon-instagram.png">
                            </a>
                        </td>
                        <td>
                            <a href="https://br.pinterest.com/coisasdediva/_created/" title="Pinterest" target="_blank">
                                <img src="img/icon-pinterest.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </aside>
    
            <footer id="rodape">
                <p>
                    <?php
                        echo "© 1996 - 2021 - O melhor conteúdo. Todos os direitos reservados - Segurança e privacidade";
                    ?>
                </p>
            </footer>    
        </div>
    </body>
</html>