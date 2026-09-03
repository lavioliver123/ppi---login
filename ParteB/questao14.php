<?php
$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

foreach($numeros as $numero){
    $contagem[$numero] = isset($contagem[$numero]) ? $contagem[$numero] + 1 : 1;
}
echo "Contagem de ocorrências dos números:\n";
foreach($contagem as $numero => $quantidade){
    echo $numero . " aparece " . $quantidade . " vezes\n";
}
?>