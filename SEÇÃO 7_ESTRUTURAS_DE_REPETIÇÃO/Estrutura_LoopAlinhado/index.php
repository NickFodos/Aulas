<?php 
$externo = 0;

while ($externo <10){
    echo "Loop Externo $externo <br>";
$interno = 0;    
    while ($interno <=5){
        echo "<br>Loop Interno $interno <br>";
    
    
        $interno++;
    }

    $externo++;
}
?>