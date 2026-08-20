<?php
$numero = 40;

if($numero % 3 == 0 && $numero % 5 ==0){
    echo "O número $numero é divisível por 3 e 5";
}
else if($numero % 3 == 0){
    echo "O número $numero é divisível por 3";
}
else if($numero % 5 == 0){
    echo "O número $numero é divisível por 5";
}
else{
    echo "O número $numero não é divisível por 3 e nem por 5";
}
?>