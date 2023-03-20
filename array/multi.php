<div class="titulo">Multidimensionais</div>
<?php
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "naturalidade" => "São Paulo"
        ],
        [
            "nome" => "Maria",
            "idade" => 25,
            "naturalidade" => "Bahia"
        ],
    ];

    print_r($dados);
    echo '<br>' . $dados[0]['idade'];//Acessando o array $dados
    //no índice [0] e chave ['idade']. Retorna 26, idade de Roberto
    echo '<br>' . $dados[1]['idade'];// Retorna 25, idade de Maria

    //Adicionando um novo elemento dentro do array
    $dados[] = [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Cidade do México"
    ];

    echo '<br>';
    print_r($dados);
    
    $dados[2]["vizinho"] = "Chaves";
    echo '<br>';
    print_r($dados[2]);
    
    unset($dados[1]); // Remove o índice 1 (Maria) nesse caso
    //Uma curiosidade é que o unset não reordena o array após remover
    //O array ficará a partir de agora com o índice 0 e 2
    echo '<br>';
    print_r($dados);

    var_dump($dados[1]);// NULL porque removemos e ele não ordena novamente.
    ?>