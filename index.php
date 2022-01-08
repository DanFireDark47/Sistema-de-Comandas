<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <title>Praticando - 01</title>
</head>
<body>
    <form action="Comanda.php" method="GET">
    
<?php
    
    include_once('Produto.php');
    
    echo "<div class='Produto'><h5>".$OvosComBacon->getComida() . "</h5>" ."<img src=". $OvosComBacon->getFoto() . " alt=". $OvosComBacon->getNome() ."><input type='checkbox' name='OvosComBacon' value='OvosComBacon'></input></div>";

    echo "<div class='Produto'><h5>".$MistoQuente->getComida() . "</h5>" ."<img src=". $MistoQuente->getFoto() . " alt=". $MistoQuente->getNome() ."><input type='checkbox' name='MistoQuente' value='MistoQuente'></input></div>";

    echo "<div class='Produto'><h5>".$SanduicheNatural->getComida() . "</h5>" ."<img src=". $SanduicheNatural->getFoto() . " alt=". $SanduicheNatural->getNome() ."><input type='checkbox' name='SanduicheNatural' value='SanduicheNatural'></input></div>";

    echo "<div class='Produto'><h5>".$BoloDeCenoura->getComida() . "</h5>" ."<img src=". $BoloDeCenoura->getFoto() . " alt=". $BoloDeCenoura->getNome() ."><input type='checkbox' name='BoloDeCenoura' value='BoloDeCenoura'></input></div>";

    echo "<div class='Produto'><h5>".$cafe->getBebida() . "</h5>" ."<img src=". $cafe->getFoto() . " alt=". $cafe->getNome() ."><input type='checkbox' name='cafe' value='cafe'></input></div>";

    echo "<div class='Produto'><h5>".$sucoDeLaranja->getBebida() . "</h5>" ."<img src=". $sucoDeLaranja->getFoto() . " alt=". $sucoDeLaranja->getNome() ."><input type='checkbox' name='sucoDeLaranja' value='sucoDeLaranja'></input></div>";

    echo "<div class='Produto'><h5>".$cocaCola->getBebida() . "</h5>" ."<img src=". $cocaCola->getFoto() . " alt=". $cocaCola->getNome() ."><input type='checkbox' name='cocaCola' value='cocaCola'></input></div>";
    
    echo "<div class='Produto'><h5>".$chaDeCamomila->getBebida() . "</h5>" ."<img src=". $chaDeCamomila->getFoto() . " alt=". $chaDeCamomila->getNome() ."><input type='checkbox' name='chaDeCamomila' value='chaDeCamomila'></input></div>";

    



?> 
    <input class="submitCardapio" type="submit" value="Enviar">
    </form>

    

</body>
</html>