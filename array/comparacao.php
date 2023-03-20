<div class="titulo">Comparação Arrays</div>

<?php
    $arr1 = ['nome' => "Maria", 'idade' => 20];
    $arr2 = ['nome' => "Maria", 'idade' => 20];

    var_dump($arr1 == $arr2); //true
    var_dump($arr1 === $arr2); //true

    $arr3 = ['idade' => 20, 'nome' => "Maria"];
    var_dump($arr1 == $arr3); //true
    var_dump($arr1 === $arr3); //false
    var_dump($arr1 != $arr3); //false
    var_dump($arr1 !== $arr3); //true

    $arr4 = ['idade' => '20', "nome" => 'Maria'];
    var_dump($arr1 == $arr4); //true
    //Se ele tiver mesma chave e valor ele continua entendendo
    //que são iguais, a menos que faça a comparação estrita
    var_dump($arr1 === $arr4); //false
    //Ordem e tipo diferente


?>