<?php

    include_once "funcoes.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $selecao = array();
    $selecao['nome'] = $_POST['nome'];
    $selecao['titulos'] = $_POST['copas'];
    $selecao['posicao'] = $_POST['rank'];
    $selecao['id_tecnico'] = $_POST['id_tecnico'];
    $selecao['participacao'] = $_POST['participacao'];
    $selecao['id'] = $_POST['id'];
    if ($selecao['id']==0) {
        insert_S($selecao);
      } else {
        update_S($selecao);
    }

    // insert_S($selecao);

    header('location:../views/selecao.php');
    

?>