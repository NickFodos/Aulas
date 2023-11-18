<?php 
$array = [10,20,30,40,50,60,70,80,90,100];
$a = 0;
while ($a < count($array)) {
    
    if ($array[$a] == 30 || $array[$a] == 50)  {
         $a++;
        continue;
       
    }
echo $array[$a] . "<br>";
    $a++;
}

?>