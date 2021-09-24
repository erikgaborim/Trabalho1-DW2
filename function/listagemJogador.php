<?php
	require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

	$jogadores = getAll_J();
  $clubes = getAll_C();
  $selecoes = getAll_S();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Jogador</title>
    <style media="screen">
      body {
        padding: 2rem;
      }
    </style>
  </head>
  <body>
    <h1>Jogadores</h1>
    <br/>
    <a class="btn btn-primary" href="frmJogador.php" role="button">Novo Jogador</a>
    <br/>
 	  <?php
        foreach ($jogadores as $jogador) {
          $data_nascimento = new \DateTime($jogador['data_nascimento']);
          $dateNow = new \DateTime(date('Y-m-d'));
          $dateDiff = $data_nascimento->diff($dateNow);
          foreach ($clubes as $clube){
            if($clube['id'] == $jogador['id_clube']){
              $clube_nome = $clube['nome']; 
            }
          }
          foreach ($selecoes as $selecao){
            if($selecao['id'] == $jogador['id_selecao']){
              $selecao_nome = $selecao['nome']; 
            }
          }
            echo "
              	<li>ID: {$jogador['id']}</li>
              	<li>Nome: {$jogador['nome']}</li>
              	<li>Apelido: {$jogador['apelido']}</li>
              	<li>Idade: $dateDiff->y anos</li>
              	<li>Altura: {$jogador['altura']} m</li>
              	<li>Peso: {$jogador['peso']} kg</li>
              	<li>Posição: {$jogador['posicao']}</li>
              	<li>Clube: $clube_nome</li>
              	<li>Seleção: $selecao_nome</li>
                <a class='btn btn-primary' href='editarJogador.php?id={$jogador['id']}' role='button'>Alterar</a>
                <a class='btn btn-danger' href='removerJogador.php?id={$jogador['id']}' role='button'>Deletar</a>
                <p>-----------------------------------------</p>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
