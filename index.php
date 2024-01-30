<?php
    $empresa = 'Emprendimento da NilMar enterprise';
    $nomeempresa = 'nutriNilMar';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body id="body2">
    <header id="headerinfo">
        <p class="nameEmpresa"><?php
            echo $nomeempresa;

        ?></p>
        <ul id="ulNav">
            <li><a href="index.php"><span class="material-symbols-outlined">
                home
                </span>Home</a></li>
            <li><a href="cardapiopage.php"><span class="material-symbols-outlined">
                restaurant_menu
                </span>Cardápio</a></li>
            <li><a href="local.php"><span class="material-symbols-outlined">
                info
                </span>Sobre</a></li>
        </ul>
    </header>
    <main id="main2">
        <p class="pezao">Seja bem-vindo</p>
        <div>
            <p><?php
            echo $empresa;

            ?></p>

        </div>
        
    </main>
</body>
</html>