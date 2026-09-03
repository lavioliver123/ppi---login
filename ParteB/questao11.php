<?php
$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$maior = $numeros[0];
$menor = $numeros[0];

foreach($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }

    if ($numero < $menor) {
        $menor = $numero;
    }
}

echo "O maior número é: " . $maior . "\n";
echo "O menor número é: " . $menor . "\n";

?>