<div class="titulo">Array</div>
<?php
    //Declarando um array
    $array = array(1, 2, 3.4, "texto");
    echo $array . "<br>"; //mostra somente o nome
    var_dump($array);
    echo "<br>";
    //Dessas maneiras aqui descritas a print_r é a melhor maneira de percorrer o array
    print_r($array);

    echo '<br>' . $array[0];
    $array[0] = 1234; //Podemos alterar o conteúdo do array diretamente no índice desejado

    //Como acessar um elemento do array
    echo '<br>' . $array[0];
    echo '<br>' . $array[1];
    echo '<br>' . $array[2];
    echo '<br>' . $array[3];
    //Se colocarmos um índice que não existe o php returna um valor nulo
    echo '<br>';
    var_dump($array[4]);

    $texto = 'Esse é um texto de teste';

    echo '<br>' . $texto[11]; //Dessa maneira gera problema se o texto conter acentos
    echo '<br>' . mb_substr($texto, 10, 1); //Essa é a melhor maneira
?>