<?php 
//Escopo Static
function teste () {
    $A = 0;
    $A++;

    echo  $A ;
    echo "<br>";
}
    teste ();
    teste ();
    teste ();

echo "<br>";

    function testeStatic () {
      static  $A = 0;
        $A++;
    
        echo  $A ;
        echo "<br>";
    }  
    testeStatic ();
    testeStatic ();
    testeStatic (); 
?>