<?php
$numeros = [15, 8, 35, 42, 11, 27, 39];
$maior = $numeros[0];
$segMaior = $numeros[0];

foreach($numeros as $numero) {
    if ($numero > $maior) {
        $segMaior = $maior;
        $maior = $numero;
        
    }
    else if ($numero > $segMaior && $numero < $maior) {
        $segMaior = $numero;
    }    
}
echo "O maior número é: " . $maior . "\n";
echo "O segundo maior número é: " . $segMaior . "\n";
?>