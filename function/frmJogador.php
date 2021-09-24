<?php
  require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if (!isset($jogador)) {
    $jogador = array();
    $jogador['id'] = 0;
    $jogador['nome'] = "";
    $jogador['apelido'] = "";
    $jogador['altura'] = "";
    $jogador['peso'] = "";
    $jogador['posicao'] = "";
    $jogador['id_clube']= "";
    $jogador['id_selecao']= "";
    $jogador['data_nascimento'] = "";
  }

  $jogadores = getAll_J();
  $selecoes = getAll_S();
  $clubes = getAll_C();

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Cadastramento de Jogadores</title>
    <style media="screen">
      body {
        padding: 2rem;
      }
    </style>
  </head>
  <body>
    
    <h1>Adicionar Jogador</h1>
    <form action="gravarJogador.php" method="post">
      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$jogador['id']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value='<?php echo "{$jogador['nome']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="apelido" class="form-label">Apelido</label>
        <input type="text" class="form-control" id="apelido" name="apelido" value='<?php echo "{$jogador['apelido']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="id_selecao" class="form-label">Seleção</label>
        <select class="form-select" name="id_selecao">
          <?php
            foreach ($selecoes as $selecao) {
              $selected =
                $selecao['id'] == $jogador['id_selecao'] ?
                'selected': '';
              echo "<option $selected value='{$selecao['id']}'>{$selecao['nome']}</option>";
            }
           ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value='<?php echo "{$jogador['data_nascimento']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="posicao" class="form-label">Posição</label>
        <input type="text" class="form-control" id="posicao" name="posicao" value='<?php echo "{$jogador['posicao']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="altura" class="form-label">Altura</label>
        <input type="text" class="form-control" id="altura" name="altura" value='<?php echo "{$jogador['altura']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="peso" class="form-label">Peso</label>
        <input type="text" class="form-control" id="peso" name="peso" value='<?php echo "{$jogador['peso']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="id_clube" class="form-label">Clube</label>
        <select class="form-select" name="id_clube">
          <?php
            foreach ($clubes as $clube) {
              $selected =
                $clube['id'] == $jogador['id_clube'] ?
                'selected': '';
              echo "<option $selected value='{$clube['id']}'>{$clube['nome']}</option>";
            }
           ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Gravar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
