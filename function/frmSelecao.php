<?php
  require_once "funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if (!isset($selecao)) {
    $selecao = array();
    $selecao['id'] = 0;
    $selecao['nome'] = "";
    $selecao['titulos'] = "";
    $selecao['posicao'] = "";
    $selecao['participacao'] = "";
    $selecao['id_tecnico'] = "";
  }

  $selecoes = getAll_S();
  $tecnicos = getAll_T();

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Cadastramento de Seleções</title>
    <style media="screen">
      body {
        padding: 2rem;
      }
    </style>
  </head>
  <body>
    
    <h1>Adicionar Seleção</h1>
    <form action="gravarSelecao.php" method="post">
      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$selecao['id']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value='<?php echo "{$selecao['nome']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="titulos" class="form-label">Titulos</label>
        <input type="text" class="form-control" id="titulos" name="titulos" value='<?php echo "{$selecao['titulos']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="posicao" class="form-label">Posição</label>
        <input type="text" class="form-control" id="posicao" name="posicao" value='<?php echo "{$selecao['posicao']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="participacao" class="form-label">Participacao</label>
        <input type="text" class="form-control" id="participacao" name="participacao" value='<?php echo "{$selecao['participacao']}"; ?>'>
      </div>
      <div class="mb-3">
        <label for="id_técnico" class="form-label">Técnico</label>
        <select class="form-select" name="id_tecnico">
          <?php
            foreach ($tecnicos as $tecnico) {
              $selected =
                $tecnico['id'] == $selecao['id_tecnico'] ?
                'selected': '';
              echo "<option $selected value='{$tecnico['id']}'>{$tecnico['nome']}</option>";
            }
           ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Gravar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
