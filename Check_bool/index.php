<?php 
        //IS_BOLL checa se é booleano
        $t = true ;
        if (is_bool($t)){
                //true
                echo "É boolean! <br>";
        }
        if (is_bool(0)){
                //Não vai aparecer;
                echo "É um boolean <br>";
        }
        if (0 == false){
                //true
                echo "O valor ZERO é um valor boolean <br>";
        }
        if (1 == true){
                //true
                echo "O valor UM é um valor boolean";
        }
        
?>