<!doctype html>
<html>

<head>
<title>Online Forum Project DSW</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1> Online Forum</h1>
  <div id="wrapper">
  <div id="menu">
      <a class="item" href="index.php"> Home </a>
      <a class="item" href="create_topic.php"> Create a topic</a>
      <a class="item" href="create_cat.php"> Create a category</a>
    </div>

  <div id="userbar">

  <div id="userbar">
    <?php
    session_start();

      if(isset($_SESSION['signed_in']))
      {
          echo 'Hello ' . $_SESSION['user_name'] . '! Not you? <a href="signout.php">Sign out</a>';
      }
      else
      {
          echo '<a href="signin.php">Sign in</a> or <a href="signup.php">create an account</a>.';
      }
      ?>
  </div>
  </div>

  <div id="content">
