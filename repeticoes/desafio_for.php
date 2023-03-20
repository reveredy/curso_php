<div class="titulo">Desafio for</div>
<!--
#
##
###
####
#####
Usar o for...
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php
    //Primeira opção
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j <= $i; $j++){
            echo "#";
        }
        echo "<br>";
    }

    echo "<hr>";
    
    //Segunda opção
    $impressao = '';
    
    for(; strlen($impressao) < 5;){
        $impressao .= "#";
        echo "$impressao <br>";
    }
    
    echo "<hr>";

    //Terceira opção
    for($imp = '#'; $imp !== '######'; $imp .= '#'){
        echo "$imp <br>";
    }
?>