<div class="titulo">Recursividade</div>

<?php
    //Exemplo clássico de recursividade é o fatorial

    //Qual o fatorial de 7!?
    // => 7 * 6!
    //     => 6 * 5!
    //         => 5 * 4!
    //             => 4 * 3!
    //                 => 3 * 2!
    //                     => 2 * 1
    //                         => 1 //Condição de Parada!!!

    // A resposta seria:
    //                             => 7! = 5040
    //                         => 7 * 720
    //                     => 6 * 120
    //                 => 5 * 24
    //             => 4 * 6
    //         => 3 * 2
    //     => 2 * 1
    // => 1

    function recursivo1($num){
        $resposta = 0;
        for($i = 1; $i <= $num; $i++){
            $resposta += $i;
        }

        return $resposta;
    }

    echo recursivo1(10);

    function somaRecursivaUmAte($numero){
        //Condição de parada!!!
        if($numero === 1){
            return 1;
        }

        return $numero + somaRecursivaUmAte($numero - 1);
    }

    echo '<br>';
    echo somaRecursivaUmAte(100);
    
    function somaRecursivaEconomica($number){
        return $number === 1 ? 1 : $number + somaRecursivaEconomica($number - 1);
    }

    echo '<br>';
    echo somaRecursivaUmAte(1000);
?>