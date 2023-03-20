<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo '<br>';
    echo False;
    echo '<br>';

    var_dump(true);
    echo '<br>';
    var_dump(false);
    //O tipo booleano no PHP ele é case insensitive. Ou seja
    //não importa se é letra maiuscula ou minuscula.

    var_dump('false');
    echo '<br>';
    echo is_bool(true);
    echo '<br>';

    // fazer as regras de conversões

    //Numerais

    echo '<p>Regras:</p>';
    echo '<br>' . var_dump((bool) 0); //false
    //Zero é o único número que será convertido para false
    echo '<br>' . var_dump((bool) 20); //verdadeiro
    echo '<br>' . var_dump((bool) -1); //verdadeiro

    //Strings

    echo '<br>' . var_dump((bool) ''); //false
    //Para Strings, os únicos dois valores que serão convertidos para false será uma string vazia ou uma String com um "0" dentro. Todo o resto será true
    echo '<br>' . var_dump((bool) '0'); //false
    echo '<br>' . var_dump((bool) ' '); //verdadeiro

    // Forma mais simples de converter

    echo '<br>' . var_dump(!!1);
    //Usando a dupla negação saberemos se o dado converte para true ou false

?>