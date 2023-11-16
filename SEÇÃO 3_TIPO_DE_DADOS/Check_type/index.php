<?php 
$arrayASSperson = [
        "nome" => "Matchucaba",
        "idade" => 19,
        "Jogo_Favorito" => "Genshin Impact",
        "Existe" => true
];

echo gettype($arrayASSperson);
echo "<br>";
echo gettype($arrayASSperson["nome"]) ;
echo "<br>";
echo gettype($arrayASSperson["idade"]) ;
echo "<br>";
echo gettype($arrayASSperson["Jogo_Favorito"]) ;
echo "<br>";
echo gettype($arrayASSperson["Existe"]) ;
echo "<br>";

?>