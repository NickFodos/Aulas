<?php 
    $nome = "Douma" ; 
    //CONTADOR; CONDIÇÃO; INCREMENTO;
    for ($contador = 0; $contador < 10 ; $contador++) {
        echo "testando o for $contador <br>";
        if ($contador === 4 ) {
            echo $nome . "<br>";
    }
        if ($contador === 5) {
            break;
        }}

?>