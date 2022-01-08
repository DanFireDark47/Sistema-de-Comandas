<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <title>Comanda</title>
</head>
<body>

<?php
include_once('Produto.php');
$Resultado = 0;

echo "<div class='Comanda'>";
echo "<div class='ComandaBox'>";
if(isset($_GET['OvosComBacon'])){

    echo $OvosComBacon->getNomePreco();
    $Resultado += $OvosComBacon->getPreco();
}
if(isset($_GET['MistoQuente'])){

    echo $MistoQuente->getNomePreco();
    $Resultado += $MistoQuente->getPreco();
}
if(isset($_GET['SanduicheNatural'])){

    echo $SanduicheNatural->getNomePreco();
    $Resultado += $SanduicheNatural->getPreco();
}
if(isset($_GET['cafe'])){

    echo $cafe->getNomePreco();
    $Resultado += $cafe->getPreco();
}
if(isset($_GET['sucoDeLaranja'])){

    echo $sucoDeLaranja->getNomePreco();
    $Resultado += $sucoDeLaranja->getPreco();
}

if(isset($_GET['cocaCola'])){

    echo $cocaCola->getNomePreco();
    $Resultado += $cocaCola->getPreco();
}

if(isset($_GET['BoloDeCenoura'])){

    echo $BoloDeCenoura->getNomePreco();
    $Resultado += $BoloDeCenoura->getPreco();
}

if(isset($_GET['chaDeCamomila'])){

    echo $chaDeCamomila->getNomePreco();
    $Resultado += $chaDeCamomila->getPreco();
}

echo "<h4> Total a Pagar: " .$Resultado. "</h4>";
echo "</div>";
echo "</div>";
?>
    
</body>
</html>