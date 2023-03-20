<div class="titulo">Tipo Inteiro</div>

<?php
    echo 11;
    echo '<br>';

    var_dump(11);
    // var_dump() é uma função que nos retorna
    // algumas informações sobre o que foi passado
    // como: nome tipo e o valor

    echo '<br>';
    echo PHP_INT_MAX, '<br>';
    echo PHP_INT_MIN, '<br>';
    echo 011, '<br>';
    //Base Octal, a base octal aceita números de 0 a 7
    echo 0b1101011110; //Base Binário, só aceita 0 e 1
    // após o primeiro 0 colocamos o b para sinalizar
    // que é binário
    echo 0xa1bcd0;
    // Hexadecimal, aceita números e letras até f
?>