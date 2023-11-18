<?php 
// include __DIR__ . "/../../SEÇÃO 9_FUNÇÕES/In_Primary/function.php";
$array = [];
for ($i = 0; $i <= 20; $i++) {
    array_push($array, $i);
    
}

foreach ($array as $key ) { 
    echo $key ." <br>";
}
?>