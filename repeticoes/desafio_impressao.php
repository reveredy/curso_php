<div class="titulo">Desafio Impressão</div>

<!-- 
    Enunciado
    - Imprima apenas os valores do array que contém índice par
    - Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
 -->

<?php
    $cont = 0;
    
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    for($i = 0; $i < count($array); $i++){
        if($i % 2 === 1) continue;

        echo "$array[$i] <br>";
    }

    echo "<hr>";

    foreach($array as $idx => $valor){
        if($idx % 2 !== 0) continue;

        echo "$valor <br>";
    }
?>