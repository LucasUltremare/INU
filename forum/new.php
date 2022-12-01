<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/icon.png">
    <title>Adicionar novo topico  </title>
  </head>
  <body>
        <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                  <img src="images/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                  Forum dos Estudantes
                </a>
              </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Adicionar novo topico </h1><br>
            <div class="container">

              
                  <form action="new.php" method="post">


                    <div class="form-group">
                      <label for="formGroupExampleInput">Insira o Título do Fórum</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira o cabeçalho do fórum aqui" name="question">
                    </div>
            
            <label>Selecionar Categoria</label>
            <select class="form-control" name="select" id="select">
              <option value="Matematica">Matematica</option>
              <option value="Literatura">Literatura</option>
              <option value="Física">Física</option>
              <option value="Quimica">Quimica</option>
              <option value="biologia">Biologia</option>
            </select>
            <br>
            <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nome do Autor" name="author">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Email do Autor" name="email">
                </div>
              </div>
              <br>

              <div class="form-group">
                  <label for="formGroupExampleInput1">Descrição detalhada</label>
                  <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Insira a descrição do fórum" name="description">
              </div>

              <button type="submit" name="submit" class="btn btn-secondary btn-lg btn-block">+ Adicionar Forum</button>
              
            
          </form>

        </div>
        </div>
    </div>
      
    
      
    <footer>
 <center>
  <h6 class="footer">INU - Institute National Underground Forum<h6>
  </center>
      </footer>
      


  </body>
  </html>




<?php
      
       if(isset($_POST['submit'])){
           
    
    $qu = $_POST['question'];
    $se = $_POST['select'];
    $au = $_POST['author'];
    $em = $_POST['email'];
    $de = $_POST['description'];
           
           if($qu=='' || $se=='' || $au=='' || $em=='' || $de==''){
               echo "<script>alert('Please Enter all the Fields')</script>";
           }
           else{
           
            $con = mysqli_connect("localhost","lucas","1234");
            mysqli_select_db($con,"forum");

           
date_default_timezone_set('Asia/Kolkata');                                          //TIME

$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);
           
           
           $insert_query = "insert into forum (question, description, author, email, topic, time) values ('$qu','$de','$au','$em','$se','$date_time')";

$res=mysqli_query($con, $insert_query);
               
               echo "<script>alert('Your Forum has been successfully added, Please visit HomePage to see the changes')</script>";
           
           }
           
       }
           
    ?>
