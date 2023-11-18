<?php 
$array = ["a","b","c","d","e",5,3,2,true,23.3,false];
$c=0;
while ($c < count($array)) {

    
if (is_string($array[$c])){ 

    
    echo $array[$c] . "<br>";

}

$c++;
}

?>