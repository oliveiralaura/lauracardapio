<!-- <?php
    $nomeempresa = 'nutriNilMar';
    $dias = array(
        "Segunda-feira",
        "Terça-feira",
        "Quarta-feira",
        "Quinta-feira",
        "Sexta-feira"
    );
    $pratos = array(
        "Acompanhamento" => array("Arroz", "Feijão"),
        "Prato Principal" => array("Frango Grelhado", "Carne cozida", "Frango à Parmegiana", "File de Sobrecoxa Assado", "Iscas de File Mignon Bovino"),
        "Salada" => array("Salada de Folhas Verdes com Tomate e Cenoura", "Salada de Beterraba com Rúcula", "Salada de Repolho com Tomate", "Mix de Folhas", "Salada de Alface Americana"),
        "Sobremesa" => array("Frutas Frescas", "Pudim de Leite Condensado", "Brownie de Chocolate", "Gelatina de Morango", "Maça")
    );

    
    
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
        
            <div class="refeicao">
                <div class="dia">
                <?php 
                    echo $dias[0];
                ?>
                </div>
                <div class="conteudo">
                    <ul>
                    
                
                    </ul>
                    
                </div>
            </div>
            <div class="refeicao">
                <div class="dia">
                <?php 
                    echo $dias [1];
                ?>
                </div>
                <div class="conteudo">
                    <ul>
                        <li class="prato">Acompanhamento:</li>
                        <li>Arroz</li>
                        <li>Feijão</li>
                        <li class="prato">Prato Principal:</li>
                        <li>Carne cozida</li>
                        <li class="prato">Salada:</li>
                        <li>Salada de Beterraba com Rúcula</li>
                        <li class="prato">Sobremesa:</li>
                        <li> Pudim de Leite Condensado</li>
                    </ul>
                </div>
            </div>
            <div class="refeicao">
                <div class="dia">
                <?php 
                    echo $dias [2];
                ?>
                </div>
                <div class="conteudo">
                    <ul>
                        <li class="prato">Acompanhamento:</li>
                        <li>Arroz</li>
                        <li>Feijão</li>
                        <li class="prato">Prato Principal:</li>
                        <li>Frango à Parmegiana</li>
                        <li class="prato">Salada:</li>
                        <li>Salada de Repolho com Tomate</li>
                        <li class="prato">Sobremesa:</li>
                        <li>Brownie de Chocolate</li>
                    </ul>
                </div>
            </div>
            <div class="refeicao">
                <div class="dia">
                <?php 
                    echo $dias [3];
                ?>
                </div>
                <div class="conteudo">
                    <ul>
                        <li class="prato">Acompanhamento:</li>
                        <li>Arroz</li>
                        <li>Feijão</li>
                        <li class="prato">Prato Principal:</li>
                        <li>File de Sobrecoxa Assado</li>
                        <li class="prato">Guarnição:</li>
                        <li>Macarrão ao Sugo</li>
                        <li class="prato">Salada:</li>
                        <li>Mix de Folhas</li>
                        <li class="prato">Sobremesa:</li>
                        <li>Gelatina de Morango</li>
                    </ul>
                </div>
            </div>
            <div class="refeicao">
                <div class="dia">
                <?php 
                    echo $dias [4];
                ?>
                </div>
                <div class="conteudo">
                    <ul>
                        <li class="prato">Acompanhamento:</li>
                        <li>Arroz</li>
                        <li>Feijão Preto</li>
                        <li class="prato">Prato Principal:</li>
                        <li>Iscas de File Mignon Bovino</li>
                        <li class="prato">Salada:</li>
                        <li>Salada de Alface Americana</li>
                        <li class="prato">Sobremesa:</li>
                        <li>Maça</li>
                    </ul>
                </div>
            </div>
       
    </main>
    <footer id="footer">
        Todos os direitos reservados à  
        <?php
            
            echo $nomeempresa;

        ?> ©.
    </footer>
</body>
</html> -->