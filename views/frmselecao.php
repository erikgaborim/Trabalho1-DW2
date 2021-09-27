<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copas do Mundo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--CSS's-->
    <link rel="stylesheet" href="../styles/frm.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/frmSelecao.css">
</head>
<body>
    
    <header>
        <ul>
            <div id="div-header-qatar">
                <li><h1 id="qatar-name">QATAR</h1></li>
            </div>
            <div id="div-header-options">
                <li><a href="../index.php"><h3>Home</h3></a></li>
                <li><a href="jogadores.php"><h3>Jogadores</h3></a></li>
                <li><a href="selecao.php"><h3>Seleções</h3></a></li>
                <li><img src="../images/logo-copa.svg" alt="simbolo_copa_catar"></li>
            </div>
        </ul>
    </header>

    <main> 
        <form action="php/insert.php" method="post">
            <h3>Inserir Seleção</h3>
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="number" name="copas"  placeholder="Quantidade de Copas" required>
            <input type="number" name="participacao" placeholder="Participação em Copas" required>
            <input type="number" name="rank"  placeholder="Posição no Ranking FIFA" required>
            <input type="number" name="id_tecnico" placeholder="Id do Tecnico" required>
          
            <input type="submit" name="acao" value="Enviar">
        </form>
    </main>

    <footer class="rodape">
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
    
</body>
</html>