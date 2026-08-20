<?php
$numero = 35;

while($numero >= 0){
    echo $numero;

    if($numero % 5 == 0){
        echo " é múltiplo de 5";
    }
    echo "\n";

    if($numero ==0){
        echo "fim da contagem";
    }

    $numero--;
}
?>