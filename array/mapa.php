<div class="titulo">Mapa</div>

<?php
    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados);
    echo "<br>";
    var_dump($dados[0]); //Null pois agora temos chave e não índice
    echo "<br>";
    echo $dados["idade"];
    echo "<br>";
    echo $dados["cor"];
    echo "<br>";
    echo $dados["peso"];

    //O que temos aqui:
    $lista = array(
        "a", //índice 0 recebe "a"
        "cinco" => "b", //chave cinco recebe "b"
        "c", //índice 1 recebe "c"
        8 => "d", //índice 8 recebe "d"
        "e", //índice 9 recebe "e"
        6 => "f", //índice 6 recebe "f"
        "g", //índice 10 recebe "g"
        8 => "h" //índice 8 é sobrescrito e recebe "h"
    );
    echo '<br>' . print_r($lista);

    //Para adicionar um novo elemento na lista:
    $lista[] = "i"; //devemos colocar [] porque se não colocarmos ela substituira o array que está na variável por uma string "i" 
    echo '<br>' . print_r($lista);
    
    $lista['vinte'] = "j"; //adicionando um valor com chave no array
    echo '<br>' . print_r($lista);
?>