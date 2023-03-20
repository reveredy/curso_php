<div class="titulo">Funções Anônimas</div>

<?php
    
    //Atribuindo uma função anônima dentro de uma variável
    //variável $soma recebe a função anônima
    $soma = function ($a, $b){
        return $a + $b;
    };
    
    //Para chamar ela usamos o nome da variável;
    echo $soma(1, 2). "<br>";
    
    //Chamando uma função dentro de outra função
    //Os parâmetros $a, $b e $op serão apenas para efeito de eco
    //Nesse caso eles mostraram os números passados e o tipo de
    //operação q será feito
    //Já o 4 parâmetro sim é a função que executará a operação
    function executar($a, $b, $op, $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    };

    //Resultado será: 2 + 4 = 6
    executar(2, 4, "+", $soma);

    $multiplicar = function($a, $b){
        return $a * $b;
    };

    executar(3, 4, "*", $multiplicar);

    function divisao($a, $b){
        return $a / $b;
    }

    executar(5, 6, "/", 'divisao');
?>