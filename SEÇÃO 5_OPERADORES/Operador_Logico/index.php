<?php 
$A = 12 > 5;
$B = true;
$C = false;
if (!$C){ echo "NOT"; }
echo "<br>";
echo "<br>";
if ($A && $B) { echo "AND"; }
echo "<br>";
echo "<br>";
if ($A || $C) { echo "OR"; }
echo "<br>";
echo "<br>";



$NOT = [
"op1" => [ 
        "aplico" => 0, 
        "recebo" => 1,
],

"op2" => [
        "aplico" => 1,
        "recebo" => 0,
],   
];

$AND = [
"op1" =>[   
        "aplico" =>" 0 e 0 " ,
        "recebo" => 0,
],
        
"op2" =>[    
        "aplico" => "0 e 1 ",
        "recebo" => 0
],

"op3" =>[    
        "aplico" => "1 e 0 ",
        "recebo" => 0
],

"op4" =>[    
        "aplico" => "1 e 1 ",
        "recebo" => 1,
],
];


$OR = [
"op1" => [
        "aplico" => "0 e 0",
        "recebo" => 0,
],
"op2" => [    
        "aplico" => "0 e 1",
        "recebo" => 1,
],
"op3" => [
        "aplico" => "1 e 0" , 
        "recebo" => 1  ,
],
"op4" => [   
        "aplico" => "1 e 1" ,
        "recebo" => 1   ,
],     
];
echo "<pre>";
print_r($NOT) ;
echo "<br> <hr>";
print_r($AND);
echo "<br> <hr>";
print_r($OR);

?>




 
