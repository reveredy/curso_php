<div class="titulo">Laço for</div>

<?php
    //O for inicia criando a variável, nesse caso ($cont = 1)
    //Próximo passo ele verifica a expressão ($cont <= 5)
    //Próximo passo ele entra no laço, a partir dai ele n executa mais o (primeiro passo).
    //Agora ele incrementa o $cont com +1 e verifica a expressão
    //entra no loop
    //Faz isso até a expressão ser false
    for($cont = 1; $cont <= 5; $cont++){
        echo "$cont <br>";
    }

    echo "<hr>";
    
    //O for não precisa ter todos os parâmetros nele, mas precisa existir em algum lugar para ser usado
    for(; $cont <= 10; $cont++){
        echo "$cont <br>";
    }
    
    echo "<hr>";
    
    //Aqui ele tem apenas a expressão, mas está usando o $cont do primeiro for e o incremento está dentro do seu loop
    for(; $cont <= 15;){
        echo "$cont <br>";
        $cont++;
    }

    //Ou seja, você não precisa declarar tudo na hora, mas precisa das 3 fases para ele funcionar
    
    $array = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta",
    "Sexta", "Sábado"];
    print_r($array);

    echo "<hr>";
    //Percorrendo um array: começamos do mesmo jeito
    //mas na expressão usamos o count($array) para saber o tamanho do array e assim ter uma expressão completa
    for($i = 0; $i < count($array); $i++){
        // no caso de arrays o $i vai até o tamanho do array -1
        // porque os arrays começam no índice 0
        echo "{$array[$i]} <br>";
    }
    
    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];
    
    echo "<hr>";

    //Para percorrer uma matriz(arrays dentro de array), usamos
    //for dentro de for

    //O primeiro for vai percorrer a quantidade de arrays que
    //existem dentro do (array maior)
    //nesse caso o primeiro for percorre matriz[0]

    //O segundo for vai entrar dentro de cada índice dos arrays

    for($i = 0; $i < count($matriz); $i++){
        for($j = 0; $j < count($matriz[$i]); $j++){
            //Matriz[$i][$j] => na primeira passada seria
            //matriz[0][0]
            //Ele só passa dentro do for com a variável $j até ela ser false, ai sim ele verifica a variável $i novamente
            echo "{$matriz[$i][$j]} ";
        }
        echo "<br>";
    }
?>