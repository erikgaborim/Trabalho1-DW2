<?php
  require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $id = $_GET['id'];
  var_dump($id);
  $selecao = getById_S($id);
  require_once "../views/frmSelecao.php";

 ?>
