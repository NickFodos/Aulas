<?php 
$c = 0; 
while ($c < 10) {

 echo "O valor de 'C' é $c <br>"; 
    if ($c === 6 ) {
        echo "Chegamos ao valor requerido";
        break;
    }

    
    $c++;
}
echo "saiu do loop";
?>