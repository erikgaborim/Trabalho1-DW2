<?php
	require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);  
  error_reporting(E_ALL);

  $selecoes = getAll_S();
  $tecnicos = getAll_T();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Seleção</title>
    <style media="screen">
      body {
        padding: 2rem;
      }
    </style>
  </head>
  <body>
    <h1>Seleções</h1>
    <br/>
    <a class="btn btn-primary" href="frmSelecao.php" role="button">Nova Seleção</a>
    <br/>
 	  <?php
        foreach ($selecoes as $selecao){
          foreach ($tecnicos as $tecnico){
            if($tecnico['id'] == $selecao['id_tecnico']){
              $tecnico_nome = $tecnico['nome']; 
            }
          }
            echo "
              	<li>ID: {$selecao['id']}</li>
              	<li>Nome: {$selecao['nome']}</li>
              	<li>Quantidade de Copas do Mundo: {$selecao['titulos']}</li>
              	<li>Partipação em Copas do Mundo: {$selecao['participacao']}</li>
              	<li>Posição no Rank FIFA: {$selecao['posicao']}º</li>
              	<li>Técnico: $tecnico_nome</li>
                <a class='btn btn-primary' href='editarSelecao.php?id={$selecao['id']}' role='button'>Alterar</a>
                <a class='btn btn-danger' href='removerSelecao.php?id={$selecao['id']}' role='button'>Deletar</a>
                <p>-----------------------------------------</p>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
