<div class="titulo">Conversões</div>

<?php 
    echo is_int(PHP_INT_MAX); // 1 para verdadeiro 0 para false

    // int para float
    echo '<br>' . 'int para float';
    var_dump(PHP_INT_MAX + 1);
    //Quando nesse passo passou do range máximo dos ints
    // Ele automáticamente passará a ser um float mesmo que
    // não tenha casas decimais
    echo '<br>';
    var_dump(1 + 1.0);
    //O resultado será um float por involver 1 número com vírgula
    //mesmo que o número seja inteiro
    echo '<br>';
    var_dump((float) 3); //Casting, conversão explícita

    // float para int

    echo '<br>' . 'float para int';
    var_dump((int) 2.8); //Casting de float para int pode
    // ocorrer perda de dados pois com a conversão explícita
    // ele não faz nenhum tipo de arredondamento.
    // Nesse caso o valor simplesmente vira int(2)
    echo '<br>';

    var_dump(intval(2.8, 10)); //Outra maneira de fazer uma conversão (mas também é truncado o valor e não arredondado)
    echo '<br>';
    
    var_dump((int) round(2.8)); //Solução, assim teremos um
    //arredondamento antes do casting para int

    // Operações com String
    echo '<br>' . 'Operações com string'. '<br>';

    var_dump(3 + "2");
    // Quando se tem um simbolo de operação seguido de uma string com um número no começo ex: 3 + '2 dois'
    // o PHP tenta converter esse valor e fazer o calculo
    // nesse caso sera um int (5) a saída
    echo '<br>';

    var_dump("3" + 2); // int(5)
    echo '<br>';

    var_dump("3" . 2);
    // string("32"), pois está concatenando e não somando
    echo '<br>';

    // echo is_string("3" + 2); // false
    // echo '<br>';
    
    // var_dump(1 + "cinco"); //erro
    // int(1) e ignora o restante pois não consegue interpretar isso como um número

    var_dump(1 + '5 cinco'); // int(6) pois o cinco está no começo da string e o php converte
    echo '<br>';

    //var_dump(1 + 'cinco 5'); //erro
    // int(1)

    var_dump(1 + "2 + 5"); //int(3)
    //Se for sem espaço dentro da string da erro ex: ("2+5")
    //Pois o PHP só interpreta como número até onde ele encontra número, ignorando o restante
    echo '<br>';

    var_dump(1 + "3.5"); // float(4.5)
    echo '<br>';

    var_dump(1 + "-3.2e2"); // float(-319)
    echo '<br>';

    var_dump((int) "10.5"); //casting int(10)
    echo '<br>';

    var_dump((float) "10.5"); //casting float(10)
    echo '<br>';

?>