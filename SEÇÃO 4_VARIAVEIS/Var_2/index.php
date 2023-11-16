<?php 
//variavel de referencia;
$A = 10;
$B =& $A;

echo $A . "<br>" . $B;

$B = 20;

echo "<br>Pos referencia<br>";
echo $A . "<br>" . $B;

$A = 0;

echo "<br>Pos referencia_2<br>";
echo $A . "<br>" . $B . "<br>";

$AB = "OPÇÃO A";
$BA = $AB;
echo $AB ."<br><br>". $BA . "<br><br>";
$BA = "OPÇÃO B";
echo "Pos modificar; <br><br>";
echo $AB ."<br><br>". $BA . "<br>";
?>