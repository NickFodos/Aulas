<?php 
//Escopo local
$num = 10;

echo" $num Global <br>";

function test () {
    $num = 5;
    echo"$num Local <br>";
}

test();

function test2 () {
    $num = 14;
    echo "$num Local2 <br>";
}

$num = "Modificado ";
test2();
echo" $num Global <br>";
?>