<?php 

$arrayASS = [
            "nome" => "Gol",
            "ano" => 2006, 
            "Km_rodados" => "258km"
            ];

$array = [
        "Gol",
        2006,
        "258km" 
        ];

$arrayASSestruturada = [
    [
        "nome" => "Gol",
        "ano" => 2006,
        "Km_rodados" => "546km",
    ],
    [
        "nome" => "Volksvageim",
        "ano" => 2012,
        "Km_rodados" => "3445km",
    ],
    [
        "nome" => "Tesla",
        "ano" => 2023,
        "Km_rodados" => "100km",
    ],
    ];



    //IS_ARRAY checa se é uma array;
    if(is_array($array)){
        echo "É uma array <br>";
    }
    if(is_array($arrayASS)){
        echo "É uma array <br>";
    }    
    if(is_array($arrayASSestruturada)){
        echo "É uma array <br>";
    }
    if(is_array(["string",0,true ])){
        echo "É uma array <br>";
    }
    if(is_array("['string',0,true ]")){
        echo "Não é array";
    }
    echo "<hr>";

echo "<pre>";
print_r($arrayASSestruturada);
echo "<br>";
var_dump($arrayASSestruturada);
echo "<br>";
foreach($arrayASS as $ass){
    echo $ass . " ";
}
echo "<br><hr>";






?>