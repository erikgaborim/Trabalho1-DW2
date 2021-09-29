<?php
  require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $id = $_GET['id'];
  remove_J($id);
  header('location:../views/jogadores.php');
 ?>
