<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
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
                <a class="cabecalhoMenuBotao"href="cadastro.php">Cadastre-se</a>
            </nav>
        </header>
   
    <main class="tudo">
        <form class="login" action="testelogin.php" method="POST">
            <h1 class="titulo">Faça seu login</h1>
            <input type="email" name="email" placeholder="E-mail" class="boxs"><br>
            <input type="password" name="senha" placeholder="Senha" class="boxs"><br>
            <input type="submit" value="LOGAR" name="submit" class="logar">
        </form>
    </main>
    
</body>
</html>