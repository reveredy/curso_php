<div class="titulo">Função e Escopo</div>

<?php
    //O grande objetivo de criar função é para reutilizar código
    //e não precisar ficar reescrevendo toda x que quiser usar

    function imprimirMensagem(){
        echo "Olá!";
        echo "Até a próxima!<br>";
    }

    imprimirMensagem();
    imprimirMensagem();
    imprimirMensagem();

    $variavel = 1;

    function trocaValor(){
        $variavel = 2;

        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValor();
    echo "Depois: $variavel <br>";

    //O valor da variável não se alterou pois a variável de dentro da função só é válida enquanto a função estiver sendo executada

    function trocaValorDeVerdade(){
        global $variavel;
        //Quando usamos a palavra reservada "global" estamos
        //alterando o escopo dessa variável, que antes era
        //local(somente dentro da função)
        //agora passa a ser global, válida em todo o documento
        //php
        $variavel = 3;

        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValorDeVerdade();
    echo "Depois: $variavel <br>";

    var_dump(trocaValorDeVerdade());
?>