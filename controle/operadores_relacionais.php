<div class="titulo">Operadores Relacionais</div>
<?php
    var_dump(1 == 1); //true
    echo '<br>';
    var_dump(1 > 1); //false
    echo '<br>';
    var_dump(1 >= 1); //true
    echo '<br>';
    var_dump(4 < 23); //true
    echo '<br>';
    var_dump(1 <= 7); //true
    echo '<br>';
    var_dump(1 != 1); //false
    echo '<br>';
    var_dump(1 <> 1); //false
    echo '<br>';
    var_dump(1 == '1'); //true
    //Verdadeiro porque com ele está comparando os valores
    //Se usarmos a comparação estrita ele compara valores e
    //tipos, ai seria falso
    var_dump(1 === '1'); //False, porque são valores iguais mas
    //tipos diferentes
    echo '<br>';
    var_dump(111 != '111'); //false
    echo '<br>';
    var_dump(111 !== '111'); //true
    echo '<br>';

    echo "Relacionais no If/Else</p><hr>";
    $idade = 66;
    
    if($idade < 18){
        echo "Menor de idade = $idade anos";
    }else if($idade <= 65){
        echo "Aduto = $idade anos";
    }else{
        echo "Terceira idade = $idade anos";
    }

    echo '<p>Spaceship</p><hr>';
    var_dump(5 <=> 3);
    //Se o operador da esquerda for maior que o da direita
    //indiferente do numero que for
    //Retorna 1
    var_dump(50 <=> 50);
    //Se os números forem iguais, retorna 0
    var_dump(5 <=> 50);
    //Se o operador da direita for maior que o da esquerda
    //Retorna -1
    
    echo '<p>Valores podem ser V ou F</p><hr>';
    var_dump(!!5);

?>

<style>
    p{
        margin-bottom: 0px;
    }

    hr{
        margin-top: 0px;
    }
</style>