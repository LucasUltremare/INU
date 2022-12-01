<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$studentregno=$_POST['studentregno'];
$password=md5($_POST['password']);
$pincode = rand(100000,999999);
$ret=mysqli_query($bd, "insert into students(studentName,StudentRegno,password,pincode) values('$studentname','$studentregno','$password','$pincode')");
if($ret)
{
$_SESSION['msg']="Student Registered Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Student  not Register";
}
}

?>
<?php } ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>INU - Login</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="assets/css/login.css">

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
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" name="regno" placeholder="Email" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">Esqueceu a senha?</button>
            <input type="submit" value="Log In" class="forms_buttons-action">
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
  <script  src="assets/js/login.js"></script>

</body>
</html>



