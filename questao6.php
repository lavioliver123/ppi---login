<?php
$a = 10;
$b = 15;
$c = 21;

if($a >= $b && $a >= $c){
    $maior = $a;
}else if($b >= $a  && $b >= $c){
    $maior = $b;
}else{
    $maior = $c;
}

echo "O maior número é: " . $maior;
?>