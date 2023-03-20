<div class="titulo">Operador Ternário</div>

<?php
    $idade = 70;
    $status;

    if($idade >= 18){
        $status = 'Maior de idade';
    }else{
        $status = 'Menor de idade';
    }

    echo "$status<br>";

    $status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
    //O operador ternário tem uma expressão
    //seguido de um (?), o que vem após é  a resposta se
    //a expressão for verdadeira, seguido de (:)
    //e a resposta se a expressão for falsa

    $status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de idade') : 'Menor de idade';
?>