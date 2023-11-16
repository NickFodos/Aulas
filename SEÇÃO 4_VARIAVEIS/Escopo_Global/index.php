<?php
//Escopo Local
$teste = "Sem modificação";
echo $teste;
echo"<br>";
if (true){
    $teste = "Com modificação de IF";
    echo $teste;
    echo"<br>";
}
    echo $teste;
    echo"<br>";

function Local_Interno (){
$teste = "Com moficação Function Local";
    echo $teste; 
    echo"<br>";  
}    
Local_Interno();

function Local_Externo (){
    global $teste ;
    $teste = "Valor modificado ";
        echo $teste . " Dentro de Function Global"; 
        echo"<br>";  
    }    
    Local_Externo();
    echo $teste;
    echo"<br>";
?>