<div class="titulo">Atribuições</div>

<?php
    $title = 'Atribuições';

    $numero = 10;
    echo '<br>' . $numero;

    $numero = $numero - 3;
    echo '<br>' . $numero;
    
    $numero = $numero + 1.5;
    echo '<br>' . $numero;
    
    $numero--;
    echo '<br>' . $numero;
    
    --$numero;
    echo '<br>' . $numero;
    
    $numero++;
    echo '<br>' . $numero;

    ++$numero;
    echo '<br>' . $numero;

    $numero = 20;

    $numero -= 5;
    echo '<br>' . $numero;

    $numero += 5;
    echo '<br>' . $numero;

    $numero *= 10;
    echo '<br>' . $numero;

    $numero /= 2;
    echo '<br>' . $numero;

    $numero %= 6;
    echo '<br>' . $numero;

    $numero **= 4;
    echo '<br>' . $numero;

    $numero .= 4; //Apenas concatenação resultado: string(4)"2564"
    echo '<br>' . $numero;

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;

    $texto = $texto . ' qualquer';
    echo '<br>' . $texto;

    $texto .= ' de verdade!';
    echo '<br>' . $texto;

    $valor; //variável null pois não foi definido nenhum valor para ela
    echo '<br>';
    var_dump($valor);

    // Definindo um valor padrão caso a variável não seja iniciada.
    $valor ??= 'default';
    echo '<br>'. $valor;
    ?>