<div class="titulo">Argumentos Variáveis</div>

<?php
    function soma($a, $b){
        return $a + $b;
    }

    echo soma(4, 5) . "<br>";
    echo soma(4, 5, 4) . "<br>";
    //Nesse caso o php só reconhece os 2 primeiros parâmetros, os demais ele ignora

    //Para passarmos vários argumentos para uma função, como números
    //devemos usar a função spreed, ela pega todos os parâmetros recebidos e joga dentro de um array
    function somaCompleta(...$numeros){
        $soma = 0;

        foreach($numeros as $num){
            $soma += $num;
        }

        return $soma;
    }

    somaCompleta(1, 2, 3, 4, 5);

    $array = [6, 7, 8, 9, 10];
    somaCompleta(...$array);
    //Quando passamos um array com o spreed ele faz o contrário
    //ele manda como parâmetro um por um dos itens do array

    //Ou seja, quando queremos mandar vários números soltos
    //como parâmetro, devemos usar o spreed na função
    //Quando queremos passar um array como argumento
    //devemos usar o spreed nos argumentos

    function membros($titular, ...$dependentes){
        echo "Titular: $titular <br>";

        if($dependentes){
            echo "Dependentes: <br>";
            foreach($dependentes as $dep){
                echo "$dep <br>";
            }
        }
    }

    echo "<br>";
    membros("Carlos André Pereira Albanus", "Tairini Ribeiro de Oliveira" ,"Katherine Ribeiro Sodre");
    
    echo "<br>";
    membros("Roberto");
?>