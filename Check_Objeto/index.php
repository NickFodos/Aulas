<?php 
Class Person {
    function AZULcomVERMELHO (){
        echo "Amplificação de feitiço AZUL, revesão de feitiço VERMELHO....... ";
        function ROXO (){
            echo "Vazio ROXO!";
        }
    }
    function Falar (){
        echo "Baum Dea cambada!!";
    }
    function Andar (){
        echo "Você está andando...";
    }
    function Mahoraga (){
        echo "<strong>COM ESSE TESOURO EU INVOCO!!!</strong>";
    }
}
//Atribui a classe a uma variavel criando um novo objeto
$Objeto = new Person();

//cria um novo atributo ao objeto
$Objeto-> nome = "Douma";

echo "O meu nome é " . $Objeto->nome;
echo "<br>";
echo $Objeto -> Falar(); 
echo "<br>";
echo $Objeto ->AZULcomVERMELHO(), ROXO() ;
if (is_object($Objeto)){
    echo "<br>";
    echo "É um objeto";
}

?>