<?php 
$arrayForPush = [];
for ($i = 10; $i <= 20; $i++) {
    array_push( $arrayForPush, $i);
}
 echo "<pre>";
print_r ($arrayForPush);
for ($i = 0 ; $i < count($arrayForPush);$i++){
    if ($arrayForPush[$i] % 2 == 1) {
        echo "Array Impar " . $arrayForPush[$i] ."<br>";
}};
?>