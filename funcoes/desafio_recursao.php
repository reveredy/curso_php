<div class="titulo">Desafio Recursão</div>

<?php
/**
    $array = [
        [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
    ]

    Saída

    > 1
    > 2
    >> 3
    >> 4
    >> 5
    > 6
    >> 7
    >>> 8
    >>> 9
    > 10
 */

 $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

 function imprimirArray($array, $nivel = '>'){
    //Criando a função com 1 parâmetro para um array e outro
    //para o nível inicial '>'
    foreach($array as $elemento){
        //Criamos um foreach para percorrer o array normalmente
        //demos o nome de $elemento para cada item dentro do array
        if(is_array($elemento)){ //Verificando se cada $elemento
            //ainda é um array ou se é valor
            //Se ainda for um array, significa que tem outra
            //camada, e assim chamamos a função novamente
            imprimirArray($elemento, $nivel . '>');
            //cada vez que a função for chamada ela concatena
            //um nível a mais na profundidade do array
            //com o .">" junto com nosso nível inicial
        } else {
            //Quando o resultado for um valor e não um array
            //ele é impresso, isso serve também como nossa
            //Condição de Parada!!!
            echo "$nivel $elemento<br>";
        }
    }
 }

 $array2 = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10, [[[11]]]];

 function buscaResponsiva($arr, $nivel = '>'){
    foreach($arr as $element){
        if(is_array($element)){
            buscaResponsiva($element, $nivel . '>');
        }else{
            echo "$nivel $element<br>";
        }
    }
 }

 echo imprimirArray($array);
 echo "<hr>";
 echo buscaResponsiva($array2);
?>