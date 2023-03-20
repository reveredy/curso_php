<div class="titulo">Foreach</div>

<?php
    $array = [
        1 => 'Domingo',
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sábado'
    ];

    foreach($array as $dia){
        echo "$dia <br>";
    }

    foreach($array as $indice => $valor){
        echo "$indice => $valor <br>";
    }

    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach($matriz as $linha){
        foreach($linha as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }

    $numeros = [1, 2, 3, 4, 5, 6];
    //Usando o & podemos pegar a referência de cada item do array e alterar ele diretamente
    foreach($numeros as &$dobrar){
        $dobrar *= 2;
        echo "$dobrar <br>";
    }

    print_r($numeros);

    ?>