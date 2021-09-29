<?php
  require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $id = $_GET['id'];
  // var_dump($id);
  $jogador = getById_J($id);
  require_once "../views/frmJogador.php";

 ?>
