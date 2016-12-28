<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bwt_test</title>

  <!-- Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/bwtTest/template/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
    <div class="container">
      <p style="text-align: right">
        <?php 
        if ($_SESSION['name']) {
          echo  'Добро пожаловать '.$_SESSION['name'].' '; 
          echo $_SESSION['surname'];echo ' ';
          echo '<input type="submit" value="Выход" name="exit">'; 
        }
        else{
          echo '<a href="login">Вход/Регистрация</a>';
        }
        ?>
      </p>