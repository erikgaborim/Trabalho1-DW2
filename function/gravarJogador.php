<?php

    include_once "funcoes.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $jogador = array();
    $jogador['nome'] = $_POST['nome'];
    $jogador['apelido'] =$_POST['apelido'];
    $jogador['altura'] =$_POST['altura'];
    $jogador['peso'] =$_POST['peso'];
    $jogador['posicao'] =$_POST['posicao'];
    $jogador['data_nascimento'] =$_POST['data_nascimento'];
    $jogador['id_clube'] =$_POST['id_clube'];
    $jogador['id_selecao'] =$_POST['id_selecao'];
    $jogador['id'] = $_POST['id'];

    // var_dump($jogador['id']);
    if ($jogador['id']==0) {
        insert_J($jogador);
      } else {
        update_J($jogador);
        var_dump($jogador);
    }

    // insert_J($jogador);

    header('location:../views/jogadores.php');
    

?>