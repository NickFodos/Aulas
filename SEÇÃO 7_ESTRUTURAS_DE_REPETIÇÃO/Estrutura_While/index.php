<?php 

//Definição do contador
$c = 0;

//inicio / definição da estrutura
while ($c < 10) {

    //corpo do loop
    echo "$c  <br>";
    
//incremento do loop
$c = $c +1;
}

echo "Continuando loop <br>";


$x = 0;

//inicio / definição da estrutura
while ($x < 10) {

    //corpo do loop
    echo "$x  <br>";
    
//incremento do loop
$x = $x +2;
}

echo "Continuando loop <br>";

$z = 10;

//inicio / definição da estrutura
while ($z > 0) {

    //corpo do loop
    echo "$z <br>";
    
//incremento do loop
$z = $z -1;
}

echo "Continuando loop <br>";

$a = 0;

//inicio / definição da estrutura
while ($a <= 10) {

    //corpo do loop
   if($a %2==0){
    echo "$a <br>" ;
   }
    
//incremento do loop
$a++;
}
?>