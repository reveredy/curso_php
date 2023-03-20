<div class="titulo">Closure & Callable</div>

<?php 
    $soma1 = function($a, $b){
        return $a + $b;
    };

    echo $soma1(2, 3) . '<br>';
    echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';
    
    $soma1 = 1;
    echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';

    function soma2($a, $b){
        return $a + $b;
    };

    echo soma2(5, 10), '<br>';
    echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';

    //Closure é uma classe para representar funções anônimas
    //e a função dentro dela é salva como método

    //Uma função anônima é closure (uma classe criada para representar funções anônimas), mas também é callable

    //Callable é algo que pode ser chamado, como funções
    
    ?>