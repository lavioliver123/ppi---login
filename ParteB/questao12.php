<?php
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
$maiorNota = $notas[0]; 
$menorNota = $notas[0];
$media = 0;

$quantMaior = 0;
$quantMenor = 0;

foreach($notas as $nota) {
    $media += $nota;
    if ($nota >= $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
    if($nota >= 6){
        $quantMaior++;
    } else {
        $quantMenor++;
    }
}
$media /= count($notas);    

echo "A maior nota é: " . $maiorNota . "\n";
echo "A menor nota é: " . $menorNota . "\n";
echo "A média das notas é: " . $media . "\n";
echo "Quantidade de notas maiores ou iguais a 6: " . $quantMaior . "\n";
echo "Quantidade de notas menores que 6: " . $quantMenor . "\n";
?>