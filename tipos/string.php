<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também");
    echo '<br>';

    //Concatenação
    echo "Nós também" . ' somos';
    // O ponto(.) é usado para concatenar Strings no PHP
    echo '<br>';

    echo "Também aceito", " vírgulas", " mas, somente quando for com o 'echo'", '<br>';
    // A vírgula só é aceita para concatenar quando for usada dentro
    // do comando echo

    echo "'Teste'" . ' "Teste"' . ' \'Teste\'' . " \"Teste\"";
    // contrabarra (\) é usado para caracteres de scape 

    //Alternativa para o echo
    print("<br>Também existe a função print");
    print "<br>Também existe a função print";

    //Tanto o echo como o print podem ser usados com ou sem os
    //Parenteses, mas ambos são funções

    //Algumas funções

    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('minimizado');
    echo '<br>' . ucfirst('Só a primeira letra maíuscula');
    echo '<br>' . ucwords('Primeira letra de cada palavra maíuscula');
    echo '<br>' . strlen('Quantas letras tem a string');
    echo '<br>' . mb_strlen('Letras com acentos contam como 2 é');
    echo '<br>' . substr('só uma parte mesmo', 7, 6);
    //o primeiro parâmetro é em qual casa vai começar
    //o segundo seria quantas casas pra frente ele vai contar
    //Detalhe é q a última casa n é contada, nesse exemplo seriam (6) depois da setima casa,
    //então pegaria "parte ". mas como a última não conta pega somente "parte" sem o espaço.
    //Se não for passado o segundo parâmetro ele pega todas a partir de onde foi especificado

    echo '<br>' . str_replace('maximizado', 'aquilo', "Trocar maximizado");
    //Troca todas as palavras 'maximizado' que for encontrado

    echo str_contains('!AbcaBcabc', 'abc');
    echo '<br>';
?>