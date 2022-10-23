<?php
session_start();
    
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
       
        unset($_SESSION['email'] );
        unset($_SESSION['senha'] );
        header('Location: login.php');

    }else{
        $logado = $_SESSION['email'];
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Bevan&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="favicon.png" />
</head>
<body>
    
    <header class="cabecalho">
        <!-- Barra de navegação -->
        <nav class="cabecalhoMenu">
            <!-- Imagem do site -->
           <a href="inicio.php"> <img class="cabecalhoImage" width="120px" src="INU.gif"></a>
            <!-- Opções de escolha -->
            <ul>
            
            <li>
                <a class="cabecalhoMenuItem" href="cursos.php">Cursos </a>
                <ul>
                <li><a href=""> Portugues</a></li>
                <li><a href=""> Matematica</a></li>
                <li><a href=""> Ingles</a></li>
                <li><a href=""> Programação</a></li>
                </ul>
            </li>
            <li><a class="cabecalhoMenuItem"href="">Grupos</a></li>
            <li><a class="cabecalhoMenuItem"href="">Sobre</a></li>
            <li><a class="cabecalhoMenuItem"href="">Contato</a></li>
            </ul>
            <!-- Botão para entrar na salas de estudo -->
            <a class="cabecalhoMenuBotao"href="sair.php">Sair</a>
        </nav>
    </header>

    <main class="todoConteudo">
        <!-- Primeiro contudo -->
        
        <section class="primeiroConteudo">
           
            <div class="conteudo1">
                <h1 class="conteudo1Texto1">Comece a aprender<br> agora mesmo</h1>
                <h3 class="conteudo1Texto2">Quer que seu futuro comece agora? <br> Temos as ferramentas para fazer isso acontecer.<br> Habilidades reais para empregos reais.</h3>
                <div class="conteudoSpace">
                    <a  class="conteudo1Botao1" href="">Veja todos os cursos</a><br><br><br>
                    <a  class="conteudo1Botao2" href="">Grupo de estudos</a>
                </div>
            </div>
            <div class="conteudoImagens">
            <img id="conteudoImagem1" width="200px" src="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/circles.png" alt="" id="1511404975" class="" data-dm-image-path="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/circles.png"/>
            <img id="conteudoImagem2" width="350px" src="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/man_studying.png" alt="" id="1409312964" class="" data-dm-image-path="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/man_studying.png"/>
            <img id="conteudoImagem3"src="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/icon.svg" alt="" id="1851915875" class="" data-dm-image-path="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/icon.svg"/>
        </div>
    </div>
        </section>

            <!-- Segundo conteudo -->
        <section class="segundoConteudo">
            <div class="conteudo2">
                <h1 class="esquerda" id="conteudo2Texto">Escolha a matéria</h1>
            <div class="direita" id="conteudo2Botoes">
                <a class="conteudo2Botao1" href="">Todos os cursos</a>
                <a class="conteudo2Botao2" href="">Todas os grupos</a>
            </div>
            </div>
        </section>

            <!-- Terceiro conteudo -->
        <section class="terceiroConteudo">
            <div class="baixo">
            <div class="conteudo3">
                <div class="conteudos3Boxs">
                    <h2 class="conteudo3Titulos">Matematica</h2>
                    <p class="conteudo3ConteudoBox">Ao final deste curso, você terá as<br> habilidades necessárias para se <br>desenvolver no campo.</p>
                    <div class="conteudo3Botoes">
                        <a class="conteudo3Botao" href="">3 cursos</a>
                        <a class="conteudo3Botao" href="">3 cursos</a>
                    </div>
                </div>

                <div class="conteudos3Boxs">
                    <h2 class="conteudo3Titulos">Matematica</h2>
                    <p class="conteudo3ConteudoBox">Ao final deste curso, você terá as<br> habilidades necessárias para se <br>desenvolver no campo.</p>
                    <div class="conteudo3Botoes">
                        <a class="conteudo3Botao" href="">3 cursos</a>
                        <a class="conteudo3Botao" href="">3 cursos</a> 
                    </div>
                </div>

                <div class="conteudos3Boxs">
                    <h2 class="conteudo3Titulos">Matematica</h2>
                    <p class="conteudo3ConteudoBox">Ao final deste curso, você terá as<br> habilidades necessárias para se <br>desenvolver no campo.</p>
                    <div class="conteudo3Botoes">
                        <a class="conteudo3Botao" href="">3 cursos</a>
                        <a class="conteudo3Botao" href="">3 cursos</a>
                    </div>
                </div>
       
<br>
         
                <div class="conteudos3Boxs">
                    <h2 class="conteudo3Titulos">Matematica</h2>
                    <p class="conteudo3ConteudoBox">Ao final deste curso, você terá as<br> habilidades necessárias para se <br>desenvolver no campo.</p>
                    <div class="conteudo3Botoes">
                        <a class="conteudo3Botao" href="">3 cursos</a>
                        <a class="conteudo3Botao" href="">3 cursos</a> 
                    </div>
                </div>

                <div class="conteudos3Boxs">
                    <h2 class="conteudo3Titulos">Matematica</h2>
                    <p class="conteudo3ConteudoBox">Ao final deste curso, você terá as<br> habilidades necessárias para se <br>desenvolver no campo.</p>
                    <div class="conteudo3Botoes">
                        <a class="conteudo3Botao" href="">3 cursos</a>
                        <a class="conteudo3Botao" href="">3 cursos</a>
                    </div>
                </div>

                <div class="conteudos3Boxs">
                    <h2 class="conteudo3Titulos">Matematica</h2>
                    <p class="conteudo3ConteudoBox">Ao final deste curso, você terá as<br> habilidades necessárias para se <br>desenvolver no campo.</p>
                    <div class="conteudo3Botoes">
                        <a class="conteudo3Botao" href="">3 cursos</a>
                        <a class="conteudo3Botao" href="">3 cursos</a>
                    </div>
                </div>
            </div>
        </div> 
        </section>

        <!-- quarto conteudo -->

        <section class="quartoConteudo">
            <div class="esquerda" id="conteudo4">
                <img class="conteudo4Imagem1" src="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/new_label_1.png" alt="" id="1358305769" class="" data-dm-image-path="https://irt-cdn.multiscreensite.com/7bb0dc3ec12b401487d1ac549ee08159/dms3rep/multi/new_label_1.png"/>
                <h1 class="conteudo4Titulo">Filosofia</h1>
                <h3 class="conteudo4SubTitulo">Conteudo / Ensino médio</h3>
                <p class="conteudo4Conteudo">Em Filosofia, consiste em uma representação <br>mental e linguística de um objeto concreto ou abstrato,<br> significando para a mente o próprio objeto no processo<br> de identificação, classificação e descrição do mesmo.<br> Quando contemplado como essência, um conceito define <br>a natureza de uma entidade.</p>
                <a class="conteudo4Botao" href="">Saiba Mais</a>
            </div>
            <div class="direita">
            <img class="conteudo4Imagem2" src="filosofo.png"/>
        </div>
        </section>

        <!-- quinto conteudo -->

        <section class="quintoConteudo">
            <div class="conteudo5">
                <h1 class="conteudo5Titulo">Tem alguma<br> pergunta?</h1>
                <p class="conteudo5Subtiulos">Nome</p>
                <input class="conteudo5Box" type="text" name="" id="">
                <p class="conteudo5Subtiulos">E-mail</p>
                <input class="conteudo5Box" type="email" name="" id="">
                <p class="conteudo5Subtiulos">Curso</p>
                <select class="conteudo5Box2" name="" id="">
                    <option value=""></option>
                    <option value="">Matematica</option>
                    <option value="">Matematica</option>
                    <option value="">Matematica</option>
                    <option value="">Matematica</option>
                </select>
                <p class="conteudo5Subtiulos">Mensagem</p>
                <input class="conteudo5Box" type="text" name="" id=""><br>
                <div class="conteudo5Botao">
                <input class="conteudo5Enviar" type="submit" value="Enviar Mensagem">
                </div>

            </div>
        </section>

    </main>

    <footer class="rodaPe">
        <div class="conteudoRodaPe">
            <nav class="itemsRodaPe">
                <ul class="opcaoRodaPe">
                    <li class="tituloItems" ><a class="tituloItems" href="cursos.php"> Cursos </a></li>
                    <li class="tituloItems"><a class="tituloItems" href="cursos.php"> Cursos </a></li>
                    <li>
                        <ul class="tituloItems"><a class="tituloItems" href=""> Sobre </a></ul>
                        <ul class="tituloItems"><a class="tituloItems" href=""> Contato </a></ul>
                    </li>
                    <li class="tituloItems">Fique por dentro das <br> novidade do INU<br>
                    <input class="boxFooter" type="text"  placeholder="E-mail">    <br>
                    <input class="enviarFooter" type="submit" value="ENVIAR">
                    </li>
                </ul>
            </nav>
            <p class="direitos"> © 2022 Todos os direitos reservados | INU</p>
        </div>
    </footer>
</body>
<script src="index.js"></script>
</html>