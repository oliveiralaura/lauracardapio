<?php
    $nomeempresa = 'nutriNilMar';
    $dias = array(
        "Segunda-feira",
        "Terça-feira",
        "Quarta-feira",
        "Quinta-feira",
        "Sexta-feira"
    );
    $acompanhamentos = array(
        "Arroz",
        "Feijão"
    );
    $pratoprincipal = array("Frango Grelhado", "Carne cozida", "Frango à Parmegiana", "File de Sobrecoxa Assado", "Iscas de File Mignon Bovino");
    
    $salada = array("Salada de Folhas Verdes com Tomate e Cenoura", "Salada de Beterraba com Rúcula", "Salada de Repolho com Tomate", "Mix de Folhas", "Salada de Alface Americana");
    
    $sobremesa = array("Frutas Frescas", "Pudim de Leite Condensado", "Brownie de Chocolate", "Gelatina de Morango", "Maça");
    

    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body id="body1">
    <header id="headerinfo" class="header">
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
    <main id="main1">
        
            
                
            <?php 
                    foreach ($dias as $acompanhadia => $valor) {
                        echo "<div class='refeicao'><div class='dia'>".$valor."</div>";
                        echo "<div class='conteudo'><ul>";
                        echo " <li class='prato'>Acompanhamento:</li>";
                            foreach($acompanhamentos as $acompanha){
                               echo "<li>".$acompanha."</li>";
                            }

                            echo "<li class='prato'>Prato Principal:</li>";
                            echo " <li>".$pratoprincipal[$acompanhadia]."</li>";
                            
                            
                            echo "<li class='prato'>Salada:</li>";
                            echo "<li>".$salada[$acompanhadia]."</li>";
                            
                            echo "<li class='prato'>Sobremesa:</li>";
                            echo "<li>".$sobremesa[$acompanhadia]."</li>";
                            
                            echo "</ul></div></div>";
                                               
                                    
                            
                    }

            ?>
            
    </main>
    <footer id="footer">
        Todos os direitos reservados à  
        <?php
            
            echo $nomeempresa;

        ?> ©.
    </footer>
</body>
</html>