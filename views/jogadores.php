<?php
	require_once "../function/funcoes.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  $jogadores = getAll_J();
  $clubes = getAll_C();
  $selecoes = getAll_S();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de DW2</title>

    <!--Google Fonts API-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles/jogadores.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <header>
        <ul>
            <div id="div-header-qatar">
                <li><h1 id="qatar-name">QATAR</h1></li>
            </div>
            <div id="div-header-options">
                <li><a href="../index.php"><h3>Home</h3></a></li>
                <li><a href="../views/jogadores.php"><h3>Jogadores</h3></a></li>
                <li><a href="../views/selecao.php"><h3>Seleções</h3></a></li>
                <li><img src="../images/logo-copa.svg" alt="simbolo_copa_catar"></li>
            </div>
        </ul>
    </header>
    <main>
        <section class="section-cards">
            
            <?php
                foreach ($jogadores as $jogador){
                    
                    $data_nascimento = new \DateTime($jogador['data_nascimento']);
                    $dateNow = new \DateTime(date('Y-m-d'));
                    $dateDiff = $data_nascimento->diff($dateNow);

                    // var_dump($data_nascimento);


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
                    <div class='card'>
                    <img src='../images/vinimalvadeza.jpeg' alt='vini'>
                    <div class='card-text-area'>
                        <h1>{$jogador['nome']}</h1>
                        <p class='complete-name'>{$jogador['apelido']}</p>
                        <div class='text'>
                            <p class='atributo'>Posição: </p>
                            <p class='valor'>{$jogador['posicao']}</p>
                        </div>
                        
                        <div class='text'>
                            <p class='atributo'>ID:</p>
                            <p class='valor'>{$jogador['id']}</p>
                        </div>

                        <div class='text'>
                            <p class='atributo'>Seleção:</p>
                            <p class='valor'>$selecao_nome</p>
                        </div>
    
                        <div class='text'>
                            <p class='atributo'>Clube:</p>
                            <p class='valor'>$clube_nome</p>
                        </div>
    
                        <div class='text'>
                            <p class='atributo'>Altura: </p>
                            <p class='valor'>{$jogador['altura']}m</p>
                        </div>
    
                        <div class='text'>
                            <p class='atributo'>Peso: </p>
                            <p class='valor'>{$jogador['peso']} Kg</p>
                        </div>

                        <div class='text'>
                            <p class='atributo'>Idade: </p>
                            <p class='valor'> $dateDiff->y anos</p>
                        </div>

                    </div>
                    <div class='div-buttons'>
                        <a href='../function/editarJogador.php?id={$jogador['id']}'><button class='crud-buttons update-button'>Alterar</button></a>
                        <a href='../function/removerJogador.php?id={$jogador['id']}'><button class='crud-buttons delete-button'>Excluir</button></a>
                    </div>
                </div>
                    ";
                
                }
            ?>

            

            

            <!-- <div class="card">
                <img src="../images/vinimalvadeza.jpeg" alt="vini">
                <div class="card-text-area">
                    <h1>Nome</h1>
                    <p class="complete-name">Nome completo do player</p>
                    <div class="text">
                        <p class="atributo">Posição: </p>
                        <p class="valor">Valor</p>
                    </div>
                    
                    <div class="text">
                        <p class="atributo">Seleção: </p>
                        <p class="valor">Valor</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Clube: </p>
                        <p class="valor">Valor</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Altura: </p>
                        <p class="valor">Valor</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Peso: </p>
                        <p class="valor">Valor</p>
                    </div>
                </div>
                <div class="div-buttons">
                    <a href="#"><button class="crud-buttons update-button">Alterar</button></a>
                    <a href="#"><button class="crud-buttons delete-button">Excluir</button></a>
                </div>
            </div> -->
            
        </section>
        <div class="div">

        <a href="./frmJogador.php"><button class="crud-buttons create-button">Criar</button></a>
        </div>
    </main>

    <footer>
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
</body>
</html>