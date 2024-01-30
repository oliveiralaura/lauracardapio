<?php
    $nomeempresa = 'nutriNilMar';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
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
        <section id="loc">
            <div class="conteudoloc sss">        <p class="pezao" id="chama"><span class="material-symbols-outlined">
                pin_drop
                </span>Venha nos visitar!!!</p>
            </div>
            <div class="conteudoloc"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14773.395877474986!2d-51.315566149999995!3d-22.22683455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949475d0750b1b3d%3A0x86a2c97c517c8093!2sSESI%20Regent!5e0!3m2!1sen!2sbr!4v1706408778884!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </section>
        
        
    </main>
</body>
</html>