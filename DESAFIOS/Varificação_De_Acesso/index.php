<?php
function verificarAcesso ($idade,$autorizado) {
        if ($idade >= 18 && $autorizado == true ) {
            return "Acesso autorizado";
            } 
            
            elseif ($idade < 18 && $autorizado == true ) {
            return "Acesso negado. Idade mínima requerida: 18 anos";
            } 
            
            elseif ($idade >=18 && $autorizado == false) {
            return "Acesso negado. Autorização necessária";
            }
}
            verificarAcesso(20,true)
?>
