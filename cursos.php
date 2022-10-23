<?php
    include_once('config.php');

    $sql = "SELECT * FROM cursos ORDER BY id_curso DESC";

    $result = $conexao->query($sql);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="curso.css">
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
                <a class="cabecalhoMenuItem" href="">Cursos </a>
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



    <main class="tudo">
         
    </main>



    <footer class="rodaPe">
        <div class="conteudoRodaPe">
            <nav class="itemsRodaPe">
                <ul class="opcaoRodaPe">
                    <li class="tituloItems" ><a class="tituloItems" href=""> Cursos </a></li>
                    <li class="tituloItems"><a class="tituloItems" href=""> Cursos </a></li>
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
</html>