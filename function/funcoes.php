<?php
  function getConnection() {
    try {
      $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      $conexao = new PDO('pgsql:host=localhost;dbname=CUP', "postgres", "1234", $opcoes);
        return $conexao;
    } catch (PDOException $e) {
      return null;
    }
  }

  function getAll_J() {
    $conexao = getConnection();
    $sql = 'SELECT * FROM jogador ORDER BY id;';
    $sentenca = $conexao->query($sql);
    $consulta = $sentenca->fetchAll();
    return $consulta;
  }

  function insert_J($jogador) {
    $conexao = getConnection();
    $sql = "INSERT INTO jogador (nome, apelido, altura, peso, posicao, id_clube, id_selecao, data_nascimento) VALUES (:nome, :apelido, :altura, :peso, :posicao, :id_clube, :id_selecao, :data_nascimento); ";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":nome", $jogador['nome']);
    $sentenca->bindParam(":apelido", $jogador['apelido']);
    $sentenca->bindParam(":altura", $jogador['altura']);
    $sentenca->bindParam(":peso", $jogador['peso']);
    $sentenca->bindParam(":posicao", $jogador['posicao']);
    $sentenca->bindParam(":id_clube", $jogador['id_clube']);
    $sentenca->bindParam(":id_selecao", $jogador['id_selecao']);
    $sentenca->bindParam(":data_nascimento", $jogador['data']);
    $sentenca->execute();
  }

  function update_J($jogador) {
    $conexao = getConnection();
    $sql = "UPDATE jogador SET nome=:nome, apelido=:apelido, altura=:altura, peso=:peso, posicao=:posicao, id_clube=:id_clube, id_selecao=:id_selecao, data_nascimento=:data_nascimento WHERE id=:id; ";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":nome", $jogador['nome']);
    $sentenca->bindParam(":apelido", $jogador['apelido']);
    $sentenca->bindParam(":altura", $jogador['altura']);
    $sentenca->bindParam(":peso", $jogador['peso']);
    $sentenca->bindParam(":posicao", $jogador['posicao']);
    $sentenca->bindParam(":id_clube", $jogador['id_clube']);
    $sentenca->bindParam(":id_selecao", $jogador['id_selecao']);
    $sentenca->bindParam(":data_nascimento", $jogador['data_nascimento']);
    $sentenca->bindParam(":id", $jogador['id']);
    $sentenca->execute();
  }

  function remove_J($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM jogador WHERE id = :id";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $id);
    $sentenca->execute();
  }

  function getById_J($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM jogador WHERE id = :id";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $id);
    $sentenca->execute();
    $jogador = $sentenca->fetch();
    return $jogador;
  }

  function getAll_S(){
    $conexao = getConnection();
    $sql = 'SELECT * FROM selecao ORDER BY id;';
    $sentenca = $conexao->query($sql);
    $consulta = $sentenca->FetchAll(); 
    return $consulta;
  }

  function insert_S($selecao) {
    $conexao = getConnection();
    $sql = "INSERT INTO selecao (nome, titulos, posicao, participacao, id_tecnico) VALUES (:nome, :titulos, :posicao, :participacao, :id_tecnico); ";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":nome", $selecao['nome']);
    $sentenca->bindParam(":titulos", $selecao['titulos']);
    $sentenca->bindParam(":posicao", $selecao['posicao']);
    $sentenca->bindParam(":participacao", $selecao['participacao']);
    $sentenca->bindParam(":id_tecnico", $selecao['id_tecnico']);
    $sentenca->execute();
  }

   function update_S($selecao) {
    $conexao = getConnection();
    $sql = "UPDATE selecao SET nome=:nome, titulos=:titulos, posicao=:posicao, participacao=:participacao, id_tecnico=:id_tecnico WHERE id=:id; ";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":nome", $selecao['nome']);
    $sentenca->bindParam(":titulos", $selecao['titulos']);
    $sentenca->bindParam(":posicao", $selecao['posicao']);
    $sentenca->bindParam(":participacao", $selecao['participacao']);
    $sentenca->bindParam(":id_tecnico", $selecao['id_tecnico']);
    $sentenca->bindParam(":id", $selecao['id']);
    $sentenca->execute();
  }

  function getById_S($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM selecao WHERE id = :id";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $id);
    $sentenca->execute();
    $selecao = $sentenca->fetch();
    return $selecao;
  }

  function remove_S($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM selecao WHERE id = :id";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(":id", $id);
    $sentenca->execute();
  }

  function getAll_C(){
    $conexao = getConnection();
    $sql = 'SELECT * FROM clube ORDER BY id;';
    $sentenca = $conexao->query($sql);
    $consulta = $sentenca->FetchAll(); 
    return $consulta;
  }

  function getAll_T() {
    $conexao = getConnection();
    $sql = 'SELECT * FROM tecnico ORDER BY id; ';
    $sentenca = $conexao->query($sql);
    $consulta = $sentenca->fetchAll();
    return $consulta;
  }

 ?>
