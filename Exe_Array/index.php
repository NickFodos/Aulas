<?php 
$arrayASSperson = [
    [
        "nome" => "Matchucaba",
        "idade" => 19,
        "Jogo_Favorito" => "Genshin Impact",
        "Existe" => true
    ],
    [
        "nome" => "NickFodos",
        "idade" => 10,
        "Jogo_Favorito" => "Roblox",
        "Existe" => true
    ],
];

echo "<pre>";
print_r($arrayASSperson);

if ($arrayASSperson[0]["idade"] > 18){
    echo "<br>";
    Echo $arrayASSperson[0]["nome"] . " Você é Maior de idade";
    echo "<br>";
}
if($arrayASSperson[1]["idade"] < 18){
    echo "<br>";
    Echo $arrayASSperson[1]["nome"] . " Você é Menor de idade";
    echo "<br>";
}

if (is_string($arrayASSperson[0]["nome"])){
    echo "<br>";
    echo $arrayASSperson[1]["nome"] . " É uma string";
    echo "<br>";
}
if (is_numeric($arrayASSperson[1]["idade"])){
    echo "<br>";
    echo $arrayASSperson[1]["idade"] . " É um numero";
    echo "<br>";
}
if (is_bool($arrayASSperson[1]["Existe"])){
    echo "<br>";
    echo $arrayASSperson[1]["Existe"]  . " É um booleano";
    echo "<br>";
if (is_array($arrayASSperson)){
    echo "<br>";
    foreach ($arrayASSperson[1] as $array){
         echo "É um item da Array => " . $array . "<br>";
    }
}    


}


?>