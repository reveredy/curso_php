<div class="titulo">Operações</div>
<?php
    $dados = [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dados2["endereco"] = "Rua A";

    $dadosCompletos = $dados + $dados2;
    //Caso acha conflito de dados como por exemplo 2 chaves nome
    //(1 em cada array), na hora da operação o dado que fica é o
    //que está mais do lado esquerdo da operação. Nesse caso o
    //$dados prevalece
    print_r($dadosCompletos);

    echo '<br>' . is_array($dadosCompletos);
    echo '<br>' . count($dadosCompletos);

    echo '<br>';
    $indice = array_rand($dadosCompletos);
    echo '<br>' . "$indice = $dadosCompletos[$indice]";

    echo '<br>' . "{$dadosCompletos['idade']}";

    //Remover um dado do array
    unset($dadosCompletos['nome']);
    echo '<br>';
    print_r($dadosCompletos);
    //Podemos dar unset no array inteiro tbm se necessário
    unset($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $decimais = $pares + $impares;
    //Nesse caso o + não funciona bem. Pois como os índices se
    //repetem em ambos arrays o que vai ficar é os dados da esquerda

    $decimais = array_merge($pares, $impares);
    //Essa é a forma mais segura para garantir que todos os dados seram mantidos

    sort($decimais); //Isso altera a ordem do array, ordenando eles em ordem crescente

?>