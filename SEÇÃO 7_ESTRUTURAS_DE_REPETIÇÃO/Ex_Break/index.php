<?php 
$K = 4;
while ($K < 30) {
    echo " Execurando o Loop $K <br>";
    if ($K === 24) {

        echo "Chegamos no valor desejado";
        break;
    }

    $K = $K + 2;
}

?>