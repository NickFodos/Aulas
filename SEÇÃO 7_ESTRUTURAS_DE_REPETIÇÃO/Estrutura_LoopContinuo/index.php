<?php 
$c = 0;
while ($c < 10 ) {
    if ($c === 5 || $c === 7) { 
        echo " Pulou a execução $c <br>" ;
        $c ++;
        continue;
    }
    echo "Executando o Loop $c <br>" ;
    $c++;
}

?>