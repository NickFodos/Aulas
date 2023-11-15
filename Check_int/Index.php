<?php
        //IS_INT checa se um valor é inteiro;
        if(is_int(5)){
            //true
            echo "É um inteiro";
        }
        if (is_int('5')) {
            //false
            echo "Não é um inteiro";
        }

        $a = 69 ;
        if (is_int($a)){
            //true
        echo "È um inteiro";
        }
?>