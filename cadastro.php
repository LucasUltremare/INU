<?php

    // if(isseT($_POST['submit'])){
    //     // print_r($_POST['nome']);
    //     // print_r($_POST['email']);
    //     // print_r($_POST['senha']);

    //     include_once('config.php');

    //     $nome = $_POST['nome'];
    //     $email = $_POST['email'];
    //     $senha = $_POST['senha'];

    //     $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')");
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="icon" type="imagem/png" href="favicon.png" />
</head>
<body>
  
        <header class="cabecalho">
            <!-- Barra de navegação -->
            <nav class="cabecalhoMenu">
                <!-- Imagem do site -->
                <a href="inicio.php"> <img class="cabecalhoImage" width="120px" src="INU.gif"></a>
                <!-- Opções de escolha -->
             
                <!-- Botão para entrar na salas de estudo -->
                <a class="cabecalhoMenuBotao"href="login.php">Login</a>
            </nav>
        </header>
   
    <main class="tudo">
        <form class="login" action="login.php" method="POST">
            <h1 class="titulo">Faça seu Cadastro</h1>
            <input type="text" name="nome" required placeholder="Nome" class="boxs"><br>
            <input type="email" name="email" required placeholder="E-mail" class="boxs"><br>
            <input type="password" name="senha" required placeholder="Senha" class="boxs"><br>      
            <input type="submit" name="submit"value="CADASTRAR" class="logar">
        </form>
    </main>
    
</body>
</html>