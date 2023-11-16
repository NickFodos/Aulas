<?php 
$XV = 15;
$XX = 20;
$XXI = 21;

function soma ($A,$B) {
    Echo "$A + $B = ". $A + $B;
    echo"<br>";

}
function mult ($A,$B) {
    Echo "$A x $B = ". $A * $B;
    echo"<br>";

}
function div ($A,$B) {
    Echo "$A / $B = ". $A / $B;
    echo"<br>";

}
Function ALL ($A,$B,$C) {
    echo "$A + $B / $C * $A - 69 = " . $A + $B / $C * $A - 69;
}
soma($XV,$XX);
mult($XV,$XX);
div($XV,$XX);
ALL($XX,$XV,$XXI,$XV);
?>