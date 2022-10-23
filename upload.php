<?php

include_once('config.php');

$msg = false;

if(isset($_FILES['arquivo'])){

    $nome = strtolower($_POST['nome']);
    $desc = strtolower($_POST['desc']);

    $extensao  = strtolower(substr($_FILES['arquivo']['name'],-4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "upload/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);

    $result = mysqli_query($conexao,"INSERT INTO cursos(nome_curso,desc_curso,imagem_curso,data)VALUES('$nome','$desc','$novo_nome',NOW())");
    
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Upload de Arquivos</h1>
    <?php if($msg != false) echo "<p> $msg </p>"; ?>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
    Nome da Materia: <input type="text" required name="nome">   
    Descrição: <input type="text" required name="desc" > 
    Arquivo: <input type="file" required name="arquivo"><br>
    <input type="submit" value="Salvar">


    </form>
</body>
</html>