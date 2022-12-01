<?php
session_start();
error_reporting(1);
include("includes/config.php");
if(isset($_POST['submit']))
{
    $regno=$_POST['regno'];
    $password=md5($_POST['password']);
$query=mysqli_query($bd, "SELECT * FROM students WHERE StudentRegno='$regno' and password='$password'");
if(mysqli_num_rows($query)>0)
{
$num=mysqli_fetch_array($query);
$extra="change-password.php";//
$_SESSION['login']=$_POST['regno'];
$_SESSION['id']=$num['studentRegno'];
$_SESSION['sname']=$num['studentName'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($bd, "insert into userlog(studentRegno,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid Reg no or Password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>INU - Login</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="admin/assets/css/login.css">

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  
</head>
<body>

<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Não tem uma conta?</h2>
        <p class="user_unregistered-text">Que tal criar uma e começar a estudar?</p>
        <button class="user_unregistered-signup" id="signup-button">Registre-se</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Tem uma conta?</h2>
        <p class="user_registered-text">Tá esperando oque pra começar a estudar</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    

    <div class="user_options-forms" id="user_options-forms">

      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form name="admin" method="post">
        <form class="forms_form">
        <fieldset class="forms_fieldset">
        <div class="forms_form">   
             
                     <div class="forms_field">
                        <input type="text" name="regno" placeholder="Nome de Usuario" class="forms_field-input" required autofocus>
                     </div>
                     <div class="forms_field">
                        <input type="password" name="password" placeholder="Senha" class="forms_field-input"  />
                     </div>
                     <div class="forms_buttons">
                     <button type="button" class="forms_buttons-forgot">Esqueceu a senha?</button>
                        <button type="submit" value="Log In" name="submit" class="forms_buttons-action"><span class="glyphicon glyphicon-user"></span> &nbsp;Log In </button>&nbsp;
                        </div>
                </div>
       </form>
      </div>

      
      <div class="user_forms-signup">
        <h2 class="forms_title">Registre-se</h2>
        <form name="dept" method="post">
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" id="studentname" name="studentname" placeholder="Nome Completo" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="text" id="studentregno" name="studentregno" placeholder="Usuario" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="password" id="password" name="password" placeholder="Senha" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" name="submit" id="submit" value="Sign up" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



<!-- partial -->
  <script  src="admin/assets/js/login.js"></script>

</body>
</html>